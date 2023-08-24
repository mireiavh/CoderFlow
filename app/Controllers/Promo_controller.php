<?php
namespace App\Controllers;

use Database\Database_connection;
use Exception;

class Promo_controller{
    private $server;
    private $username;
    private $password;
    private $database;
    private $connection;
    
    public function __construct()
    {
        $this -> server = "localhost";
        $this -> username = "root";
        $this -> password = "";
        $this -> database = "coder_flow";

        $this -> connection = new Database_connection($this->server, $this->username, $this->password,$this->database); 
        $this-> connection -> connect();
    }

    public function index(){
        $results = $this -> get_promo();
        require('../app/views/view_promos.php');
    }

    public function create(){
        $edit = true;
        $promo = null;
        require("../app/views/view_create_promo.php");  
    }

    public function store($data){
        $query = "INSERT
                  INTO promo (nombre_promo, stack, fecha_inicio, fecha_fin, formador, coformador, rp)
                    VALUES ( ?, ?, ?, ?, ?, ?, ?)";
        $stm = $this->connection -> get_connection()->prepare($query);
        $results = $stm->execute([$data['nombre_promo'],
                                $data['stack'],
                                $data['fecha_inicio'],
                                $data['fecha_fin'],
                                $data['formador'],
                                $data['coformador'],
                                $data['rp'],
    ]);

        header("Location:promos");
        try{
            if(!empty($results)) {
                $statusCode = 200;
                $response = "Registro realizado exitosamente";
                echo $response;
                return $response;
                
            }
        }catch (Exception $e) {
            return("Error al registrar");
        }  
    }
    
    public function get_promo() {
        $query = "SELECT * FROM promo";

        $stm = $this->connection -> get_connection()->prepare($query);

        $stm -> execute();
        return $stm-> fetchAll(\PDO::FETCH_ASSOC);
    }

    public function get_one_promo($id) {
        
        $query = "SELECT * FROM promo WHERE identificador=:identificador";
        $stm = $this->connection -> get_connection()->prepare($query);

        $stm -> execute([":identificador" => $id]);
        return $stm-> fetch(\PDO::FETCH_ASSOC);
    }

    public function show($id, $edit) {
        $promo = $this -> get_one_promo($id);       
        require('../app/views/view_create_promo.php');
    }


    public function delete($id){
        
        $query = "DELETE FROM promo WHERE identificador=:identificador";
        
        $stm = $this->connection -> get_connection()->prepare($query);

        $result = $stm -> execute([":identificador" => $id]);
        
        if($result){
            header("Location:/proyectos/coderflow/public/promos");
            exit;
        } else {
            echo "No se pudo eliminar el registro con id: $id";
            }

    }

    public function update($data,$id) {

        $query= "UPDATE promo SET nombre_promo=?, stack=?, fecha_inicio=?, fecha_fin=?, formador=?, coformador=?, 
                        rp=? WHERE identificador=?";
        $stm = $this->connection -> get_connection()->prepare($query);
        $result=$stm->execute([
                       $data['nombre_promo'],
                                $data['stack'],
                                $data['fecha_inicio'],
                                $data['fecha_fin'],
                                $data['formador'],
                                $data['coformador'],
                                $data['rp'],$id
                        ]);
        header("Location:/proyectos/coderflow/public/promos");

    }

    public function filter($id){
        //$promo -> get_one_promo($id);
        $results = $this -> get_filtered_person($id);
        $promo = $this -> get_one_promo($id);
        require('../app/views/view_coders_list.php');
    }

    public function get_filtered_person($id){
        $query = "SELECT * FROM persona WHERE promo_id=:identificador";
        
        $stm = $this->connection -> get_connection()-> prepare($query);
        $stm -> execute([":identificador" => $id]);
        return $stm-> fetchAll(\PDO::FETCH_ASSOC);

    }
}
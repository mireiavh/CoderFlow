<?php
namespace App\Controllers;

use Database\Database_connection;
use Exception;

class Person_controller{
    private $server;
    private $username;
    private $password;
    private $database;
    private $connection;
    
    public function __construct()
    {
        // Definir datos de conexión
        $this -> server = "localhost";
        $this -> username = "root";
        $this -> password = "";
        $this -> database = "coder_flow";

        // Conectar a DB
        $this -> connection = new Database_connection($this->server, $this->username, $this->password,$this->database); 
        $this-> connection -> connect();
    }

    public function index(){
        $results = $this -> get_personas();
        require('../app/views/view_coders_list.php');
    }

    public function create(){
        $edit = true;
       // $coder['edad'] = 23;
        $coder = null;
        require("../app/views/view_create_coder.php");  
    }

    public function store($data){
        $query = "INSERT
                  INTO persona (edad, nombre, apellidos, genero, certificado_discapacidad, 
                                DNI, email, localidad, provincia, telefono, estado)
                    VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stm = $this->connection -> get_connection()->prepare($query);
        $results = $stm->execute([$data['edad'],
                                $data['nombre'],
                                $data['apellidos'],
                                $data['genero'],
                                $data['certificado_discapacidad'],
                                $data['DNI'],
                                $data['email'],
                                $data['localidad'],
                                $data['provincia'],
                                $data['telefono'],
                                $data['estado']
                                ]);
        header("Location:coders");
        try{
            if(!empty($results)) {
                $statusCode = 200;
                $response = "Registro realizado exitosamente";
                echo $response;
                return $response;
                //return[$statusCode, $response, $results];
            }
        }catch (Exception $e) {
            return("Error al registrar");//posibilidad de echo
        }  
    }
    
    public function get_personas() {
        $query = "SELECT * FROM persona";

        $stm = $this->connection -> get_connection()->prepare($query);

        $stm -> execute();
        return $stm-> fetchAll(\PDO::FETCH_ASSOC);
    }

    public function get_one_person($id) {
        
        $query = "SELECT * FROM persona WHERE identificador=:identificador";
        $stm = $this->connection -> get_connection()->prepare($query);

        $stm -> execute([":identificador" => $id]);
        return $stm-> fetch(\PDO::FETCH_ASSOC);
    }

    public function show($id, $edit) {
        $coder = $this -> get_one_person($id);       
        require('../app/views/view_create_coder.php');
    }


    public function delete($id){
        
        $query = "DELETE FROM persona WHERE identificador=:identificador";
        
        $stm = $this->connection -> get_connection()->prepare($query);

        $result = $stm -> execute([":identificador" => $id]);
        
        if($result){
            header("Location:/proyectos/coderflow/public/coders");
            exit;
        } else {
            echo "No se pudo eliminar el registro con id: $id";
            }

    }

    public function update($data,$id) {

        $query= "UPDATE persona SET edad=?, nombre=?, apellidos=? WHERE identificador=?";
        $stm = $this->connection -> get_connection()->prepare($query);
        $result=$stm->execute([
                        $data['edad'],
                        $data['nombre'],
                        $data['apellidos'],$id
                                ]);
        header("Location:/proyectos/coderflow/public/coders");

    }
}
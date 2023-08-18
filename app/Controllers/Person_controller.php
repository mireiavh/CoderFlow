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
        $this -> server = "127.0.0.1";
        $this -> username = "root";
        $this -> password = "";
        $this -> database = "coder_flow";

        // Conectar a DB
        $this -> connection = new Database_connection($this->server, $this->username, $this->password,$this->database); 
        $this-> connection -> connect();
    }

    public function index(){

        $query = "SELECT * FROM persona";

        $stm = $this->connection -> get_connection()->prepare($query);

        $stm -> execute();
        $results = $stm-> fetchAll(\PDO::FETCH_ASSOC);
        require(__DIR__ .'../app/views/view_coders_list.php');
    }

    public function create(){
        require("../app/views/view_create_coder.php"); 
    }

    public function store($data){
        $query = "INSERT
                  INTO person (edad, nombre, apellidos, genero, certificado_discapacidad, 
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
            header("Location:/coderflow/public/coders/");
        try{
            if(!empty($results)) {
                $statusCode = 200;
                $response = "Registro realizado exitosamente";
                //echo $response;
                return $response;
                //return[$statusCode, $response, $results];
            }
        }catch (Exception $e) {
            return("Error al registrar");//posibilidad de echo
        }  
    }


}
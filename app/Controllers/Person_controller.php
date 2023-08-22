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

    /*public function delete($id){
        $query = "DELETE FROM person WHERE id=:id";
        $stm = $this->connection->get_connection()->prepare($query);
        $result = $stm->execute([":id" => $id]);
        var_dump($stm->errorInfo());

        if($result){
            //echo "El registro con el ID $id fue eliminado exitosamente";
            header("Location:coders");
        }else{
            echo "registro no existe";
        }


    }*/
    public function delete($id) {
        // Reemplaza 'get_connection()' por tu forma de obtener la conexión a la base de datos
        $query = "DELETE FROM person WHERE id=:id";
        $stm = $this->connection->prepare($query);
        $result = $stm->execute([":id" => $id]);

        if ($result) {
            // Redirige de manera adecuada después de la eliminación
            header("Location: /coderflow/public/coders");
            exit(); // Importante: asegúrate de salir para evitar que se siga ejecutando el código
        } else {
            echo "Error al eliminar el registro";
        }
    }
}
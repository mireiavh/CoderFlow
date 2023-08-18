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

        $query = "SELECT * FROM persona";

        $stm = $this->connection -> get_connection()->prepare($query);

        $stm -> execute();
        $results = $stm-> fetchAll(\PDO::FETCH_ASSOC);
        require("../app/views/view_coders_list.php");
    }

}
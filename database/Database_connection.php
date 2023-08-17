<?php
namespace Database;

class Database_connection{
    private $server;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct($servidor, $nombre_usuario, $contraseña, $base_de_datos)
    {
        $this -> server = $servidor;
        $this -> username = $nombre_usuario;
        $this -> password = $contraseña;
        $this -> database = $base_de_datos;
    }

    public function connect(){
        try{
            $this -> connection = new \PDO("mysql:host=$this->server;dbname=$this->database", $this->username, $this->password);
            $this -> connection -> setAttribute(\PDO::ATTR_ERRMODE,
                                                \PDO::ERRMODE_EXCEPTION);
            $this -> connection -> setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);

            $this -> connection->exec("SET NAMES 'utf8'");
            return true;
        }catch(\PDOException $e){
            echo "Problemas con la conexión".$e -> getMessage();
            return false;
        }
    }

    public function get_connection(){
        return $this->connection;
    }
}

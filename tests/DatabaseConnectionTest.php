<?php
use PHPUnit\Framework\TestCase;
use Database\Database_connection;

class DatabaseConnectionTest extends TestCase {

    function test_database_connection_works() {
       
        $db = new Database_connection("localhost","root","","coder_flow");
        $result= $db->connect();

        $this ->assertEquals(true,$result);

    } 

}
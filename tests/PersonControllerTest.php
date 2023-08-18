<?php
use PHPUnit\Framework\TestCase;
use App\Controllers\Person_controller;

class PersonControllerTest extends TestCase {
    
    function test_index_function_works() {

        $contr = new Person_controller;
        $data= $contr -> index();
        $result = $data[0]["nombre"];
        $expected = "Fulanito";

        $this ->assertEquals($expected,$result); 

    }
}
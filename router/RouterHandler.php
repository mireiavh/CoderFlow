<?php
namespace Router;

class RouterHandler{
    protected $method;
    protected $data;

    public function set_method($method){
        $this -> method = $method;
    }

    public function set_data($data){
        $this -> data = $data;
    }

    public function route($controller, $id){
        $resource = new $controller;
        switch($this -> method){
            case "get":
                if($id && $id == "create")
                    $resource -> create();
                else if($id)
                    $resource -> show($id, false);
                else
                    $resource -> index();            
                break;
            case "post":
                if($id)
                    $resource -> update($this->data, $id);
                else
                    $resource -> store($this->data);
                break;
            case "edit":
                $resource -> show($id, true);
                break;
            case "delete":
                $resource -> delete($id);
                break;
            }
    }

    }
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

    public function route($controller, $action, $id){
        $resource_controller = new $controller;
        switch($this -> method){
            case "GET":
                switch($action){
                    case 'create':
                        $resource_controller -> create();
                        break;
                    case 'show':
                        $resource_controller -> show($id, false);
                        break;
                    case "edit":
                        $resource_controller -> show($id, true);
                        break;
                    case 'delete':
                        $resource_controller -> delete($id);
                        break;
                    case 'filter':
                        $resource_controller -> filter($id);
                    default:
                        $resource_controller -> index();
                        break;
                }
                break;
            case "POST":
                switch($action){
                    case 'create':
                        $resource_controller -> store($this->data);
                        break;
                    case 'update':
                        $resource_controller -> update($this->data, $id);
                        break;
                    default:
                        $resource_controller -> index();
                        break;
                }                  
                break;
            }
    }

    }
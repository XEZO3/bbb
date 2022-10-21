<?php
namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\classes;

class studentcontroller extends controller{
    function __construct()
    {
        if(session::get("username")==null){
            header("location:/user");
            exit;
        }
    }
    function index(){ 
        $navbar = new navbarcontroller("shared");
        $classes = new classes();
        $data = $classes->getByUserId(session::get("userId"));
        echo session::get("userId");
        $this->view("students/index",['data'=>$data]);
       
      }
    function class($id){
        $navbar = new navbarcontroller("shared");
        $this->view("students/class",['id'=>$id[0]]);
    }
}
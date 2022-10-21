<?php
namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\classes;

class studentcontroller extends controller{
    function __construct()
    {
        if(session::get("username")!=null){
            if(session::get("permession")!="student"){
              $page = session::get("permession") ;
              header("location:/$page");
            }
          }else{
            header("location:/user");
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
    function join($id){
        $navbar = new navbarcontroller("shared");
        $this->view("students/join",['id'=>$id[0]]);
    }
}
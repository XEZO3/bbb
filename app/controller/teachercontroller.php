<?php

namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\classes;

class teachercontroller extends controller{
    function index(){ 
        $navbar = new navbarcontroller("teacher");
        $this->view("teacher/index",[]);
       
      }
    function __construct()
    {
      if(session::get("username")!=null){
      if(session::get("permession")!="teacher"){
        $page = session::get("permession") ;
        header("location:/$page");
        exit;
      }
    }else{
      header("location:/user");
      exit;
    }
    }
      function createMeeting(){
        $navbar = new navbarcontroller("teacher");
        $class = new classes;
        $data = $class->getByUserId(session::get("userId"));
        return $this->view("teacher/createMeeting",['classes'=>$data]);
      }

}

?>
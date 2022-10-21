<?php

namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\classes;

class teachercontroller extends controller{
    // function index(){ 
    //     $navbar = new navbarcontroller();
    //     $this->view("classes/index",[]);
       
    //   }
      function createMeeting(){
        $navbar = new navbarcontroller("teacher");
        $class = new classes;
        $data = $class->all();
        return $this->view("teacher/createMeeting",['classes'=>$data]);
      }

}

?>
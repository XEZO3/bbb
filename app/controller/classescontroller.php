<?php
namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
class classescontroller extends controller{
    function index(){ 
        $navbar = new navbarcontroller();
        $this->view("classes/index",[]);
       
      }
}
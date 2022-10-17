<?php

namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
class homecontroller extends controller{
    function index(){ 
      $navbar = new navbarcontroller();
      $this->view("home/homepage",[]);
     
    }
}
?>
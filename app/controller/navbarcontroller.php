<?php

namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\meeting;
class navbarcontroller extends controller{
    function __construct()
    {
        $this->view("shared/navbar",["title"=>"sss"]);
    }
}
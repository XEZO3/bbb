<?php

namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\user;

 class usercontroller extends controller{
   
    function login(){
        $users = new user;
        $data=[
            "username"=>$_POST['username'],
            "password"=>$_POST['password']
        ];
        $login = $users->login($data);
        if(!empty($login)){
            session::set("userId",$login['id']);
            session::set("username",$login['username']);
            session::set("permession",$login['permession']);

        }
        echo session::get("userId");
    }
    function index(){
        $this->view("home/login",[]);
    }
 }
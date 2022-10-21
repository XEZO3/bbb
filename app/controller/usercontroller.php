<?php

namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\user;

 class usercontroller extends controller{
   function __construct()
   {
    if(session::get("userId") !=null){
        $page = session::get("permession");
        header("location:/$page");
    }
   }
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
            if(session::get("permession")=="teacher"){
                header("location:/teacher");
            }elseif(session::get("permession")=="admin"){
                header("location:/admin");
            }else{
                header("location:/student");
            }
        }else{
            header("location:/user/index?message=user name or password is wrong");
        }
        
    }
    function index(){
        $this->view("home/login",[]);
    }
 }
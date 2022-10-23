<?php

namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\classes;
use MVC\model\user;

 class usercontroller extends controller{
   function __construct()
   {
    if(session::get("username") !=null){
        $page = session::get("permession");
        header("location:/$page");
    }
   }
    function login(){
        $users = new user;
        $class =  new classes();
        $data=[
            "username"=>$_POST['username'],
            "password"=>$_POST['password']
        ];
        $login = $users->login($data);
        if(!empty($login)){
            $allowed = $class->getUserClasses($login['id']);
            $classlist = [];
            foreach($allowed as $row){
                array_push($classlist,$row['class_id']);
            }
            $stringList = implode(",",$classlist);
            session::set("userId",$login['id']);
            session::set("username",$login['username']);
            session::set("permession",$login['permession']);
            session::set("allowedClasses",$stringList);
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
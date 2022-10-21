<?php
namespace MVC\model;
use MVC\core\model;
class user extends model{
    function login($data){
        return  model::db()->row("select * from users where username = ? and password =?",[$data['username'],$data['password']]);
    }
    
}

?>
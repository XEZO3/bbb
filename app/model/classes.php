<?php
namespace MVC\model;
use MVC\core\model;
class classes extends model{
        
        function all(){
            return  model::db()->rows("select * from classes ",[]);
        }
        function getByUserId($id){
            return  model::db()->rows("select * from users_classes JOIN users on users_classes.user_id = users.id join classes on classes.id = users_classes.class_id where users.id = ? ",[$id]);
        }
        function find($id){
            return  model::db()->rows("select * from classes where id = ?",[$id]);
        }
}
?>
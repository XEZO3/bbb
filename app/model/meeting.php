<?php
namespace MVC\model;
use MVC\core\model;
class meeting extends model{
        function create($data){
            return  model::db()->insert('meeting',$data);
        }
        function checkClassMeeting($class_id){
            return  model::db()->row("select * from meeting where class_id = ?",[$class_id]);
        }
        function getMeetingForClass($class_id){
            return  model::db()->rows("select * from meeting where class_id = ?",[$class_id]);
        }
}
?>
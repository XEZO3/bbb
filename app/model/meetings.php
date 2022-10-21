<?php
namespace MVC\model;
use MVC\core\model;
class meetings extends model{
        function create($data){
            return  model::db()->insert('meetings',$data);
        }
        function checkClassMeeting($class_id){
            return  model::db()->row("select * from meetings where class_id = ?",[$class_id]);
        }
        function getMeetingForClass($class_id){
            return  model::db()->row("select * from meetings where class_id = ?",[$class_id]);
        }
        // function deleteRunningMeeting($roomId){
        //     return  model::db()->run('DELETE FROM `meetings` WHERE roomId = ?', [$roomId]);
        // }
}
?>
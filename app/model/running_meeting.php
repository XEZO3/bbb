<?php
namespace MVC\model;
use MVC\core\model;
class running_meeting extends model{
        function create($data){
            return  model::db()->insert('running_meeting',$data);
        }
        function checkClassMeeting($class_id){
            return  model::db()->row("select * from running_meeting where class_id = ?",[$class_id]);
        }
        function getMeetingForClass($class_id){
            return  model::db()->row("select * from running_meeting where class_id = ?",[$class_id]);
        }
        function deleteRunningMeeting($roomId){
            return  model::db()->run('DELETE FROM `running_meeting` WHERE roomId = ?', [$roomId]);
        }
}
?>
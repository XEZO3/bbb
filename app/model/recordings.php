<?php

namespace MVC\model;
use MVC\core\model;
class recordings extends model{
      function getClassRecords($classId){
        return  model::db()->rows("select * from meetings where class_id = ?",[$classId]);
      }  
}
?>
<?php
namespace MVC\controller;

use MVC\config\meetingInit;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\classes;
use MVC\model\running_meeting;

class recordingcontroller extends controller{
    function __construct()
    {
        if(session::get("username")==null){
            header("Location:/user");
            exit;
          }
    }
    function recordingShow(){
        
    }
}


?>
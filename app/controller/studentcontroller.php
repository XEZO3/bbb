<?php
namespace MVC\controller;

use MVC\config\meetingInit;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\classes;
use MVC\model\recordings;
use MVC\model\running_meeting;

class studentcontroller extends controller{
    function __construct()
    {
        if(session::get("username")!=null){
            if(session::get("permession")!="student"){
              $page = session::get("permession") ;
              header("location:/$page");
            }
          }else{
            header("location:/user");
          }
        
    }
    function index(){ 
        $navbar = new navbarcontroller("shared");
        $classes = new classes();
        $data = $classes->getByUserId(session::get("userId"));
        echo session::get("userId");
        $this->view("students/index",['data'=>$data]);
       
      }
    function class($id){
      if($this->checkClasses($id[0])){
        $navbar = new navbarcontroller("shared");
        $this->view("students/class",['id'=>$id[0]]);
      }else{
        header("location:/");
      }
    }
    function join($id){
      if($this->checkClasses($id[0])){
        $navbar = new navbarcontroller("shared");
        $this->view("students/join",['id'=>$id[0]]);
      }else{
        header("location:/");
      }
    }
    function checkMeetingButton($id){
      if($this->checkClasses($id[0])){
      $meeting = new running_meeting();
      @$result = $meeting->getMeetingForClass($id[0]);
      if(!empty($result)){
        $isRunning = meetingInit::isMeetingRunning($result['roomId']);
        if($isRunning ==true){
          $this->view("components/joinButtonT",['id'=>$id[0]]);
        }else{
          $this->view("components/joinButtonF",[]);
        }
      }else{
        $this->view("components/joinButtonF",[]);
      }
    }else{
      header("location:/");
    }
      
      
    }
    function recordShow($id){
      if($this->checkClasses($id[0])){
      $navbar = new navbarcontroller("shared");
      $record = new recordings();
      $meeting = new meetingcontroller();
      $classes = $record->getClassRecords($id[0]);
      $data=[
        
      ];
      foreach($classes as $class){
        if(!empty($meeting->GetRecords($class['meetingID']))){
        array_push($data,$meeting->GetRecords($class['meetingID']));
        }
      }
      $this->view("students/records",['data'=>$data]);
    }else{
      header("location:/");
    }
    }
}
<?php

namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\config\meetingInit;
use MVC\model\meeting;

class meetingcontroller extends controller{
   
    private $meeting;
            function __construct()
            {
                $this->meeting = new meeting();
                if(session::get("username")==null){
                    header("location:/user");
                    exit;
                }
            }
            function createMeeting($randomId = "",$name ="meeting"){
                $classId = $_POST['class_id'];
                $title = ($name =="meeting")?$_POST['title']:$name;
                if(session::get("permession")>=100){
                $check = $this->meeting->checkClassMeeting($classId);
                $meetingId = ($randomId==null)?rand():$randomId;
                     
                if(empty($check)){
                    $data = [
                        "roomId"=>"$meetingId",
                        "class_id"=>$classId,
                    ]; 
                   $result = meetingInit::initcreate($meetingId,$title);
                   print_r($result);
                   if($result->returncode == "SUCCESS"){
                    $insert = $this->meeting->create($data);
                    if($insert){
                         meetingInit::initjoin($meetingId);
                        echo"it is good";
                    }else{
                    echo"something went wronge";
                    }
                   } else{
                    echo"ssss";
                   }    
                }else{
                    $roomid= $check['roomId'];
                    
                
               $result = meetingInit::isMeetingRunning($roomid);
                    if($result == true){
                        meetingInit::initjoin($roomid);
                    }else{
                        $this->meeting->deleteRunningMeeting($roomid);
                        $this->createMeeting($meetingId,$title);
                    }
                }
            }else{
                header("location:/");
            }
            }
            function joinMeeting($classId){
                $data = $this->meeting->getMeetingForClass($classId[0]);
                @$isrunning = meetingInit::isMeetingRunning($data['roomId']);
               if($isrunning == true){
                meetingInit::initjoin($data['roomId']);
                echo $data['roomId'];
               }else{
                echo"there is no meeting right now";
               }
                  
            }
        // function generateUrl($conf,$type){
        //     $url = $this->url.$type."?";
        //     $checksum="$type";
        //     foreach($conf as $key =>$value){
        //         $url .="&".$key."=".$value;
        //         $checksum .="&".$key."=".$value;
        //     }
        //     $result = $url."&checksum=".sha1($checksum.$this->secret);
        //     return $result;
        // }



        
        // function initjoin($classId){
        //     $data = $this->meeting->getMeetingForClass($classId);
        //     $conf =[
        //         "fullName"=>session::get("username"),
        //         "meetingID"=>$data['roomId'],
        //         "password"=>(session::get("permession")!=null &&session::get("permession")==1)?"pww3rr":"pww2r",
        //         "redirect"=>"true",
        //     ];
        //      $result=$this->generateUrl($conf,"join");
        //      header("location:$result");
        // }
}
 

?>
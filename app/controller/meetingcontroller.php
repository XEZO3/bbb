<?php

namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\meeting;

class meetingcontroller extends controller{
    private $url = "https://elerning-ezo.ga/bigbluebutton/api/";
    private $secret ="6ihY1dJA9fiWM5x1OgmGG9yC6h8QF3w17ydigIJ3EI";
    private $redirectTo = "";
    private $meeting;
    function __construct()
    {
        $this->meeting = new meeting();
    }
    function createMeeting(){
        $check = $this->meeting->checkClassMeeting(1);      
        if(empty($check)){
            $this->initcreate();     
        }else{
            $roomid= $check['roomId'];
            $conf = [
                "meetingID"=>$roomid,

            ];
           
           $url=$this->generateUrl($conf,"isMeetingRunning");
           $xml = simplexml_load_file($url);
            if($xml->running == "true"){
                $this->initjoin("1");
            }else{
                $this->meeting->deleteRunningMeeting($roomid);
                $this->initcreate();
            }
        }
    }
    function joinMeeting($classId){
        
        
        $this->initjoin($classId[0]);
        
    }
        function generateUrl($conf,$type){
            $url = $this->url.$type."?";
            $checksum="$type";
            foreach($conf as $key =>$value){
                $url .="&".$key."=".$value;
                $checksum .="&".$key."=".$value;
            }
            $result = $url."&checksum=".sha1($checksum.$this->secret);
            return $result;
        }



        function initcreate(){
            $meetingID = rand();
            $conf =[
                "meetingID"=> "$meetingID",
                "allowStartStopRecording"=>"true",
                "attendeePW"=>"pww2r",
                "moderatorPW"=>"pww3rr",
                "name"=>"test123",
                "allowStartStopRecording"=>"true",
                "record"=>"true",   
             ];
       
                $data = [
                    "roomId"=>$meetingID,
                    "class_id"=>1,

                ];

        $url=$this->generateUrl($conf,"create");
        $xml = simplexml_load_file($url);
        if($xml->returncode == "SUCCESS"){
          $insert = $this->meeting->create($data);
        if($insert){
            $this->initjoin("1");
        }else{
          echo"something went wronge";
        }
    }
        }
        function initjoin($classId){
            $data = $this->meeting->getMeetingForClass($classId);
            $conf =[
                "fullName"=>session::get("username"),
                "meetingID"=>$data['roomId'],
                "password"=>(session::get("permession")!=null &&session::get("permession")==1)?"pww3rr":"pww2r",
                "redirect"=>"true",
            ];
             $result=$this->generateUrl($conf,"join");
             header("location:$result");
        }
}
 

?>
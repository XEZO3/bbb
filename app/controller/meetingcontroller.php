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
        $meetingID = rand();
        // $conf =[
        //     "meetingID"=> "$meetingID",
        //     "allowStartStopRecording"=>"true",
        //     "attendeePW"=>"pww2r",
        //     "moderatorPW"=>"pww3rr",
        //     "name"=>"test123",
            
        // ];
        // $data = [
        //     "roomId"=>$meetingID,
        //     "class_id"=>1,

        // ];

        // $create = $this->url."create?";
        // $checksum="create";
        // foreach($conf as $key =>$value){
        //     $create .="&".$key."=".$value;
        //     $checksum .="&".$key."=".$value;
        // }
        // $result = $create."&checksum=".sha1($checksum.$this->secret);
        // $xml = simplexml_load_file($result);
    //     if($xml->returncode == "SUCCESS"){
    //     // $insert = $this->meeting->create($data);
    //     if($insert){
    //         echo"meeting is added to database";
    //     }else{
    //         "something went wronge";
    //     }
    //    }
    //     }else{
    //         echo"there is already a running meeting for this class";
    //     }
        
       // echo $result;
    }

    }
    function joinMeeting($id){
        $conf =[
            "fullName"=>"ezaldeen",
            "meetingID"=>"242387240",
            "password"=>"pww2r",
            "redirect"=>"false",
        ];
        $join = $this->url."join?";
        $checksum="join";
        foreach($conf as $key =>$value){
            $join .="&".$key."=".$value;
            $checksum .="&".$key."=".$value;
        }
        $result = $join."&checksum=".sha1($checksum.$this->secret);
        echo $result;
        // $xml = simplexml_load_file($result);
        // print_r($result);
    }
}


?>
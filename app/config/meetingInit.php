<?php
namespace MVC\config;
use MVC\core\session;
class meetingInit{
    private static $url = "https://elerning-ezo.ga/bigbluebutton/api/";
    private static $secret ="6ihY1dJA9fiWM5x1OgmGG9yC6h8QF3w17ydigIJ3EI";
    private static $redirectTo = "elerning.gg";
   static function initcreate($roomId,$title){
        
        $conf =[
            "meetingID"=> "$roomId",
            "allowStartStopRecording"=>"true",
            "attendeePW"=>"pww2r",
            "moderatorPW"=>"pww3rr",
            "name"=>"$title",
            "allowStartStopRecording"=>"true",
            "record"=>"true",
            "logoutURL"=>self::$redirectTo   
              ];  
            
            $url=self::generateUrl($conf,"create");
            $xml = simplexml_load_file($url);
            return $xml;

           
            }
            
            static function generateUrl($conf,$type){
            $url = self::$url.$type."?";
            $checksum="$type";
            foreach($conf as $key =>$value){
                $url .="&".$key."=".$value;
                $checksum .="&".$key."=".$value;
            }
            $result = $url."&checksum=".sha1($checksum.self::$secret);
            return $result;
        }

    static function initjoin($meetingId){
       
        $conf =[
            "fullName"=>session::get("username"),
            "meetingID"=>"$meetingId",
            "password"=>(session::get("permession")!=null &&session::get("permession")=="teacher")?"pww3rr":"pww2r",
            "redirect"=>"true",
        ];
         $result=self::generateUrl($conf,"join");
         header("location:$result");
         //print_r($result);
    }
    static function isMeetingRunning($roomid){
        $confe = [
            "meetingID"=>($roomid !=null)?$roomid :"t",
        ];
        $url= meetingInit::generateUrl($confe,"isMeetingRunning");
         $xml = simplexml_load_file($url);
         if($xml->running == "true"){
            return true;
        }else{
           return false;
        }
    }
    static function initRecording($roomId){
        $conf=[
            "meetingID"=>$roomId ,
        ];
        $result=self::generateUrl($conf,"getRecordings");
        $xml = simplexml_load_file($result);
        if($xml->returncode == "SUCCESS" && $xml->messageKey !="noRecordings"){
            return $data =[
                'url'=> (string) $xml->recordings->recording->playback->format->url,
                'name'=> (string)$xml->recordings->recording->name
        ];
        }else{
            return "";
        }
    }
}

?>
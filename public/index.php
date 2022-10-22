<?php
ob_start();
session_start();
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS.'app');
define("CONFIG",APP.DS.'config');
define("CONTROLLER",APP.DS.'controller');
define("VIEW",APP.DS.'view'.DS);
define("SHARED",VIEW.DS."shared");
define("CORE",APP.DS.'core');
define("MODEL",APP.DS.'model');
define("CSS",'/');
define("PATH","/");
define("error",[
    'ar'=>"لا يتوفر بيانات" ,
    'en'=> "there is no data ",
    'fr'=> "ss",
    'ru'=> "",
    'tr'=> ""
]);
define("titleC",[
    'ar'=> "تسوق عبر اقسامنا",
    'en'=> "Shop By Category",
    'fr'=> "ss",
    'ru'=> "",
    'tr'=> ""

]);
define("titleL",[
    'ar'=> "اخر الاضافات",
    'en'=> "Last Update",
    'fr'=> "ss",
    'ru'=> "",
    'tr'=> ""

]);
define("titleS",[
    'ar'=> "من نحن",
    'en'=> "Who we are",
    'fr'=> "ss",
    'ru'=> "",
    'tr'=> ""

]);
define("HomePage",[
    'ar'=> "الصفحة الرئيسية",
    'en'=> "Home Page",
    'fr'=> "ss",
    'ru'=> "",
    'tr'=> ""  
]);
//echo VIEW;
require_once("../vendor/autoload.php");
$app = new MVC\core\app();


?>
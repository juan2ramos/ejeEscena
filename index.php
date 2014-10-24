<?php
/**
 * Created by PhpStorm.
 * User: juan2ramos
 * Date: 28/04/14
 * Time: 15:38
 */

date_default_timezone_set("America/Bogota");
ini_set('display_errors', 1);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
session_start();
$arrayLang = array(
        
        'home' => 'inicio',
        'artistic-exhibitions' => 'presentaciones-artisticas',
        'business-rounds' => 'rueda-de-negocios',
        'useful-information' => 'datos-utiles',
        'contact-us' => 'contactenos',
        'inicio' => 'home', 
        'presentaciones-artisticas' => 'artistic-exhibitions',
        'rueda-de-negocios' => 'business-rounds',
        'datos-utiles' => 'useful-information',
        'contactenos' => 'contact-us',
        );

try{
    $lang = (!empty($_SESSION['lang']))?$_SESSION['lang']:'es';
    $imgLang = ($lang == 'es') ?'en':'es';
    $index = ( $lang == 'es')?'inicio':'home';
    $url = isset($_GET['url'])?$_GET['url']:$index;   
    $urlPost = $arrayLang[$url];

    if(!empty($_POST['lang'])){
        $_SESSION['lang'] = $_POST['lang'];
        $url = $_POST['current']; 
        $lang = ($lang == 'es')?'en':'es';

    }
    
    
    $fileName = ROOT . 'views' . DS . $url . '.php' ;
  
    
    if(is_readable($fileName)){
        $title = str_replace("-", " ", $url);
        $temp = ( $lang == 'es')?'default':'defaultEnglish';
        require_once ROOT . 'layout' .DS . $temp . '.php';
    }else{
        throw new Exception("Error 404 pagina no existe: ". $_GET['url'] , 1);
    }
}
catch(Exception $e){
    echo $e->getMessage();
}
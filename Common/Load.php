<?php
namespace Common;

class Load{

static  function loader($class){
    
    // include  $class."php";
    // require APP_DIR.'/'.str_replace('\\','/',$class).'.php';
        require APP_DIR.'/'.$class.'.php';
	//var_dump($file); 
	

}

}




?>
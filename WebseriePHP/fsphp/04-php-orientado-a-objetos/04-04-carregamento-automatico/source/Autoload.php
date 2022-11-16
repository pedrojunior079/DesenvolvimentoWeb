<?php
/**
 * User: Pedro Arns Junior
 * Date: 14/11/2022
 * Time: 12:49
 * Created by Visual Studio Code.
 */

 spl_autoload_register(function($class){
    $prefix = "Source\\";
    $baseDir = __DIR__ . "/";
    $len = strlen($prefix);
    
    if(strncmp($prefix, $class, $len) !== 0){
        return;
    }

    $relativeClass = substr($class, $len);
    
    $file = $baseDir . str_replace("\\", "/", $relativeClass) . ".php";
   
    if(file_exists($file)){
        require $file;
    }
        
 });

 
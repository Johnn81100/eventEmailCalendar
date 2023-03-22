<?php

class Autoloader{
    
    /**
     * autoload  permet d'appeler la classe  qu'on va instancier 
     *
     * @param  string $class_name
     * @return string
     */
    static function autoload($class_name){
        // require './app/utils/'. $class_name.'.php' ||
        // require './app/controller/'. $class_name.'.php' ||
         require '../model/'. $class_name.'.php';
            
    }
    
    /**
     * register permet d'utilisier la fonction   spl_autoload_register, dans notre class Autoloader et d'utilisier la fonction autoload
     *
     * @return void
     */
    static function register(){
        spl_autoload_register([__CLASS__,'autoload']);
    }
}
?>
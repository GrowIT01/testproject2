<?php

/* Email : sabinoshadei@gmail.com
 * Author: sabino,shadei
 */

spl_autoload_register(function($class){
    if(file_exists("mode/{$class}.php")){
      require_once ("mode/{$class}.php");  
    }else if(file_exists("ctrl/{$class}.php")){
        require_once ("ctrl/{$class}.php");
    }
    
});

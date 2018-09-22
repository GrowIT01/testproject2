<?php

/**
 * Description of route
 * Email: sabinoshadei@gmail.com
 * @author Shadei.Sabino
 */
class route {
    
    protected static $validroutes = array();
    
    public static function set($route,$function){
        
        $url = (isset($_GET['url']))? $_GET['url'] : null;
        $getUrl = htmlspecialchars($url);
        try{    
            self::$validroutes [] = $route;

            if($getUrl === $route){
                $function->__invoke();
            }
        } catch (Exception $ex) {
            exit("404 page not found");// $ex.getMessage());
        }
        
        
    }
}

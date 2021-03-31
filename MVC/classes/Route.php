<?php

class Route {
    public static $validroutes =array();

    public static function set($route, $function){
        self::$validroutes = $route; 
        //print_r(self::$validroutes);
        
        if ($_GET['url']== $route) {
            $function->__invoke();
        }
    }

}
?>
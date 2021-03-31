<?php

class AboutUs extends Controller{

    public static $page="Agaon";
    public function test() {
        //print_r(self::query("select * from apps"));
         AboutUs::$page = self::query("select * from apr");
         
     }

 }

?>
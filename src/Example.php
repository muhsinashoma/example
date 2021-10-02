<?php

namespace Example\PackageDevelopment;  //namespace can be anything and this namespace(Example\PackageDevelopment) will hit src folder and have to change in psrf

/*
 * This is test class for package development and
 * Method will be static for using scope regulation operator (::)
 * This script will have in comminity
 */
class Example{
    /**
     * Unique name generator
     */

    public static function randname($ext = ''){
        return md5(time().rand()). '.' .$ext;
    }

    /*
     * Make Slug        --> can be used in laravel or  in  php in any where
     */
    public static function slug($title){
        return str_replace('', '-', $title);
    }


    /*
     * Remember Token --> means unique code
     */
    public static function token(){
        return time().rand();
    }


}

?>
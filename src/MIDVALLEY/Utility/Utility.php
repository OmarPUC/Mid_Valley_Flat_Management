<?php
/**
 * Created by PhpStorm.
 * User: OmarSharif
 * Date: 2/20/2018
 * Time: 10:13 PM
 */

namespace App\Utility;


class Utility
{
    public static function d($data){
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }

    public static function dd($data){
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        die();
    }


    public static function redirect($data){
        header('Location:'.$data);

    }
}
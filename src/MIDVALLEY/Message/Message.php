<?php
/**
 * Created by PhpStorm.
 * User: OmarSharif
 * Date: 2/20/2018
 * Time: 10:12 PM
 */

namespace App\Message;

if(!isset($_SESSION)) session_start();

class Message {
    public static function message($message=NULL){
        if (is_null($message)) {
            $_message = self::getMessage();
            return $_message;
        } else {
            self::setMessage($message);
        }
    }


    public static function setMessage($message){

        $_SESSION['message']= $message;

    }


    public static function getMessage(){

        if(isset($_SESSION['message'])){
            $_message= $_SESSION['message'];
        }
        else $_message='';
        $_SESSION['message']="";
        return $_message;

    }
}
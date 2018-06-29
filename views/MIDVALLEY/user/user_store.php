<?php
/**
 * Created by PhpStorm.
 * User: OmarSharif
 * Date: 2/18/2018
 * Time: 10:40 PM
 */

require_once("../../../vendor/autoload.php");

$objUser = new \App\User\User();
$objUser->setData($_POST);
$objUser->store();

\App\Utility\Utility::redirect('register.php');
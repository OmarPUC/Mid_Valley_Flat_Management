<?php
/**
 * Created by PhpStorm.
 * User: OmarSharif
 * Date: 2/18/2018
 * Time: 10:40 PM
*/

require_once("../../../vendor/autoload.php");

$objMidValley = new \App\MidValley\MidValley();
$objMidValley->setData($_POST);
$objMidValley->store();

\App\Utility\Utility::redirect('create.php');
<?php
require_once("../../../vendor/autoload.php");

use App\MidValley\MidValley;
use App\Utility\Utility;

$obj  = new MidValley();

$obj->setData($_POST);

$obj->update();

Utility::redirect('mid_index.php');
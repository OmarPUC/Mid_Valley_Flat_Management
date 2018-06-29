<?php
/**
 * Created by PhpStorm.
 * User: OmarSharif
 * Date: 2/21/2018
 * Time: 10:56 AM
 */
require_once("../../../vendor/autoload.php");
if(!isset($_SESSION)) session_start();

$obj = new \App\MidValley\MidValley();
$obj->setData($_GET);
$singleData = $obj->view();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MidValley View</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.15.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../../../resources/images/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../resources/images/bootstrap/js/jquery.min.js">
    <link rel="stylesheet" href="../../../resources/images/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="../../../resources/images/bootstrap/midvalley.css">

</head>
<body>
<div class="container">
    <h1 style="text-align: center;font-family: ZagBold; text-decoration: underline">Individual Monthly Records</h1>
    <table class="table">
        <div class="container">
            <a style="float: left" href="" class="btn btn-lg btn-warning"><span class='glyphicon glyphicon-home'></span> Home</a>
            <a style="float: right" href="mid_index.php" class="btn btn-lg btn-primary"><span class='glyphicon glyphicon-list-alt'></span> Back To List</a>
        </div>
    </table>
    <br/>

    <table class="table table-bordered table-striped">
            <tr class="success">
                <th>Serial Number</th>
                <?php
                echo "
                    <th>$singleData->serial_num</th>  
                ";
                ?>
            </tr>
            <tr>
                <th>Record Date</th>
                <?php
                echo "
                    <th>$singleData->date</th>  
                ";
                ?>
            </tr>
        <tr>
            <th style="text-align: center; color: #761c19; font-family: ZagBold"><h3>Flat Information</h3></th>
            <td></td>
        </tr>
        <tr>
            <th>Flat No./ Meter No.</th>
            <?php
            echo "
                    <td>$singleData->flat_num</td>  
                ";
            ?>
        </tr>
        <tr>
            <th>Name of the Flat Owner/ Tenant</th>
            <?php
            echo "
                    <td>$singleData->owner</td>  
                ";
            ?>
        </tr>
        <tr>
            <th >Contact Number</th>
            <?php
            echo "
                    <td>$singleData->contact</td>  
                ";
            ?>
        </tr>
        <tr>
            <th style="text-align: center; color: #761c19; font-family: ZagBold"><h3>Total Meter Reading</h3></th>
            <td></td>
        </tr>
        <tr>
            <th>Previous Month</th>
            <?php
            echo "
                    <td>$singleData->from_m</td>  
                ";
            ?>
        </tr>
        <tr>
            <th>Previous Month Reading</th>
            <?php
            echo "
                        <td>$singleData->previous</td>  
                    ";
            ?>
        </tr>
        <tr>
            <th>Current Month</th>
            <?php
            echo "
                    <td>$singleData->to_m</td>  
                ";
            ?>
        </tr>
        <tr>
            <th>Current Month Reading</th>
            <?php
            echo "
                    <td>$singleData->current</td>  
                ";
            ?>
        </tr>
        <tr>
            <th>Consumed</th>
            <?php
            echo "
                    <td>$singleData->consumed</td>  
                ";
            ?>
        </tr>

        <tr>
            <th style="text-align: center; color: #761c19; font-family: ZagBold"><h3>Particulars</h3></th>
            <td></td>
        </tr>
        <tr>
            <th>Electric Bill(Individual/Flat wise)</th>
            <?php
            echo "
                    <td>$singleData->ebi</td>  
                ";
            ?>
        </tr>
        <tr>
            <th>Electric Bill(Common)</th>
            <?php
            echo "
                    <td>$singleData->ebc</td>  
                ";
            ?>
        </tr>
        <tr>
            <th>Fuel Cost for Generator</th>
            <?php
            echo "
                    <td>$singleData->fuel</td>  
                ";
            ?>
        </tr>
        <tr>
            <th>Security Maintenance Cost</th>
            <?php
            echo "
                    <td>$singleData->security</td>  
                ";
            ?>
        </tr>
        <tr>
            <th>Operating Expenses</th>
            <?php
            echo "
                    <td>$singleData->operating</td>  
                ";
            ?>
        </tr>
        <tr>
            <th>Maintenance/Repair Cost</th>
            <?php
            echo "
                    <td>$singleData->repair</td>  
                ";
            ?>
        </tr>
        <tr>
            <th>Salary & Allowances agt Imam/Muazzin</th>
            <?php
            echo "
                    <td>$singleData->imam</td>  
                ";
            ?>
        </tr>
        <tr>
            <th>Rent Against Community Hall</th>
            <?php
            echo "
                    <td>$singleData->rent</td>  
                ";
            ?>
        </tr>
        <tr>
            <th>Other</th>
            <?php
            echo "
                    <td>$singleData->other</td>  
                ";
            ?>
        </tr>
        <tr class="active">
            <th style="font-family: ZagBold; font-size: 20px; color: #761c19">Total Taka</th>
            <th>

            </th>
        </tr>
        <tr>
            <th style="text-align: center; color: #761c19; font-family: ZagBold"><h3>Payment Information</h3></th>
            <td></td>
        </tr>
        <tr>
            <th>Mode of Payment</th>
            <?php
            echo "
                    <td>$singleData->payment</td>  
                ";
            ?>
        </tr>
        <tr>
            <th>Taka(In Words)</th>
            <?php
            echo "
                    <td>$singleData->tka</td>  
                ";
            ?>
        </tr>
        <tr>
            <th>Payment Status</th>
            <?php
            echo "
                    <td>$singleData->pay_confirm</td>  
                ";
            ?>
        </tr>
    </table>

<br/>
</div>

<br/>


</body>
</html>
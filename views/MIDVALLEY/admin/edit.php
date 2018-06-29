<?php
require_once("../../../vendor/autoload.php");
if(!isset($_SESSION)) session_start();

use App\Utility\Utility;
use App\Message\Message;

if(!isset($_GET['id'])) {
    Message::message("You can't visit view.php without id (ex: view.php?id=1)");
    Utility::redirect("view.php");
}

$msg = Message::message();
$obj = new \App\MidValley\MidValley();
$obj->setData($_GET);
$singleData = $obj->view();

echo "<div><div id='message' style='color: limegreen;padding: 10px;font-size: 18px; text-align: center'> $msg </div>
          </div>";

echo "<div>  <div id='message'>  $msg </div>   </div>";
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MidValleyUpdate</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.15.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../../../resources/images/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../resources/images/bootstrap/js/jquery.min.js">
    <link rel="stylesheet" href="../../../resources/images/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="../../../resources/images/bootstrap/midvalley.css">

</head>
<body class="container">
<div class="container">
    <h1 style="text-align: center;font-family: ZagBold; text-decoration: underline">Update This Record</h1>

    <div class="container">
        <a style="float: left" href="" class="btn btn-lg btn-warning"><span class='glyphicon glyphicon-home'></span> Return Home</a>
        <a style="float: right" href="mid_index.php" class="btn btn-lg btn-primary"><span class='glyphicon glyphicon-list-alt'></span> Back To List</a>
    </div>

    <script>
        jQuery(
            function($) {
                $('#message').fadeOut (550);
                $('#message').fadeIn (550);
                $('#message').fadeOut (550);
                $('#message').fadeIn (550);
                $('#message').fadeOut (550);
                $('#message').fadeIn (550);
                $('#message').fadeOut (550);
            }
        )
    </script>
    <!--Message Show-->

    <!--div start here-->

    <form style="text-align: center" class="form-horizontal" action="update.php" method="post">

        <div class="form-group">
            <label class="control-label col-sm-5" for="no">Serial Number</label>
            <div class="col-sm-2">
                <input type="number" class="form-control" name="no" value="<?php echo $singleData->serial_num?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-5" for="date">Date</label>
            <div class="col-sm-2">
                <input type="date" class="form-control" name="date" value="<?php echo $singleData->date?>">
            </div>
        </div>


        <h3 style="text-align: center;  font-family: 'Uni Sans Bold'; text-decoration: underline;">Flat Information</h3>
        <br/>
        <div class="form-group">
            <label class="control-label col-sm-5" for="flat">Flat No./Meter No.</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="flat" value="<?php echo $singleData->flat_num?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-5" for="owner">Name of the flat Owner/Tenant</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="owner" value="<?php echo $singleData->owner?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-5" for="contact">Contact No.</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="contact" value="<?php echo $singleData->contact?>">
            </div>
        </div>



        <h3 style="text-align: center;  font-family: 'Uni Sans Bold'; text-decoration: underline;">Total Meter Reading</h3>
        <br/>
        <div class="form-group">
            <label class="control-label col-sm-5" for="from">Previous Month</label>
            <div class="monthf">
                <select name="monthf" required>
                    <option name="monthf" value="January">January</option>
                    <option name="monthf" value="February">February</option>
                    <option name="monthf" value="March">March</option>
                    <option name="monthf" value="April">April</option>
                    <option name="monthf" value="May">May</option>
                    <option name="monthf" value="June">June</option>
                    <option name="monthf" value="July">July</option>
                    <option name="monthf" value="August">August</option>
                    <option name="monthf" value="September">September</option>
                    <option name="monthf" value="October">October</option>
                    <option name="monthf" value="November">November</option>
                    <option name="monthf" value="December">December</option>
                </select>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $singleData->id?>">
        <div class="form-group">
            <label class="control-label col-sm-5" for="previous">Previous Month Reading</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="previous" value="<?php echo $singleData->previous?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-5" for="to">Current Month</label>
            <div class="montht">
                <select name="montht" required>
                    <option name="montht" value="January">January</option>
                    <option name="montht" value="February">February</option>
                    <option name="montht" value="March">March</option>
                    <option name="montht" value="April">April</option>
                    <option name="montht" value="May">May</option>
                    <option name="montht" value="June">June</option>
                    <option name="montht" value="July">July</option>
                    <option name="montht" value="August">August</option>
                    <option name="montht" value="September">September</option>
                    <option name="montht" value="October">October</option>
                    <option name="montht" value="November">November</option>
                    <option name="montht" value="December">December</option>
                </select>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $singleData->id?>">
        <div class="form-group">
            <label class="control-label col-sm-5" for="current">Current Month Reading</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="current" value="<?php echo $singleData->current?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-5" for="consumed">Consumed</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="consumed" value="<?php echo $singleData->consumed?>">
            </div>
        </div>



        <h3 style="text-align: center;  font-family: 'Uni Sans Bold'; text-decoration: underline;">Particulars Information</h3>
        <br/>
        <div class="form-group">
            <label class="control-label col-sm-5" for="ebi">Electric Bill(Individual/Flat wise)</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="ebi" value="<?php echo $singleData->ebi?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-5" for="ebc">Electric Bill(Common)</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="ebc" value="<?php echo $singleData->ebc?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-5" for="fuel">Fuel Cost for Generator</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="fuel" value="<?php echo $singleData->fuel?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-5" for="smc">Security Maintenance Cost</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="smc" value="<?php echo $singleData->security?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-5" for="oex">Operating Expenses</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="oex" value="<?php echo $singleData->operating?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-5" for="repair">Maintenance/Repair Cost</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="repair" value="<?php echo $singleData->repair?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-5" for="imam">Salary & Allowances agt Imam/Muazzin</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="imam" value="<?php echo $singleData->imam?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-5" for="hall">Rent Against Community Hall</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="hall" value="<?php echo $singleData->rent?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-5" for="other">Other</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="other" value="<?php echo $singleData->other?>">
            </div>
        </div>



        <h3 style="text-align: center;  font-family: 'Uni Sans Bold'; text-decoration: underline;">Payment Information</h3>
        <br/>
        <div class="form-group">
            <label class="control-label col-sm-5" for="payment">Mode of Payment</label>
            <div class="payment">
                <select name="payment" required>
                    <option name="payment" value="Cash">Cash</option>
                    <option name="payment" value="Cheque">Cheque</option>
                    <option name="payment" value="EFT">EFT</option>
                </select>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $singleData->id ?>">
        <div class="form-group">
            <label class="control-label col-sm-5" for="tka">Taka (In Words)</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="tka" value="<?php echo $singleData->tka?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-5" for="confirm">Confirm Payment</label>
            <div class="col-sm-3">
                <label class="radio-inline" style="float: left"><input type="radio" name="confirm" value = "Due" <?php if($singleData->pay_confirm == "NotReceived") echo 'checked="checked"' ?>>Due</label>
                <label class="radio-inline" style="float: left"><input type="radio" name="confirm" value = "Paid" <?php if($singleData->pay_confirm == "Received") echo 'checked="checked"' ?>>Paid</label>
            </div>
        </div>


        <div style="text-align: justify">
            <div class="col-sm-offset-5 col-sm-5">
                <input type="submit" value="Update Records" class="btn btn-lg btn-success">
            </div>
        </div>
    </form>
</div>
<br/>
<br/>
<br/>


<!--JavaScript start-->

<script src="../../../resources/images/bootstrap/js/jquery.js"></script>
<script src="../../../resources/images/bootstrap/js/jquery1.12.4.js"></script>
<script src="../../../resources/images/bootstrap/js/jquery-ui.js"></script>

<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
</script>

<script src="../../../resources/images/bootstrap/js/parallax.min.js"></script>
<script src="../../../resources/images/bootstrap/js/animatescroll.min.js"></script>
<script src="../../../resources/images/bootstrap/js/css3-animate-it.js"></script>

<!--JavaScript End-->
</body>
</html>
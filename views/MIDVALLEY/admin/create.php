<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MidValley Create</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.15.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../../../resources/images/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../resources/images/bootstrap/js/jquery.min.js">
    <link rel="stylesheet" href="../../../resources/images/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="../../../resources/images/bootstrap/midvalley.css">

</head>
<body class="container">
<div class="container">

    <h1 style="text-align: center;font-family: ZagBold; text-decoration: underline">Insert New Record</h1>

    <div class="container">
        <a style="float: left" href="mid_index.php" class="btn btn-lg btn-warning"><span class='glyphicon glyphicon-home'></span> Home</a>
        <a style="float: right" href="mid_index.php" class="btn btn-lg btn-primary"><span class='glyphicon glyphicon-list-alt'></span> Back To List</a>
    </div>


    <!--Message Show-->
    <?php
    require_once("../../../vendor/autoload.php");
    use App\Message\Message;
    $msg = Message::message();
    echo "<div>
              <div id='message' style='color: limegreen;padding: 10px;font-size: 18px; text-align: center'>  $msg </div>
          </div>";
    ?>

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

        <form style="text-align: center" class="form-horizontal" action="store.php" method="post">

            <div class="form-group">
                <label class="control-label col-sm-5" for="no">SL No.</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="no" placeholder="Enter Serial No" name="no" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="date">Date</label>
                <div class="col-sm-2">
                    <input type="date" class="form-control" id="date" placeholder="Select Date" name="date" required>
                </div>
            </div>


            <script>
                $( function() {
                    $( "#datepicker" ).datepicker();
                } );
            </script>


            <h3 style="text-align: center;  font-family: 'Uni Sans Bold'; text-decoration: underline;">Flat Information</h3>
            <br/>
            <div class="form-group">
                <label class="control-label col-sm-5" for="flat">Flat No./Meter No.</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="flat" placeholder="Flat No./Meter No." name="flat" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="owner">Name of the flat Owner/Tenant</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="owner" placeholder="Name of the flat Owner/Tenant" name="owner" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="contact">Contact No.</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="contact" placeholder="Contact Number" name="contact" required>
                </div>
            </div>



            <h3 style="text-align: center;  font-family: 'Uni Sans Bold'; text-decoration: underline;">Total Meter Reading</h3>
            <br/>
            <div class="form-group">
                <label class="control-label col-sm-5" for="from">Previous Month</label>
                <div class="monthf">
                    <select name="monthf" required>
                        <option value="" disabled selected>Previous Month</option>
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
            <div class="form-group">
                <label class="control-label col-sm-5" for="previous">Previous Month Reading</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="previous" placeholder="Previous Reading" name="previous" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="to">Current Month</label>
                <div class="montht">
                    <select name="montht" required>
                        <option value="" disabled selected>Current Month</option>
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
            <div class="form-group">
                <label class="control-label col-sm-5" for="current">Current Month Reading</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="current" placeholder="Current Reading" name="current" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="consumed">Net Consumed</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="consumed" placeholder="Net Consumed" name="consumed" required>
                </div>
            </div>



            <h3 style="text-align: center;  font-family: 'Uni Sans Bold'; text-decoration: underline;">Particulars Information</h3>
            <br/>
            <div class="form-group">
                <label class="control-label col-sm-5" for="ebi">Electric Bill(Individual/Flat wise)</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="ebi" placeholder="Electric Bill(Individual/Flat wise)" name="ebi" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="ebc">Electric Bill(Common)</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="ebc" placeholder="Electric Bill(Common)" name="ebc" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="fuel">Fuel Cost for Generator</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="fuel" placeholder="Fuel Cost for Generator" name="fuel" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="smc">Security Maintenance Cost</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="smc" placeholder="Security Maintenance Cost" name="smc" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="oex">Operating Expenses</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="oex" placeholder="Operating Expenses" name="oex" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="repair">Maintenance/Repair Cost</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="repair" placeholder="Maintenance/Repair Cost" name="repair" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="imam">Salary & Allowances agt Imam/Muazzin</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="imam" placeholder="Salary & Allowances agt Imam/Muazzin" name="imam" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="hall">Rent Against Community Hall</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="hall" placeholder="Rent Against Community Hall" name="hall" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="other">Other</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="other" placeholder="Other" name="other" required>
                </div>
            </div>



            <h3 style="text-align: center;  font-family: 'Uni Sans Bold'; text-decoration: underline;">Payment Information</h3>
            <br/>
            <div class="form-group">
                <label class="control-label col-sm-5" for="payment">Mode of Payment</label>
                <div class="payment">
                    <select name="payment" required>
                        <option value="" disabled selected>Select a Mode</option>
                        <option name="payment" value="Cash">Cash</option>
                        <option name="payment" value="Cheque">Cheque</option>
                        <option name="payment" value="EFT">EFT</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="tka">Taka (In Words)</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="tka" placeholder="Taka (In Words)" name="tka" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="confirm">Confirm Payment</label>
                <label class="radio-inline" style="float: left"><input type="radio" name="confirm" value="Due" required> Due</label>
                <label class="radio-inline" style="float: left"><input type="radio" name="confirm" value="Paid" required> Paid</label>
            </div>


            <div style="text-align: justify">
                <div class="col-sm-offset-5 col-sm-5">
                    <button href="mid_index.php" type="submit" value="Submit" class="btn btn-lg btn-success"><span class='glyphicon glyphicon-floppy-save'> </span> Save Records</button>
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
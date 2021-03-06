<?php
/**
 * Created by PhpStorm.
 * User: OmarSharif
 * Date: 2/21/2018
 * Time: 10:56 AM
 */
require_once("../../../vendor/autoload.php");
if(!isset($_SESSION)) session_start();

$obj        = new \App\MidValley\MidValley();
$allData    = $obj->index();

use App\Message\Message;
use App\Utility\Utility;
$msg = Message::message();
################## search  block 1 of 5 start ##################
if(isset($_REQUEST['search']) ){
    $someData =  $obj->search($_REQUEST);
}
$availableKeywords = $obj->getAllKeywords();
$comma_separated_keywords= '"'.implode('","',$availableKeywords).'"';
################## search  block 1 of 5 end ##################
######################## pagination code block#1 of 2 start ######################################
$recordCount= count($allData);

if(isset($_REQUEST['Page']))   $page = $_REQUEST['Page'];
else if(isset($_SESSION['Page']))   $page = $_SESSION['Page'];
else   $page = 1;
$_SESSION['Page']= $page;

if(isset($_REQUEST['ItemsPerPage']))   $itemsPerPage = $_REQUEST['ItemsPerPage'];
else if(isset($_SESSION['ItemsPerPage']))   $itemsPerPage = $_SESSION['ItemsPerPage'];
else   $itemsPerPage = 3;
$_SESSION['ItemsPerPage']= $itemsPerPage;

$pages = ceil($recordCount/$itemsPerPage);
$someData = $obj->indexPaginator($page,$itemsPerPage);
$allData= $someData;

$serial = (  ($page-1) * $itemsPerPage ) +1;

if($serial<1) $serial=1;
####################### pagination code block#1 of 2 end #########################################
################## search  block 2 of 5 start ##################
if(isset($_REQUEST['search']) )$someData =  $obj->search($_REQUEST);

if(isset($_REQUEST['search']) ) {
    $serial = 1;
    $allData=$someData;
}
################## search  block 2 of 5 end ################
?>



<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MidValleyShortList</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.15.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../../../resources/images/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../resources/images/bootstrap/js/jquery.min.js">
    <link rel="stylesheet" href="../../../resources/images/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="../../../resources/images/bootstrap/midvalley.css">
    <script src="../../../resources/images/bootstrap/js/jquery.js"></script>
    <script src="../../../resources/images/bootstrap/js/jquery-ui.js"></script>

</head>
<body class="container">
<div class="container">
    <h4 style="text-align: center;  font-family: 'Uni Sans Bold'; margin-top: 20px">Bismillahir Rahmanir Raheem</h4>
    <h1 style="text-align: center;font-family: ZagBold; margin-top: 10px">Mid Valley Apartment</h1>
    <h5 style="text-align: center; text-decoration: underline">Shaymol Chaya R/A, Textile, East Nasirabad, Chittagong</h5>

    <!-- required for search, block 4 of 5 start -->

    <div style="text-align: center">
        <?php echo "<div>  <div align='center' class=' alert-info ' id='message'>  $msg </div>   </div>";   ?>
        <form id="searchForm" action="mid_index.php"  method="get" style="margin-top: 5px; margin-bottom: 10px">
            <input type="text" value="" id="searchID" name="search" placeholder="Search Records" width="60" style="border-radius: 2px" >
            <input type="checkbox"  name="byDate"   checked>By Date
            <input type="checkbox"  name="byFlat"  checked>By Flat
            <input type="checkbox"  name="byPay"  checked>By Payment
            <input hidden type="submit" class="btn-primary" value="search">
        </form>
    </div>
    <!-- required for search, block 4 of 5 end -->

    <form  id="selectionForm" action="" method="post">

        <div style="text-align: center" class="nav navbar">
            <a href="../../MIDVALLEY/user/Profile/signup.php" class="btn btn-lg btn-info"><span class='glyphicon glyphicon-user'></span> Add New User</a>
            <a href="create.php" class="btn btn-lg btn-success"><span class='glyphicon glyphicon-import'></span> Add New Data</a>
            <a href="xl.php" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-list-alt"></span> <span class="glyphicon glyphicon-circle-arrow-down"></span> Download as Excel</a>
            <a href="email.php?list=1" class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-list-alt"></span> <span class="glyphicon glyphicon-envelope"></span> Email This List</a>
            <a href="../index.php" class="btn btn-lg btn-danger"><span class="glyphicon glyphicon glyphicon-off"></span> Logout</a>
        </div>


        <table class="table table-bordered table-striped">

            <tr>
                <th>ID</th>
                <th>Flat No.</th>
                <th>Flat Owner</th>
                <th>Contact</th>
                <th>Record Date</th>
                <th>Payment</th>
                <th>Action Button</th>
            </tr>

            <?php
            // $serial = 1;
            foreach($allData as $row){
                echo "
       <tr>
            <td>$serial</td>
            <td>$row->flat_num</td>
            <td>$row->owner</td>
            <td>$row->contact</td>
            <td>$row->date</td>     
            <td>$row->pay_confirm</td>     
            <td>
             <a href='view.php?id=$row->id' class='btn btn-primary'> <span class='glyphicon glyphicon-eye-open'> </span> View Details</a>
             <a href='edit.php?id=$row->id' class='btn btn-success'> <span class='glyphicon glyphicon-edit'> </span> Edit Details</a>
             <a href='email.php?id=$row->id' class='btn btn-warning'> <span class='glyphicon glyphicon-envelope'> </span> E-mail Details</a>
            </td>
       </tr>
     ";
                $serial++;
            }//end of foreach loop
            ?>
        </table>
    </form>


    <!--  ######################## pagination code block#2 of 2 start ###################################### -->
    <div align="left" class="container">
        <ul class="pagination">

            <?php
            $pageMinusOne  = $page-1;
            $pagePlusOne  = $page+1;
            if($page>$pages) Utility::redirect("mid_index.php?Page=$pages");
            if($page>1)  echo "<li><a href='mid_index.php?Page=$pageMinusOne'>" . "Previous" . "</a></li>";
            for($i=1;$i<=$pages;$i++)
            {
                if($i==$page) echo '<li class="active"><a href="">'. $i . '</a></li>';
                else  echo "<li><a href='?Page=$i'>". $i . '</a></li>';
            }
            if($page<$pages) echo "<li><a href='mid_index.php?Page=$pagePlusOne'>" . "Next" . "</a></li>";
            ?>
            <select  class="form-control"  name="ItemsPerPage" id="ItemsPerPage" onchange="javascript:location.href = this.value;" >
                <?php
                if($itemsPerPage==5)echo'<option value="?ItemsPerPage=5" selected >Show 5 Items Per Page</option>';
                else echo '<option  value="?ItemsPerPage=5">Show 5 Items Per Page</option>';

                if($itemsPerPage==10)echo'<option value="?ItemsPerPage=10" selected >Show 10 Items Per Page</option>';
                else  echo '<option  value="?ItemsPerPage=10">Show 10 Items Per Page</option>';

                if($itemsPerPage==15)echo'<option value="?ItemsPerPage=15" selected >Show 15 Items Per Page</option>';
                else echo '<option  value="?ItemsPerPage=15">Show 15 Items Per Page</option>';

                if($itemsPerPage==20)echo'<option  value="?ItemsPerPage=20"selected >Show 20 Items Per Page</option>';
                else echo '<option value="?ItemsPerPage=20">Show 20 Items Per Page</option>';

                if($itemsPerPage==30) echo'<option  value="?ItemsPerPage=30"selected >Show 30 Items Per Page</option>';
                else echo '<option  value="?ItemsPerPage=30">Show 30 Items Per Page</option>';

                if($itemsPerPage==40)echo'<option  value="?ItemsPerPage=40"selected >Show 40 Items Per Page</option>';
                else    echo '<option  value="?ItemsPerPage=40">Show 40 Items Per Page</option>';
                ?>
            </select>
        </ul>
    </div>
    <!--  ######################## pagination code block#2 of 2 end ###################################### -->



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


    <!-- required for search, block 5 of 5 start -->
    <script>

        $(function() {
            var availableTags = [
                <?php
                echo $comma_separated_keywords;
                ?>
            ];
            // Filter function to search only from the beginning of the string
            $( "#searchID" ).autocomplete({
                source: function(request, response) {
                    var results = $.ui.autocomplete.filter(availableTags, request.term);
                    results = $.map(availableTags, function (tag) {
                        if (tag.toUpperCase().indexOf(request.term.toUpperCase()) === 0) {
                            return tag;
                        }
                    });
                    response(results.slice(0, 15));
                }
            });

            $( "#searchID" ).autocomplete({
                select: function(event, ui) {
                    $("#searchID").val(ui.item.label);
                    $("#searchForm").submit();
                }
            });
        });
    </script>
    <!-- required for search, block 5 of 5 end -->


</div>
</body>
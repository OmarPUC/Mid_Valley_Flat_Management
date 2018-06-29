<?php
include_once('../../../../vendor/autoload.php');

   if(!isset($_SESSION) )session_start();
use App\Message\Message;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add User!</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="../../../../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../resources/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../../resources/css/form-elements.css">
    <link rel="stylesheet" href="../../../../resources/css/style1.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="../../../../resources/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../../../resources/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../../../resources/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../../../resources/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../../../resources/ico/apple-touch-icon-57-precomposed.png">

</head>
<body>
<!-- Top content -->
<div class="top-content">
        <div class="container" >
            <table>
                <tr>
                    <td width='230' >

                    <td width='600' height="50" >


                        <?php  if(isset($_SESSION['message']) )if($_SESSION['message']!=""){ ?>

                            <div  id="message" class="form button"   style="font-size: smaller  " >
                                      <center>
                                    <?php if((array_key_exists('message',$_SESSION)&& (!empty($_SESSION['message'])))) {
                                        echo "&nbsp;".Message::message();
                                    }
                                    Message::message(NULL);
                                    ?></center>
                            </div>
                        <?php } ?>
                    </td>
                </tr>
            </table>

            <div class="row" >

<!--                login script-->

                <div class="col-sm-2 middle-border"></div>
                <div class="col-sm-2"></div>

                <div class="col-sm-5">

                    <div class="form-box" style="margin-top:0%">
                        <div class="form-bottom" style="border-radius: 10px">
                            <div class="form-top-left">
                                <h3 style="color: #41a83e; margin-top: -30px"><strong>Add new User</strong></h3>
                                <p style="color: #2aabd2">Fill in the form to give user access</p>
                            </div>
                            <div class="form-top-right">
                                <a style="float: right; margin-top:7px" href="../../../MIDVALLEY/admin/mid_index.php" class="btn btn-lg btn-success"> Back</a>
                            </div>
                            <form role="form" action="registration.php" method="post" class="registration-form">
                                <div class="form-group">
                                    <label class="sr-only" for="form-name">Name</label>
                                    <input type="text" name="name" placeholder="Name..." class="form-name form-control" id="form-first-name" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-flat">Flat No</label>
                                    <input type="text" name="flat" placeholder="Flat no..." class="form-flat form-control" id="form-flat" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-email">Email</label>
                                    <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email" required>
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-email">Phone</label>
                                    <input type="text" name="phone" placeholder="Phone..." class="form-phone form-control" id="form-phone" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="address">Address</label>
				                        	<input type="text" name="address" placeholder="Address..." class="form-address form-control" id="form-address" required>
                                </div>
                                <button type="submit" class="btn">Submit Data</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


<!-- Javascript -->
<script src="../../../../resources/js/jquery-1.11.1.min.js"></script>
<script src="../../../../resources/js/bootstrap.min.js"></script>
<script src="../../../../resources/js/jquery.backstretch.min.js"></script>
<script src="../../../../resources/js/scripts.js"></script>

<!--[if lt IE 10]>
<script src="../../../../resources/js/placeholder.js"></script>
<![endif]-->

</body>

<script>
    $('.alert').slideDown("slow").delay(5000).slideUp("slow");
</script>

</html>


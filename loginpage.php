
<?php

require_once('include/session.php');
require_once('include/db.php');

if (isset($_POST['username'])) {
    if ($_POST['username'] != "" && $_POST['password'] != "") {
        $proceed = false;
        $conn = new mysqli($servername, $username, $password, $dbname);
        $result = $conn->query("SELECT * FROM `user` WHERE 1");
        while($row = $result->fetch_assoc()){
            if ($row['username'] == $_POST['username'] && $row['password'] == $_POST['password']) {
                $proceed = true;
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['password'] = $_POST['password'];
            }
        }
        if ($proceed) {
            header("Location: /inputForm.php");
        } else {
            $error_msg = "username or password incorrect";
        }
        $result->free();
        $conn->close();
    } else if ($_POST['username'] == "" && $_POST['password'] == "") {
        $error_msg = "You must provide a username and password!";
    } else if ($_POST['username'] == "" && $_POST['password'] != "") {
        $error_msg = "Please provide a username!";
    } else {
        $error_msg = "Please provide a password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CRC</title>

    <!--Login Page CSS -->
    <link href="css/loginpage.css" rel="stylesheet">
    
      <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
     <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    

</head>

    <body>

   <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                 <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">
                    <i class="fa fa-play-circle"></i>  <span class="light">Back To</span> CRC
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
   
        </nav>
    <!-- Intro Header -->
    <header id="intro2">
        <div id="boxForm"> 
            <div id="boxFormChild">
                <h1><font color="white" id="admin">Admin Login</font></h1>
                <p> <font color="white"> This field is for adminstration use only </font> </p>
                        <form action="" method="POST">
                            <?php if (isset($error_msg)) { ?>
                            <div id="alert"> <?php echo $error_msg; ?> </div>
                            <?php } ?>
                            <input class="inputButton" placeholder="username" type="text" name="username"></br>
                            <input class="inputButton" placeholder="password" type="password" name="password"></br>
                            <input id="submitButton" type="submit" value="Log in">
                        </form> 
            </div>
        </div>                
    </header>
            
<?php 
require_once('include/inputFormNavigation.php');
require_once('include/session.php');

if (!isset($_SESSION['username'])) {
    header("Location: /loginpage.php");
}

if (isset($_SESSION['Date'])) {
	$date = $_SESSION['Date'];
	$html = $date;
	$needle = "/";
	$lastPos = 0;
	$positions = array();

	while (($lastPos = strpos($html, $needle, $lastPos))!== false) {
   	 	$positions[] = $lastPos;
    	$lastPos = $lastPos + strlen($needle);
	}

	foreach ($positions as $value) {
		$html[$value] = "-";
	}
}
date_default_timezone_set("America/New_York");
require("PHPMailer-master/PHPMailerAutoload.php");
require("fpdf/fpdf.php");
if (isset($_POST['something'])) {
$pdf=new FPDF();
$pdf->AddPage();
$pdfDoc = $pdf->Output('', 'S');
ob_start();
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 2;
	$mail->Debugoutput = 'html';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "gatechcrcstaff@gmail.com";
	$mail->Password = "gatechcrcstaffrocks";
	$mail->setFrom("gatechcrcstaff@gmail.com","Crc Staff");
	$mail->addAddress($_POST['emailRecipient']);
	$mail->Body = "PDF";
	$mail->Subject = "Table PDF";
	$mail->addStringAttachment($pdfDoc, $html . '.pdf');
	if (!$mail->send()) {
		$error = "Message failed: " . $mail->ErrorInfo;
	} else {
		$error = "Successfully Sent";
	}
ob_get_clean();
}

?>


<html lang="en">
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CRC</title>
        
        
<!--    <script src="js/inputFormAJAX.js"></script>    -->
    <script src="js/jquery.js"></script>
<!--    <script type="text/javascript" src="js/inputFormJQuery.js"></script>-->
    <!--inputForm Page CSS -->
    <link href="css/inputForm.css" rel="stylesheet">
      <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="css/exportPage.css" rel="stylesheet">
    <!-- inputForm JavaScript -->
    <script src="js/inputForm.js"></script>
    <script src="js/date.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        
    

</head>

    <body>

   <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                 <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="inputForm.php">
                    <i class="fa fa-play-circle"></i>  <span class="light">Back To</span> Table
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                         <form name="hidden-form" method="POST">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a><button class="navigationButton" name="logout">Logout</button></a>
                    </li>
                    <li>
                        <a><button class="navigationButton" href="exportPage.php">Display</button></a>
                    </li>
                    <li>
                        <a><button class="navigationButton">Something</button></a>
                    </li>
                </ul>
                        </form>
            </div>
        </div>
        </div>
        </div>
        </nav> 
        <header id="intro3">
        <div id="boxForm1"> 
            <div id="boxFormChild1">
                <form name="hidden-form" method="POST"> 
                	<?php if (isset($error)) { ?>
						<?php echo $error; ?>
					<?php } ?>
                    <label class="emailInput" id="label">You are about to export the table of date: <span> <?php echo $date ?> </span> </label> </br>
                    <input class="emailInput" id="emailRecipient1" type="text" name="emailRecipient" value="gatechcrcstaff@gmail.com"> </br>
                    <input class="emailInput" id="submit" type="Submit" name="something" value="Send Email">
                </form>
            </div>
            </div>
        </header>
    </body>

<!--    <script src="js/inputForm2.js"></script>-->
<!-- jQuery -->
    
    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

    

</html>
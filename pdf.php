<?php 
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
	$mail->addAddress("gatechcrcstaff@gmail.com");
	$mail->Body = $_POST['input'];
	$mail->Subject = "Table PDF";
	$mail->addStringAttachment($pdfDoc, $_SESSION['Date'] . '.pdf');
	if (!$mail->send()) {
		$error = "Message failed: " . $mail->ErrorInfo;
	} else {
		$error = "Successfully Sent";
	}
ob_get_clean();

	if (isset($error)) {
		echo $error;
	}
}

?>


<html>

<body>
	<form method="post">
		<input type="text" name="input">
		<input type="Submit" name="something">
		</form>
</body>

</html>   
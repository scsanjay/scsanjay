<?php
error_reporting(0);
if (isset($_POST['send'])=="Send") {
	$to = $_POST['to'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$from=$_POST['from'];
	$headers = "From: $from\r\n";
	if (mail($to, $subject, $message, $headers)) {
	   echo "SUCCESS";
	} else {
	   echo "ERROR";
	}
}
?>
<body>
<h2 style="color:blue;">Send Fake Mail</h2>
<br>
<form action="mail.php" method="post">
<table>
	<tr><td>From:</td><td><input type="email" name="from" required></td></tr>
	<tr><td>To:</td><td><input type="email" name="to"></td></tr>
	<tr><td>Subject:</td><td><input type="text" name="subject"></td></tr>
	<tr><td>Message:</td><td><textarea name="message"></textarea></td></tr>
	<tr><td></td><td><input type="submit" name="send" value="Send"></td></tr>
</table>
</form>
</body>
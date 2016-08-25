<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
    body{
            margin:auto;
            margin:10%;
            text-align: center;
        }
    .success{
            font-family:Book Antiqua;
            font-size: 350%;
            color: lime;
            text-shadow: 1px 1px #000;
        }
    .fail{
            font-family: Book Antiqua;
            color: red;
            text-shadow: 1px 1px #000;
        }
    span{
            text-decoration:blink;
    }
</style>
</head>
<body>
<?php

	if (isset($_POST['name']) &&!empty($_POST['name'])&&isset($_POST['email'])&&!empty($_POST['email'])&&isset($_POST['message'])&&!empty($_POST['message'])) {
		$to = "contact@sanjaychouhan.net";
		$toMail = "sc.chouhansanjay@gmail.com";
		$subject = "Contact by ".$_POST['name'];
		$name_field = $_POST['name'];
		$email_field = $_POST['email'];
		$message = $_POST['message'];

		$headers = 'From: '.$_POST['email'].'' . "\r\n" .
		   'Reply-To: '.$_POST['email'].'' . "\r\n" .
		   'X-Mailer: PHP/' . phpversion();

		$body = $message;

		mail($to, $subject, $body, $headers );
		mail($toMail, $subject, $body, $headers );

		echo '<h1 class="success">Thank You.</h1>';
	}else{
		echo '<h1 class="fail">Oops, something went wrong. Try again.</h1>';
	}
    echo "Redirecting you to Home page<span>...</span>";
	header("Refresh:3;url=index.html");
?>
</body>
</html>
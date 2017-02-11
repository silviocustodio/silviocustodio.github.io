
<?php
	$destino = "adm.ti.silviocustodio@gmail.com";
	$name = $_POST["name"];
	$surname = $_POST["surname"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$content = "Name: ". $name  . "\nSurname" $surname . "\nPhone" $phone . "\nEmail" $email . "\nMessage" $message;
	mail($destino, "New message from contact from Contact Portfolio", $content);
	header("Location:thanks.html");




?>

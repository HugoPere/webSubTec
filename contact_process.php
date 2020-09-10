<?php
    $to = "hugo.n.perez1996@gmail.com";

	$subject= $_POST["subject"];
	$body= $_POST["message"];

/*
	echo "subjecttest";
	echo "<br>";
	echo $subjecttest;
	echo "<br>";
	echo"bodytest";
	echo "<br>";
	echo $bodytest;
*/
    mail($to, $subject, $body);
    header("Location: contact.html");
?>
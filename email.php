<?php

if(isset($_POST['submit']))
{

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];	

	echo $name.$email.$subject.$message;
}

else
{
		echo '<script language="javascript">';
		echo 'alert("Oops something wrong")';
		echo '</script>';
		header( "Refresh:0.5; url=http://localhost/Baker");
}





?>
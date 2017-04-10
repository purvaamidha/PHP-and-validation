<?php 
	error_reporting(E_ERROR);
	session_start();
	$con = new mysqli("localhost","root","","phpass");
	if($con->connect_error){
		echo "Error".$con->connect_error." ".$con->connect_errno;
	}
?>
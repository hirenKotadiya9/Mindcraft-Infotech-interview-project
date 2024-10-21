<?php
	include "include/connection.php";
	session_destroy();
	
	header("location:index.php");
	exit;
?>
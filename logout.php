<?php
	
	session_start(); //Mulai sesi
	session_destroy(); //Akhiri sesi

	header("location:index.php"); //redirect nang index pertama

?>
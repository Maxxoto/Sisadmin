<html>
	<head> </head>
<?php

	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "sisadmin";
        
    $base_url = "http://localhost/sisadmin/";
	
	if (mysql_connect($server,$user,$pass)){
		echo '<label class="label label-success" style="color:#fff;"> &nbsp Database OK &nbsp <i class="fa fa-check "> </i></label>' ; 
		mysql_select_db($database) or die("database not found");
	}else{
		echo '<label class="label label-danger" style="color:#fff;"> &nbsp Database Problem &nbsp <i class="fa fa-warning"> </i></label>'; 
	}
	 
?>

</html>
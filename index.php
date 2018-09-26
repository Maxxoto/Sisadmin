<?php

//Koneksi

include 'koneksi.php';
session_start();
	
	if (isset($_SESSION['roles']) == null ) {
	?>
	
	<html>

	<head>

	<title> Sistem Administrasi Sekolah </title>

	<!-- File CSS disini -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- Tutup File CSS -->

	<!-- File JScript disini -->
	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
	
	<!-- Tutup File JScript -->
	<style type="text/css"> 
	body{
		background-image: url('images/administrasisekolah.jpg');
		background-position: bottom right;
	}
	</style>

	</head>

	<body>
	
		<div align="center">

			<h1> <label class="label label-warning"> Sistem Administrasi Sekolah </label> </h1>
	
		<div align="center" style=" width: 350px; height: auto; margin-top: 5%; ">
			<form name="form_login" method="post" class="well well-lg" action="login.php" style="-webkit-box-shadow:0px 0px 20px #1a1aff ;">
			<i class="fa fa-keyboard-o fa-5x fa-inverse" style="background-color: #76b4ff;padding: 28px 28px 28px 28px;border-radius: 50%;box-shadow: #ffffff -1px 2px 1px;"></i>
			<br>
			<br>

			<!-- Fungsi Error -->

			<?php

			if(isset($_GET['error'])){

			echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
					<button type="button" class="close" data-dismiss="alert"> <span aria-hidden="true">x</span>
					<span class="sr-only"> Close </span>
					</button>
					Password atau Username salah 
				</div>';
			}
			
			?>

			<!-- Form input login -->
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"> </i> </span>
				<input name="username" id="username" class="form-control" type="text" placeholder="Username" autocomplete="off" autofocus="">					
				</input>
			</div>

			<br>

			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-key"> </i> </span>
				<input name="password" id="password" class="form-control" type="password" placeholder="Password" autocomplete="off">
				</input>
			</div>	
			<br>
			<input class="btn btn-info btn-block" name="submit" type="submit" value="Login" />
			</form>



		</div>
		<footer align="center">
		Project by  <a class="link" href="#"> XII RPL 1 </a> 
		</footer>
	</body>
	


</html>
<?php
} else {
    if ($_SESSION['roles'] == "administrator") {
        header("location:index-admin.php");
    } elseif ($_SESSION['roles'] == "user") {
        header("location:index-user.php");
    } else {
        echo 'user tidak ditemukan';
        session_destroy();
    }
}
?>
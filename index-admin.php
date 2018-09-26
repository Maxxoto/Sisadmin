<?php

include 'koneksi.php';
session_start();
if ($_SESSION['roles'] == 'administrator' ) {
	?>
<html>
	<head>

	<title> Sistem Administrasi Sekolah </title>

	<!-- File CSS disini -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<!-- Tutup File CSS -->

	<!-- File JScript disini -->
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
	
	<!-- Tutup File JScript -->

	</head>

		<body>
			<header>

			<div class="jumbotron colorjumbo sizejumbo"> <h1 class="judul" > Sistem Administrasi Sekolah </h1>
			<small> <h3 class="judul"> Sistem informasi yang dikembangkan untuk kemudahan administrasi sekolah.</h3> </small>
			</div> 	

			</header> <!--Tutup Header -->

			<!-- Buka container -->
			<div class="container">

			<!-- Buka Navbar atas -->
			<nav class="navbar navbar-default navbar-fixed-top" style="-webkit-box-shadow:0px 0px 10px #888888;">
				<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span> 
      				</button>
					<a class="navbar-brand" href="#"> SysAdmin </a>
				</div>
				
				<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li> <a href="#"> <i class="fa fa-user "> </i> Admin Panel </a> </li>
					<li> <a href="#"> <i class="fa fa-users"> </i>   Tentang Kami </a> </li>
					<li> <a href="#"> <i class="fa fa-envelope"> </i> Hubungi Kami </a> </li> 
				</ul>  
					<p class="navbar-text navbar-right"> 
					<?php echo $_SESSION['username']; ?> login sebagai <?php echo $_SESSION['roles']; ?> |  
					<a class="link" href="logout.php" style="padding-right: 10px "> <span class="glyphicon glyphicon-off "> </span> Logout </a> 
					</p>
				</div>
				</div>
				</nav>
			<!-- Tutup Navbar  atas-->
			<nav class="navbar navbar-default" style="-webkit-box-shadow:0px 0px 10px #fff" >
	
				<ul class="nav navbar-nav">
						<li <?php if (isset ($_GET['view'])) {
							 echo $_GET['view'] == 'cek_pembayaran' ? 'class="active"' : '';
							 } ?> >
						 <a href="index-admin.php?view=cek_pembayaran"> Cek Pembayaran </a> </li>

						<li <?php if (isset ($_GET['view'])) {
							 echo $_GET['view'] == 'cari_siswa' ? 'class="active"' : '';
							 } ?> > 
						 <a href="index-admin.php?view=cari_siswa"> Cari Siswa </a> </li>

					<li> <a href="#"> Link 3 </a> </li>
				</ul>
				</nav>
				<div class="panel panel-default">
					<div id="post" class="panel-body">
					
					<?php
						if (isset($_GET['view'])){
							$view = $_GET['view'];
							include '/' . $view . '.php' ;
						}else {
							$_GET['view'] = 'cek_pembayaran';
							
						}
						
					?>

					</div>
				</div>
			
			<footer> <h4 align="center">
				Project by  <a class="link" href="#"> XII RPL 1 </a>  </h4>

			</footer>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>
			<!--Tutup container -->

		</body>


</html>

<?php
} else {
    echo "<script>
        alert('Forbidden access');
	location.href='index.php';
	</script>";
    exit();
}
?>
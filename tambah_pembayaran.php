<html> 
	<head>
		<title> Sistem Administrasi Sekolah</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">

	</head>
	<body>
		
		<?php 
		include "koneksi.php";
		?>
		
		<div class="container">
		<form method="post" action="proses_tambah.php" >
		
		
		<div class="table-responsive">
			<table class="table">
			
			<tr>
				<td> NIS </td>
				<td> : </td>
				<td> <input type="text" name="nis" placeholder="NIS"> </input> </td>
			</tr>

			<tr>
				<td> Nama </td>
				<td> : </td>
				<td> <input type="text" name="nama" placeholder="Nama"> </input> </td>
			</tr>

			<tr>
				<td> Kelas </td>
				<td> : </td>
				<td> <input type="text" name="kelas" placeholder="Kelas" > </input> </td>
			</tr>

			<tr>
				<td> Status </td>
				<td> : </td>
				<td> <input type="text" name="status" placeholder="Status"  > </input> </td> 
			</tr>

			<tr>
				<td> <input class="btn btn-success" type="submit" name="simpan" value="Simpan"> </td>
				<td> <input class="btn btn-danger" type="reset" name="reset" value="Reset"> </td>
			</tr>




			</table>
		</div>
		</form>
		</div>
	</body>

</html>

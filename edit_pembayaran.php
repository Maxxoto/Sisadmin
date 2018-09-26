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
		<form method="post" action="proses_edit_pembayaran.php?nis=<?php echo $_GET['nis']; ?>" >

		<?php
		$nis = $_GET['nis'];
		$query = mysql_query("SELECT * from tbl_pembayaran where nis=$nis"); 
		$data = mysql_fetch_array($query);
		?>
		
		
		<div class="table-responsive">
			<table class="table">
			
			<tr>
				<td> NIS </td>
				<td> : </td>
				<td> <input type="text" name="nis" readonly="readonly" value="<?php echo $data['nis']; ?>" </input> </td>
			</tr>

			<tr>
				<td> Nama </td>
				<td> : </td>
				<td> <input type="text" name="nama" value="<?php echo $data['nama']; ?>" > </input> </td>
			</tr>

			<tr>
				<td> Kelas </td>
				<td> : </td>
				<td> <input type="text" name="kelas" value="<?php echo $data['kelas']; ?>" > </input> </td>
			</tr>

			<tr>
				<td> Status </td>
				<td> : </td>
				<td> <input type="text" name="status" value="<?php echo $data['status']; ?>" > </input> </td> 
			</tr>

			<tr>
				<td> <input class="btn btn-success" type="submit" name="simpan" value="Simpan"> </td>
				<td> <input type="reset" name="reset" value="Reset"> </td>
			</tr>




			</table>
		</div>
		</form>
		</div>
	</body>

</html>

<?php
	include 'koneksi.php';

	$nis = $_GET['nis'];


	$query = mysql_query("DELETE from tbl_pembayaran where nis = '$nis' ");

	if($query){
		echo "<script>alert('Data berhasil dihapus') ;
		document.location.href='index.php' </script> \n";
	} else {
		echo "<script>alert('Data gagal dihapus') ;
		document.location.href='index.php' </script> \n";
	}
?>
<?php
	include "koneksi.php";

	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$status = $_POST['status'];

	$query = mysql_query('INSERT into tbl_pembayaran (nis,nama,kelas,status) VALUES ("'.$nis.'","'.$nama.'","'.$kelas.'","'.$status.'") ');

	if ($query) {
		echo "<script>alert('Data sudah ditambahkan') ;
		document.location.href='index.php' </script> \n"  ;
	} else
		echo "<script>alert('Data gagal ditambahkan') ; 
		document.location.href='index.php' </script> \n" ;


?>
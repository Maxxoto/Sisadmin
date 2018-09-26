<?php
include 'koneksi.php';

$nis	= $_POST['nis'];
$nama	= $_POST['nama'];
$kelas	= $_POST['kelas'];
$status	= $_POST['status'];

$query = mysql_query("UPDATE tbl_pembayaran SET nis		='$nis',
										  nama		='$nama',
										  kelas		='$kelas',
										  status	='$status' 
										where nis		='$_GET[nis]'");
if ($query) {
echo "<script>alert('Data berhasil disimpan');
document.location.href='index-admin.php'</script>\n";
} else {
echo "<script>alert('Data gagal disimpan');
document.location.href='index-admin.php'</script>\n";
}
?>
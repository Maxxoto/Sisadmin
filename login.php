<?php

session_start();
extract($_POST);

include 'koneksi.php';

$query = "select * from tbl_user where username = '$username' and password = '$password' ";

$hasil = mysql_query($query);
if (mysql_num_rows($hasil)) {

	while ($row = mysql_fetch_array($hasil)) {
		$_SESSION['username'] = $row['username'];
		$_SESSION['id_user'] = $row ['id_user'];
		$_SESSION['roles'] = $row ['roles'];

		if ($row['roles'] == "administrator" ) {
			header("location:index-admin.php?view=cek_pembayaran");
		} elseif ($row['roles'] == "user" ) {
			header("location:index-user.php?view=liat_bayar");
		} else {
			echo '<script>href.location</script>';
            session_destroy();
		}


		}

	}else{
		echo "<script>
		location.href='index.php?error=salah';
		</script>";
	}

?>
<?php
		$servername = "localhost";
		$database = "bengkel";
		$username = "root";
		$password = "";
		$conn = mysqli_connect($servername, $username, $password, $database);
		
		$no_faktur = $_GET['no_faktur'];
		$delete = "delete from bengkeljaya where no_faktur='$no_faktur'";
		
		if(mysqli_query($conn, $delete))
		{
			echo "<script> alert('Data Berhasil Dihapus'); window.location.assign('laporantamu.php'); </script>";
		}
		 else
		 {
			echo "<script> alert('Data Gagal Dihapus'); window.location.assign('laporantamu.php'); </script>";
		 }
	
?>
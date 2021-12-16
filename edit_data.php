<?php

	
	$servername = "localhost";
		$database = "bengkel";
		$username = "root";
		$password = "";
		$conn = mysqli_connect($servername, $username, $password, $database);
		
		$no_faktur= $_GET['no_faktur'];
		$data = mysqli_query($conn, "select * from bengkeljaya where no_faktur like '%".$no_faktur."%'");
		
		if($data=== FALSE)
			{
	
			die(mysqli_error($conn));
	
			}
			
			while($d = mysqli_fetch_array($data))
			{
			?>
 <style>
 body{font-family:"helvetica";}
 </style>

		<h2>Input Data</h2>
		<form method ="post" action="prosesedit.php" target="contents">
		<table>
			<tr><td>No faktur</td><td><input type="text" value="<?php echo $d['no_faktur']; ?>" name="no_faktur" readonly></td>
			<tr><td>Nama Customer</td><td><input type="text" value="<?php echo $d['nama_customer']; ?>" name="nama_customer"></td></tr>
			</td></tr>
			<tr><td>No plat</td><td><input type="text" value="<?php echo $d['noplat']; ?>" name="plat"></td></tr>
			</td></tr>
			<tr><td>Tanggal service</td><td><input type="text" value="<?php echo $d['tanggal']; ?>" name="tanggal" value="<?php echo date("Y-m-d"); ?>"></td></tr>
			<tr><td>Biaya service</td><td><input type="text" value="<?php echo $d['biaya_servis']; ?>" name="biaya_servis"></td></tr>
			<tr><td>Biaya Suku Cadang</td><td><input type="text" value="<?php echo $d['biaya_sukucadang']; ?>" name="biaya_sukucadang"></td></tr>
			<tr><td>Ganti oli</td><td>
			<input type ="radio"name="ganti"value="YA">YA
			<input type ="radio"name="ganti"value="TIDAK">TIDAK
			<tr><td colspan="2"><button type="submit value="simpan">EDIT</button></td></tr>
	</table>
	</form>
	<?php }?>
	

<html>
<head>
    <title> SIMPAN </title>
</head>

<body>
          <h2 align="center"><blink>Simpan Data </blink></h2>
		  <table>
		  <tr>
		  <td><button type ="submit" > <a target="contents" href="menu.php" >Menu</button></td> 
		  <td><button type ="submit" > <a target="contents" href="cari_data.php" >Cari</button>
		  <td><button type ="submit" > <a target="contents" href="laporantamu.php" >Laporan</button></td> 
		  </tr>
<?php
         //koneksi kedatabase
		 $servername = "localhost";
		 $database = "bengkel";
		 $username ="root";
		 $password ="";
		 $conn = mysqli_connect($servername, $username, $password, $database);
		 
		 //menyimpan data kedalam variabel
		 $no_faktur  =$_POST['no_faktur'];
		 $nama_customer =$_POST['nama_customer'];
		 $plat=$_POST['plat'];
		 $tanggal  =$_POST['tanggal'];
		 $biaya_servis  =$_POST['biaya_servis'];
		 $biaya_sukucadang =$_POST['biaya_sukucadang'];
		 $ganti =$_POST['ganti'];
		 $bg = 0;
		 
		 
		if($ganti =='YA')
			{ $bg =25000;
		}
		else
			{ $bg=0;
		}
		
	 	$tb= $biaya_servis + $biaya_sukucadang + $bg ;
		

		 //query SQL untuk insert data 
		 $query ="INSERT INTO bengkeljaya  SET no_faktur='$no_faktur',nama_customer='$nama_customer',noplat='$plat',tanggal='$tanggal',biaya_servis='$biaya_servis',biaya_sukucadang='$biaya_sukucadang',biaya_gantioli='$bg',total='$tb'";
		 mysqli_query($conn,$query);
?>
</body>
</html>


<html>
<head>
   <title> LAPORAN </title>
   </head>
   <body>
   <h2><center>INFORMASI TRANSAKSI SERVIS    </center></h2>
<?php
		$servername = "localhost";
		$database = "bengkel";
		$username ="root";
		$password ="";
		$conn = mysqli_connect($servername, $username, $password, $database);
		
?>

 <table border="3" cellspacing="2" width="95%" align="center">
	  <tr>
	  <th>No</th>
	  <th>No faktur</th>
	  <th>Nama custumer</th>
	  <th>No plat</th>
	  <th>Tanggal servis</th>
	  <th>Biaya servis</th>
	  <th>Biaya suku cadang </th>
	  <th>Biaya Ganti Oli</th>
	  <th>Total Biaya</th>
	  <th>Opsi</th>
	  
	  
	</tr>

	<?php
if(isset($_GET['cari']))
{
	$cari = $_GET['cari'];
	$data = mysqli_query($conn, "select * from bengkeljaya where no_faktur like '%".$cari."%'");
}
 else
 {
	 $data = mysqli_query($conn, "select * from bengkeljaya");
 }
 
if($data=== FALSE)
{
	
	die(mysqli_error($conn));
	
}
	$no = 1;
	while($d = mysqli_fetch_array($data))
{
?>

 <tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $d['no_faktur']; ?></td>
	<td><?php echo $d['nama_customer']; ?></td>
	<td><?php echo $d['noplat']; ?></td>
	<td><?php echo $d['tanggal']; ?></td>
	<td><?php echo "Rp.".$d['biaya_servis']; ?></td>
	<td><?php echo "Rp.".$d['biaya_sukucadang']; ?></td>
	<td><?php echo "Rp.".$d['biaya_gantioli']; ?></td>
	<td><?php echo "Rp.".$d['total']; ?></td>
	<td>
		<a target="contents" href="edit_data.php?no_faktur=<?php echo $d['no_faktur']; ?>">Edit | <a href="hapus.php?no_faktur=<?php echo $d['no_faktur']; ?>">Hapus </a>
	</td>
 </tr>
 
<?php }
?>
	
</table>
<a></a></br>
<a></a></br>
	
</body>
</html


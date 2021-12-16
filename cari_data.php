<html>
<head>
   <title> CARI </title>
   </head>
  
   <body>
   <h2>Pencarian Data Tamu</h2>
<?php
		$servername = "localhost";
		$database = "bengkel";
		$username ="root";
		$password ="";
		$conn = mysqli_connect($servername, $username, $password, $database);
		
?>
 
<form action="cari_data.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari" value="<?php if(isset($_GET['cari'])) { echo $_GET['cari']; }?>"/>
	<input type="submit" value="Cari">
</form>

<?php 
if(isset($_GET['cari']))
{
$cari = $_GET['cari'];
echo "<b>Hasil Pencarian : ".$cari."</b>";
}
?>

 <table border="3" cellspacing="2" width="97%" align="center">
 	<tr>
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
	 $data = mysqli_query($conn, "select * from bengkeljaya;");
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
 </tr>
<?php }
?>
  
</table>
</body>
</html>

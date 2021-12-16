<!DOCTYPE html>
<html>
<head>
   <title> TAMU </title>
   </head>
   <body>
   <h2>BENGKEL SERVIS JAYA DATA TRANSAKSI SERVIS MOTOR </h2>
    <form method ="post" action="simpan_data.php" target="contents">
	<table>
		<tr><td>NO faktur</td><td><input type="text" name="no_faktur"></td>
			<td><button type ="submit" value ="cari" name="cari" id="cari"> <a target="contents" href="cari_data.php">CARI</button></tr>
		<tr><td>Nama Custumer</td><td><input type="text" name="nama_customer"></td></tr>
		<tr><td>No Plat</td><td><input type="text" name="plat"></td></tr>
		<tr><td>Tanggal servis</td><td><input type="text" name="tanggal" value="<?php echo date("Y-m-d"); ?>"></td></tr>
		<tr><td>Biaya service</td><td><input type="text"name="biaya_servis"></td></tr>
	    <tr><td>Biaya suku cadang</td><td><input type="text"name="biaya_sukucadang"></td></tr>
		<tr><td>Ganti Oli</td><td>
	      <input type ="radio"name="ganti" value="YA">YA
		  <input type ="radio"name="ganti" value="TIDAK">TIDAK
		    </td></tr>
			<tr><td colspan="2"><button type="submit value="simpan">SIMPAN</button></td></tr>
	</table>
	</form>
	<a></a></br>
<a></a></br>
</body>
</html>
 
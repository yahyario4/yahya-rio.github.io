<html>
<head>
 <title>Menu</title>
 <base target="content">
 <STYLE type="text/css">
  h3{
     font-size:20pt;
	 color:  darkolivegreen ; }
  p1{font size ="10";
  color: green;}
  </STYLE>
  
</head>
	<body>
	
	<h3><center><b>MENU</b></center></h3>
	<ul>
	   <p1><li><a  href="content.php"><p1>Profil</a></li>
	   <p1><li><a  href="form_input.php"><p1>Input Data Pasien</a></li>
	   <p1><li><a  href="laporantamu.php"><p1>Laporan Data Pasien</a></li>
   	</ul>
  <div class="container-fluid">
  <form action="simpan_data.php" method="get">
  <h2 align="center"><font color="white" style="alignment-baseline: "><i><u>Input Data Pasien</u></i></font></h2>
  <table border="0" align="center">
      <tr><td>NIK </td><td><input type=r="text" name="NIK" size="10"/></td></tr>
      <tr><td>NAMA</td> <td><input type=r="text" name="NAMA " size="30" /></td></tr>
      <tr><td>Alamat </td> <td><textarea name="alamat" row="5" cols="31"></textarea></td></tr>
      <tr><td>Jenis Kelamin</td> <td><input type="radio" name="jenis_kelamin" value="PRIA" />
      PRIA<input type="radio" name="jenis_kelamin" value="WANITA" /> 
      WANITA</td></tr>
      <tr><td>TTL </td> <td><input type="text" name="tempat" size="10"><input type="date" size="30" name="ttl" /></td></tr>
      <tr><td>GOLONGAN DARAH </td> <td><select name="GOLONGAN DARAH">
         <option value="Kristen"></option>
                  <option value="">A</option>
                  <option value="">B</option>
                  <option value="">AB</option>
                  <option value="">O</option>
                  </select></td></tr>
      <tr><td>STATUS <td><input type="checkbox" id="apple" value="apple">BPJS</td></tr>
      <tr><td>KLINIK  
              <td><input type = "radio" name = "Klinik" value = "Kebidanan/kandungan"/> Kebidanan/kandungan</br>
              <input type = "radio" name = "Klinik" value = "Andrologi"/>Andrologi<br>
              <input type ="radio" name = "Klinik" value = "Anak"/>Anak<br> 
              <input type ="radio" name ="Klinik" value = "Gizi"/>Gizi<br>
              <input type ="radio" name ="Klinik" value = "Psikologi"/>Psikologi<br>
              <input type ="radio" name ="Klinik" value = "Penyakit Dalam"/>Penyakit Dalam<br>
      <td>
      <tr><td></td><td><input type="Submit" value="Submit" align="right"><input type="reset" value="clear"></td></tr>
  </table>

  <a href="https://www.youtube.com/watch?v=Y3RmZq35Uu8" target="_blank" align="center">
        <h3 style="text-align:center;">RS PROFILE</h3>
      </a>
      <a href="https://www.w3schools.com/" target="_blank" align="center">
        <h3 style="text-align:center;">CONTACT US</h3>
      </a>

</form>
  </div>
	</body>
</html> 
<?php
	
	include 'penghubung/penghubung.php';
	$select ="select * from jabatan";
	$qSelect = mysql_query($select) or die(mysql_error());
		
	$status="";
	$semakNoStaff = "";
	$paparStatus = "&nbsp;";
			
	if(isset($_REQUEST['noStaff']))
	{	
		$semakNoStaff = $_REQUEST['noStaff'];
	}
	else
	{  $semakNoStaff=""; }
	
	if(!$semakNoStaff == "")
	{
		$anggota = "select * from anggota where AnggotaID = '$semakNoStaff'";
		$queueAnggota = mysql_query($anggota) or die(mysql_error());
		$dataAnggota = mysql_fetch_array($queueAnggota);
		
		$numberRow = mysql_num_rows($queueAnggota);

			if($numberRow == 0)
			{
				$status = "nsd";
			} 
			else
			{
				$status = "nstd";
			}
	}
	else
	{ $semakNoStaff = ""; }
	
	if(!$status == "")
	{
		if($status == "nsd")
		{
			$paparStatus = "<font face= 'Arial' color='green' size='2'>Nombor Staf Diterima</font>";
		}
		elseif($status == "nstd")
		{
			$paparStatus = "<font face= 'Arial' color='red' size='2'>Nombor Staf Telah Didaftarkan</font>";
		}
		else
		{ $paparStatus = "&nbsp;";}
	}
	
	
?>


<!doctype html>

<head>

	<!-- Basics -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Register</title>

	<!-- CSS -->
	
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/styles.css">
	
</head>

	<!-- Main HTML -->
	
<body>
	
	<!-- Begin Page Content -->
	<p align="center">
	<img src="images/logo.gif" width="650" height="650"></p>
	
	<div id="container2">
	<font face="arial" size="+1"><br>
	<p align="center">Daftar Masuk Ke Sistem Who's In</p></font>
	<br>
	<hr>
	<!-- ################################################################################################-->
	
		
		<table>
		<tr>
			<td colspan="2" align="center" ><?php echo $paparStatus; ?></td>
		</tr>
		<tr><form action="daftar.php" method="post">
			<td width="30%"><label for="name">Nombor Staf:</label></td>
			<td width="70%"><input type="text" id="input3" name="noStaff" placeholder="Tekan Enter Untuk Semak" value="<?php echo $semakNoStaff;?>" onKeyPress="this.form.submit(Enter)" /></td>
		</tr></form>
		
        
        <form action="proses_daftar.php" method="post" enctype="multipart/form-data">
        
        <input name="noStaff" value="<?php echo $semakNoStaff;?>" hidden>
        
        <tr>
			<td><label for="username">Katalauan:</label></td>
			<td><input type="password" name="katalaluan"  id="input3" placeholder="***********" required /></td>
		</tr>
		<tr>			
			<td><label for="name">Nama:</label></td>
			<td><input type="text" id="input3" name="nama" placeholder="XXXXXX XXX XXXXX" required /></td>
		</tr>
		<tr>
			<td><label for="name">Nombor IC:</label></td>
			<td><input type="text"  id="input3" name="nomborIC" placeholder="XXXXXX-XX-XXXX" required /></td>
		</tr>
			<td><label for="name">Jabatan:</label></td>
			<td><select name="jabatan" />
			<option selected />Pilih Jabatan
            <option>Jabatan 1</option>
            <option>Jabatan 2</option>
            <option>Jabatan 3</option>
            <option>Jabatan 4</option>
            <option>Jabatan 6</option>
            <option>Jabatan 7</option>
            <option>Jabatan 8</option>
            <option>Jabatan 9</option>
            <option>Jabatan 10</option>
            <option>Jabatan 11</option>
			<?php
		
			while($dataSelect = mysql_fetch_array($qSelect))
			{
			?>
			</option>
			<option value="<?php echo $dataSelect['jabatanNama']; ?>"><?php echo $dataSelect['jabatanNama']; ?></option>
			<?php 
			} 
			?>
			</select></td>
		</tr>
		<tr>
			<td><label for="name">Jawatan:</label></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="penggunaJawatan" value="anggota" checked required /><label for="name">Anggota</label>
		</tr>
		<tr>
			<td><label for="name">E-Mail:</label></td>
			<td><input type="text"  id="input3" name="email" placeholder="XXXXX@XXXX.XXX"></td>
		</tr>
		<tr>
			<td><label for="name">Nombor Telefon:</label></td>
			<td><input type="text"  id="input3" name="nomborTelefon" placeholder="XXX-XXXXXXX" /></td>
		</tr>
		</table>
		<div id="lower">
		
		<input type="submit" name="daftar" value="Daftar">
		<input type="reset" class="input2" name="reset" value="Bersih">
		<br><br>
		<p align="left"><a href="index.php"><font face="Arial" size="-1">Pergi Ke Log In</font></a></p>
		
		</div>
		
		</form>
		<br><br>
		<p align="center"><font face="arial" size="-2" color="white">
			Dec 2014 - Mac 2015 - All Rights Reserved - Perbadanan Kemajuan Iktisad Negeri Kelantan <br>
			Dibina oleh : Pelajar Latihan Industri UiTM
			</font>
		</p>
	</div>
	
	
	
	<!-- End Page Content -->
	
</body>

</html>
	
	
	
	
	
		
	
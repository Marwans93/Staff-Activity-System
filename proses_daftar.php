<?php

 	include 'penghubung/penghubung.php';
	
	$noStaff = $_POST['noStaff'];
	$katalaluan = $_POST['katalaluan'];
	$nama = $_POST['nama'];
	$nomborIC = $_POST['nomborIC'];
	$jabatan = $_POST['jabatan'];
	$penggunaJawatan = $_POST['penggunaJawatan'];
	$email = $_POST['email'];
	$nomborTelefon = $_POST['nomborTelefon'];
	

			mysql_query("insert into pengguna values ('$noStaff','$katalaluan','$nama','$penggunaJawatan')") or die (mysql_error());
			
			mysql_query("insert into anggota values ('$noStaff','$nomborIC','$jabatan','$email','$nomborTelefon')") or die (mysql_error());
				
			$maklum = $noStaff." Berjaya Didaftar! Sila Log Masuk Disini.";
			
			header("Location:index.php?status=$maklum");

$sqldata = mysql_query($dbconnect,$sqlget) or die ('Error!');
	
	?>
<?php


	if(isset($_GET['status']))
	{
		$id = $_GET['status'];
	
		$semakStatus = $id;
	}
	else
	{
		$semakStatus = '&nbsp;';
	}
	
?>

<!doctype html>

<head>

	<!-- Basics -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>WHO'S IN SISTEM</title>

	<!-- CSS -->
	
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/styles.css">
	
</head>

	<!-- Main HTML -->
	
<body>
	
	<!-- Begin Page Content -->
	<div align="center">
		<br>
		<br>
		<br><font size="+3">
		SELAMAT DATANG KE WHO'S IN SISTEM
		</font>
		<br>
		<br>
		<br>
		
		<hr>
		<img src="images/LOGO.png" >
		
	
	</div>
	
	<div id="container">
    <div align="center">
    	<table align="center">
        <tr>
        	<td colspan="2" align="center"><font type = "arial" size="2" color="green">
			<?php 
			echo $semakStatus;
			?>
			</font></td>
         </tr>
       		<form action="proses_log_masuk.php" method="post" name="log masuk">
			<tr>
            	<td width="50%"><label for="username">No. Staf:</label></td>
				<td width="50%"><input type="text" name="noStaff" size="50" required /></td>
            </tr>
            <tr>
            	<td><label for="username">Katalauan:</label></td>
				<td><input type="password" name="katalaluan" required /></td>
			</tr>
		</table></div>
		<div id="lower">
		
		
		<input type="submit" value="Masuk"></form>
		<a href="daftar.php"><input type="button" value="Daftar">
		</a>
		
		</div>
		<br><br>
			<p align="center"><font face="arial" size="-2">
			Dec 2014 - Mac 2015 - All Rights Reserved<br>
			Perbadanan Kemajuan Iktisad Negeri Kelantan <br>
			Dibina oleh : Pelajar Latihan Industri UiTM
			</font>
		</p>
		
	</div>
	
	
	<!-- End Page Content -->
	
</body>

</html>
	
	
	
	
	
		
	
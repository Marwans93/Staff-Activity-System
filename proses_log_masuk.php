<?php
	
	$noStaff = $_POST['noStaff'];
	$katalaluan = $_POST['katalaluan'];
	
	include 'penghubung/penghubung.php';
	
	$select = "select * from pengguna where penggunaID = '$noStaff' and penggunaKatalaluan = '$katalaluan'";
	
	$queue = mysql_query($select) or die (mysql_error());
	$numberRow = mysql_num_rows($queue);
	
	if($numberRow == 0)
	{
		$maklum = "Pengguna Tidak Wujud!";
		header ("Location: index.php?status=$maklum");
	}
	else
	{
		$array = mysql_fetch_array($queue);
		$jawatan = $array['penggunaJawatan'];
		
			session_start();
			$_SESSION['nama'] = $array['penggunaNama'];
			$_SESSION['noStaff'] = $array['penggunaID'];
			$_SESSION['jawatan'] = $jawatan;
			$_SESSION['register'] = 'login';
			
				if($jawatan == 'admin')
				{
					header('Location:admin/index.php');
				}
				else if ($jawatan == 'anggota')
				{
					header('Location:anggota/index.php');
				}
				
	}
?>
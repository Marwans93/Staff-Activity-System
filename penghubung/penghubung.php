<?php

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'in_out_board';
	
	mysql_connect($dbhost, $dbuser,$dbpass,$dbname) or die(mysql_error());
	mysql_select_db($dbname) or die(mysql_error());

?>
<?php

	$host = 'localhost';
	$user = 'root';
	$pass = 'ramaul99';

	$dbname = 'travelloklah'; 
	//mengubung ke host
	$connect = mysql_connect($host, $user, $pass, $dbname) or die(mysql_error());
	 
	//memilih database yang akan digunakan
	$dbselect = mysql_select_db($dbname);

?>
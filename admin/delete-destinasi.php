<?php
include('../inc/config.php');
include('cek-login.php');

$kodewst = $_GET['kodewst'];
 
$query = mysql_query("delete from destinasi where kodewst='$kodewst'") or die(mysql_error());
 
if ($query) {
    header('location:destinasi.php?message=delete');
}
?>
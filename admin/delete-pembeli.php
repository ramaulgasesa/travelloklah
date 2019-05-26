<?php
include('../inc/config.php');
include('cek-login.php');

$id = $_GET['id_plgn'];
 
$query = mysql_query("DELETE FROM form WHERE id_plgn='$id_plgn'") or die(mysql_error());
 
if ($query) {
    header('location:pembeli.php?message=delete');
}
?>
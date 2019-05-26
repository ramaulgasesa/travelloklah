<?php
date_default_timezone_set("Asia/Jakarta");
// session_start();
$db = mysql_connect("localhost", "root", "ramaul99","travelloklah") or die("Gagal");
if(!$db)die("no db");
if(!mysql_select_db("travelloklah",$db))die("Tidak ada database");
?>
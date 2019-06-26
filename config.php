<?php
date_default_timezone_set("Asia/Jakarta");
// session_start();
$db = mysql_connect("sql106.epizy.com", "epiz_24083681", "KAzTZmPmMmpB","epiz_24083681_travelloklah") or die("Gagal");
if(!$db)die("no db");
if(!mysql_select_db("epiz_24083681_travelloklah",$db))die("Tidak ada database");
?>
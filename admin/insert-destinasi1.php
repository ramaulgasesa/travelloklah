<?php
	if (isset($_POST ['btnKirim'])) {
		$file = $_FILES ['gambar'];
		print_r($file);
		$gambar = $_FILES ['gambar'] ['name'];
		$tmpName = $_FILES ['gambar'] ['tmp_name'];
		$ukuran = $_FILES ['gambar'] ['size'];
		$gambarError = $_FILES ['gambar'] ['error'];
		$type = $_FILES ['gambar'] ['type'];

		$ext = explode('.', $gambar);
		$ActualExt = strtolower(end($ext));

		$allowed = array('jpeg','jpg','png');

		if (in_array($ActualExt, $allowed)) {
			if ($gambarError === 0) {
				if ($ukuran < 10000000) {
					$gambarNew = uniqid('',true).".".$ActualExt;
					$penyimpanan = "gambar/".$gambarNew;
					move_uploaded_file($tmpName, $penyimpanan);
					header('location:index.php?message=success');
				}
				else {
					echo "<script> alert ('ukuran foto terlalu besar!'); 
					window.location='tambah-destinasi.php';</script>";
				}

			} 
			else {
				echo "<script> alert ('foto gagal diupload!'); window.location='tambah-destinasi.php';</script>" ;
			}
		} 
		else {
			echo "<script> alert ('jenis foto tidak didukung, Harus .jpg .jpeg .png !'); window.location='tambah-destinasi.php';</script>" ;
		}
	}
?>
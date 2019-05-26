<?php
//panggil server
include('../inc/config.php');
?>
<?php
  if (isset($_POST ['btnKirim'])) {
    $kodewst = $_POST['kodewst'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    //proses upload foto
    $file = $_FILES ['gambar'];
    // print_r($file);
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
          $gambarNew = preg_replace('/\s+/', '_',$nama.$kodewst.".".$ActualExt);
          $penyimpanan = "gambar/".$gambarNew;
          move_uploaded_file($tmpName, $penyimpanan);
          $sql = "INSERT INTO destinasi values ('','$nama','$deskripsi','$harga','$gambarNew')";
          $res = mysql_query($sql) or die (mysql_error());
            if ($res) {
              echo "<script> alert ('data berhasil ditambah!');</script>";
              header('location:destinasi.php?message=success');
            }
            else {
              echo "<script> alert ('gagal menambahkan data!'); 
          window.location='tambah-destinasi.php';</script>";
            }
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
<!-- <?php
//panggil file config.php untuk menghubung ke server
include('../inc/config.php');

//tempat menyimpan file
$namafolder="../gambar/"; 

//tangkap data dari form
if (!empty($_FILES["destinasi"]["tmp_name"]))
{
	$nama = $_POST['nama'];
	$deskripsi = $_POST['deskripsi'];
	$harga = $_POST['harga'];
	$gambar = $_FILES['gambar']['type'];
    
	if($gambar == "image/jpg" || $gambar == "image/jpeg" || $gambar == "image/gif" || $gambar == "image/x-png")
    {           
        $gambar = $namafolder . basename($_FILES['gambar']['nama']);
		       
        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $gambar)) 
		{
            echo "Gambar berhasil dikirim ".$gambar .'<a href="destinasi.php">lihat gambar</a>';
            $sql = "INSERT INTO destinasi values ('','$nama','$deskripsi','$harga','$gambar')";
            $res = mysql_query($sql) or die (mysql_error());
			if ($res) 
			{
				header('location:destinasi.php?message=success');
			}

        } else 
		{
           echo "Gambar gagal dikirim";
        }
   } 
   else 
   {
        echo "<script> alert ('Jenis gambar yang anda kirim salah. Harus .jpg .gif .png'); </script>";
   }
} 
else {
    echo "<script> alert ('Anda belum memilih gambar'); </script>";
}

?> -->
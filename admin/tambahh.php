<!-- <form method="post" enctype="multipart/form-data" id="form-complete">
                        <input type="hidden" name="id_login" value="<?=$_GET['id']?>">
                        <div class="form-group has-feedback">
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama anda">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="number" name="nohp" id="nohp" class="form-control" placeholder="nohp">
                            <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" name="tempat" id="tempat" class="form-control" placeholder="Tempat lahir">
                            <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="date" name="tanggal" input="tanggal" id="tanggal" class="form-control" placeholder="Tanggal lahir">
                            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                        </div>
                        <div class="form-group">
                             <div class="radio">
                                <label for="lk">
                                <input type="radio" id="lk" name="gender" value="Laki-laki" checked>
                                    laki-laki
                                </label>
                                <label for="pr">
                                <input type="radio" id="pr" name="gender" value="Perempuan">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                        <select class="form-control"  name="agama" id="agama">
                            <option value="">-- pilih salah satu --</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="file" name="foto" id="foto" class="form-control">
                        </div>
                        <div class="form-group has-feedback">
                            <textarea name="alamat" id="alamat" placeholder="alamat" class="form-control" cols="2" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <button name="btnKirim" type="submit" class="btn btn-flat btn-info btn-block"><i class="fa fa-paper-plane-o"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- jQuery 3 -->
            <script src="../assets/js/jquery.min.js"></script>
            <!-- jquery validate -->
            <script src="../assets/js/jquery.validate.min.js"></script>
            <!-- custom validate form -->
            <script src="../assets/js/myscript.js"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="../assets/css/bootstrap/dist/js/bootstrap.min.js"></script>
        </body>
        </html>
        <?php
        
    }else
    {
        header('location: logout.php');
    }
?> -->
<?php
    /*
    | -------------------------------------------------------------------
    | proses untuk melengkapi registrasi member fotoalok 
    */
    if (isset($_POST['btnKirim'])) 
    {
        // mencegah sql injection
        $id = htmlspecialchars(trim(mysqli_escape_string($conn,$_POST['id_login'])));
        $nama = htmlspecialchars(trim(mysqli_escape_string($conn,$_POST['nama'])));
        $nohp = htmlspecialchars(trim(mysqli_escape_string($conn,$_POST['nohp'])));
        $email = htmlspecialchars(trim(mysqli_escape_string($conn,$_POST['email'])));
        $tempat = htmlspecialchars(trim(mysqli_escape_string($conn,$_POST['tempat'])));
        $tanggal = htmlspecialchars(trim(mysqli_escape_string($conn,$_POST['tanggal'])));
        $gender = htmlspecialchars(trim(mysqli_escape_string($conn,$_POST['gender'])));
        $agama = htmlspecialchars(trim(mysqli_escape_string($conn,$_POST['agama'])));
        $alamat = htmlspecialchars(trim(mysqli_escape_string($conn,$_POST['alamat'])));
       
        // validasi foto
        $nama_foto = $_FILES['foto']['name'];
        $ext = pathinfo($nama_foto, PATHINFO_EXTENSION);
        $valid = array('jpeg','jpg','png');
        $ekstensi = explode('.',$nama_foto);
        $nama_file = $nama.$id.".".$ext;
        $sumber = $_FILES['foto']['tmp_name'];
        $target = "../assets/images/users/".$nama_file;
        if(!in_array($ext,$valid))
        {
            echo "<script>alert('Ekstensi foto tidak valid');window.location='complete-regis.php?id=$id'</script>";
        }
        else
        {
            // proses sql pendafratan
            $daftar = mysqli_query($conn,"INSERT INTO identitas VALUES ('$id','$nama','$nohp','$alamat','$tanggal','$tempat','$gender','$email','$nama_file','$agama')");
            if($daftar)
            {
                move_uploaded_file($sumber,$target);
                ?>
                    <script>
                        alert('Pendaftaran telah berhasil');
                        window.location='index.php';
                    </script>
                <?php
            }else
            {
                ?>
                    <script>
                        alert('Pendaftaran gagal');
                        window.location='complete-regis.php.php?id='<?=$id?>;
                    </script>
                <?php
            }
        }
    }
?>
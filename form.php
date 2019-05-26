 <?php
include "config.php";?>   
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">FORM PEMESANAN</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
              <form method="POST">
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan nama" name="nama">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Telp/WhatsApp</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan kontak"name="kontak">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Asal Kota</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan asal kota" name="asal">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Kategori Peserta</label>
                <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                  <option>-kategori-</option>
                  <option>Keluarga</option>
                  <option>Perusahaan</option>
                  <option>Sekolah/Akademik</option>
                  <option>Organisasi/Komunitas</option>
                  <option>Grup Teman</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Jumlah</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan jumlah" name="jumlah">
              </div>
              <div class="form-group">
                <label>Jadwal</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="masukan asal kota" name="asal">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Keterangan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
              </div>
            
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <input type="submit" class="btn btn-primary" name="kirim" value="Kirim">
            </div>
          </div>
        </div> 
    </div>
    </form>
    <?php 

    if(isset($_POST['kirim'])){
    $nama   = $_POST['nama'];
    $email   = $_POST['email'];
    $telp_wa = $_POST['kontak'];
    $asal = $_POST['asal'];
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $keterangan = $_POST['keterangan'];
    
    mysql_query("INSERT INTO form VALUES ('','$nama','$email','$telp_wa','$asal','$kategori','$jumlah','$keterangan')")or die(mysql_error());
    
    }
    ?>

             <form>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Nomor ID</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1" >Nama</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Telp/WhatsApp</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Asal Kota</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Kategori Peserta</label>
                <select class="form-control" id="exampleFormControlSelect1">
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
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Jadwal</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="date">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Keterangan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="sumbit" name="kirim">Kirim</button> 
            </div>
          </div>
        </div>
<?php if(isset($_POST['kirim'])){
    $nama   = $_POST['nama'];
    $email   = $_POST['email'];
    $kontak = $_POST['kontak'];
    $asal = $_POST['asal'];
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $jadwal = $_POST['jadwal'];
    $keterangan = $_POST['keterangan'];
    mysql_query("INSERT INTO form (nama,email,kontak,asal,kategori,jumlah,jadwal,keterangan) VALUES ('$nama','$email','$kontak','$asal','$kategori','$jumlah','$jadwal,''$keterangan')");?>
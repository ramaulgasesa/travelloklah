<?php require 'header.php';?>
                <!--/span-->
                <div class="span9" id="content">
               
                   <!-- Tambah User -->
                    <div class="row-fluid section">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Tambah Destinasi</div>
                            </div>
                            
                            <div class="block-content collapse in">
                                <div class="span12">
                                	 <form class="form-horizontal" name="input_destinasi" enctype="multipart/form-data" method="post" action="insert-destinasi.php"> 
                                      <fieldset>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Nama </label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="nama" type="text" placeholder="Nama">
                                          </div>
                                        </div>
                               			<div class="control-group">
                                          <label class="control-label">Harga </label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" name="harga" type="text" placeholder="Harga">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Deskripsi </label>
                                          <div class="controls">
                                           <textarea class="input-xlarge textarea" name="deskripsi" placeholder="Deskripsi ..." style="width: 400px; height: 200px"></textarea>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="fileInput">Gambar </label>
                                          <div class="controls">
                                            <input class="input-file uniform_on" id="fileInput" name="gambar" type="file">
                                          </div>
                                        </div>
                                        
                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary" name="btnKirim">Save changes</button>
                                          <button type="reset" class="btn">Reset</button>
                                        </div>
                                      </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                 
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; Shop 2013</p>
            </footer>
        </div>
        <!--/.fluid-container-->

        <script src="js/jquery-1.9.1.min.js"></script>        
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
    </body>

</html>
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="insert-destinasi.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="gambar">
		<button type="submit" name="btnKirim">UPLOAD</button>		
	</form>

</body>
</html> -->
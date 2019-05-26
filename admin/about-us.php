<?php require 'header.php';?>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span9">
                    <div class="row-fluid">
                        <div class="span10">
                        	<div class="row-fluid">
        		
        		                <div class="span12" id="content">
        		                    <div class="row-fluid">
        		                        <!-- block -->
        		                        <div class="block">
        		                            <div class="navbar navbar-inner block-header">
        		                                <div class="muted pull-left">Manage Tentang Kami</div>
        		                            </div>
                                            <h2 align="center">Atur Halaman Tentang Kami</h2>
        		                            <div class="block-content collapse in">
        		                               	<form action="simpan-kami.php" method="post">
                                                <?php
        											$query = mysql_query("SELECT * FROM pageabout") or die(mysql_error());
        											$data = mysql_fetch_array($query);
        										?>
                                                <textarea id="ckeditor_full" name="desc"><?php echo $data['deskripsi']; ?></textarea>
        		                            	<br>
                                                <button class="btn btn-primary">Simpan</button>
                                                </form>
                                            </div>       
        		                        </div>
        		                        <!-- /block -->
        		                    </div>
        		                </div>

                        	</div>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <footer>
                <p>&copy; Shop 2013</p>
            </footer>
        </div>

        <!--/.fluid-container-->
        <script src="bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
        
	<script src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/adapters/jquery.js"></script>
        
	<script src="assets/scripts.js"></script>
        <script>
        $(function() {
            // Bootstrap
            $('#bootstrap-editor').wysihtml5();
    		
			// Ckeditor standard
            $( 'textarea#ckeditor_standard' ).ckeditor({width:'98%', height: '150px', toolbar: [
				{ name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
				[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			// Defines toolbar group without name.
				{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
			]});
            $( 'textarea#ckeditor_full' ).ckeditor({width:'98%', height: '150px'});
        });
		
        
        </script>
    </body>

</html>
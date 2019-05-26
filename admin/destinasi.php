<?php require 'header.php';?>
                <!--/span-->
                <div class="span9" id="content">
                	<?php
						if (!empty($_GET['message']) && $_GET['message'] == 'success') {
							echo '<div class="alert alert-success">' ;
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'; 
							echo '<h4>Success Menambah Destinasi</h4>';
							echo '</div>';
						}
						else if (!empty($_GET['message']) && $_GET['message'] == 'update') {
							echo '<div class="alert alert-success">' ;
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'; 
							echo '<h4>Success Update Destinasi</h4>';
							echo '</div>';
						}
						else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
							echo '<div class="alert alert-success">' ;
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'; 
							echo '<h4>Success Delete Destinasi</h4>';
							echo '</div>';
						}
						
                  	?>
                    
                  <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Daftar Destinasi</div>
                            </div>
                            <div class="block-content collapse in">
                            	 <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Kode Wisata</th>
                                                <th>Tempat Wisata</th>
                                                <th>Harga</th>
                                                <th>Deskrpisi</th>
                                                <th>Gambar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$per_page = 5;
 
											$page_query = mysql_query("SELECT COUNT(*) FROM destinasi");
											$pages = ceil(mysql_result($page_query, 0) / $per_page);
 
											$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
											$start = ($page - 1) * $per_page;
											
											$query = mysql_query("SELECT * FROM destinasi LIMIT $start, $per_page");
										 
											while ($data = mysql_fetch_array($query)) {
											?>
												<tr>
													<td><?php echo $data['kodewst']; ?></td>
													<td><?php echo $data['nama']; ?></td>
													<td><?php echo $data['harga']; ?></td>
                                                    <td><?php echo $data['deskripsi']; ?></td>
                                                    <td><?php echo '<img src="admin/gambar/'.$data['gambar'].'" alt="'.$data['nama'].'" title="'.$data['nama'].'" width = "100" height = "100" />'; ?></td>   												
                                                    <td><a href="edit-barang.php?id=<?php echo $data['kodewst']; ?>" class="btn">
                                                    <i class="icon-edit"></i> Edit</a> | <a href="delete-destinasi.php?kodewst=<?php echo $data['kodewst']; ?>"class="btn" onclick="return confirm('Anda Yakin ?')")><i class="icon-trash"></i>Hapus</a></td>
												</tr>
											<?php	
											}
											?>
                                        </tbody>
                                    </table>
                                    <div align="center">
									<?php
									if($pages >= 1 && $page <= $pages)
									{
									  for($x=1; $x<=$pages; $x++)
									  {
										  //echo ($x == $page) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
									  	if($x == $page)
											echo ' <b><a href="?page='.$x.'">'.$x.'</a></b> | ';
										else
											echo ' <a href="?page='.$x.'">'.$x.'</a> |';
									  }
									}
									?>
                                    </div>
                            </div>
                            <div class="navbar navbar-inner block-header">
                            	 <a href="tambah-destinasi.php" class="btn"><i class="icon-plus"></i> Tambah</a>
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
        <script>
        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
    </body>

</html>
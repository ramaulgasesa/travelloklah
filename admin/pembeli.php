<?php require 'header.php';?>
                <!--/span-->
                <div class="span9" id="content">
                	<?php
						if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
							echo '<div class="alert alert-success">' ;
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'; 
							echo '<h4>Success Delete</h4>';
							echo '</div>';
						}						
                  	?>
                    
                  <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Daftar Pembeli</div>
                            </div>
                            <div class="block-content collapse in">
                            	 <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id Pembeli</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Telp/Wa</th>
                                                <th>Asal</th>
                                                <th>Kategori</th>
                                                <th>Jumlah</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$per_page = 15;
 
											$page_query = mysql_query("SELECT COUNT(*) FROM form");
											$pages = ceil(mysql_result($page_query, 0) / $per_page);
 
											$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
											$start = ($page - 1) * $per_page;
											
											$query = mysql_query("SELECT * FROM form LIMIT $start, $per_page");
										 
											while ($data = mysql_fetch_array($query)) {
											?>
												<tr>
													<td><?php echo $data['id_plgn']; ?></td>
													<td><?php echo $data['nama']; ?></td>
                                                    <td><?php echo $data['email']; ?></td>
                                                    <td><?php echo $data['telp_wa']; ?></td>
                                                    <td><?php echo $data['asal']; ?></td>
                                                    <td><?php echo $data['kategori']; ?></td>
                                                    <td><?php echo $data['jumlah']; ?></td>
                                                    <td><?php echo $data['keterangan']; ?></td>
                                                    <td><a href="delete-pembeli.php?id_plgn=<?php echo $data['id_plgn']; ?>" class="btn" onclick="return confirm('Anda Yakin ?')")><i class="icon-trash"></i></a></td>
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
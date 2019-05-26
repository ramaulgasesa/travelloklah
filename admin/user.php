<?php require 'header.php';?>
                <!--/span-->
                
                <div class="span9" id="content">
                	<?php
						if (!empty($_GET['message']) && $_GET['message'] == 'success') {
							echo '<div class="alert alert-success">' ;
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'; 
							echo '<h4>Success Menambah User</h4>';
							echo '</div>';
						}
						else if (!empty($_GET['message']) && $_GET['message'] == 'update') {
							echo '<div class="alert alert-success">' ;
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'; 
							echo '<h4>Success Update User</h4>';
							echo '</div>';
						}
						else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
							echo '<div class="alert alert-success">' ;
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'; 
							echo '<h4>Success Delete User</h4>';
							echo '</div>';
						}
						
                  	?>
                    
					<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Daftar User </div>
                            </div>
                            <div class="block-content collapse in">
                            	 <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$query = mysql_query("select * from user");
										 
											$no = 1;
											while ($data = mysql_fetch_array($query)) {
											?>
												<tr>
													<td><?php echo $no; ?></td>
													<td><?php echo $data['username']; ?></td>
													<td><?php echo md5($data['password']); ?></td>
													<td><a href="edit-user.php?id=<?php echo $data['id']; ?>" class="btn"><i class="icon-edit"></i> Edit</a> | <a href="delete-user.php?id=<?php echo $data['id']; ?>" class="btn"><i class="icon-trash"></i>Hapus</a></td>
												</tr>
											<?php
												$no++;
											}
											?>
                                        </tbody>
                                    </table>
                            </div>
                            <div class="navbar navbar-inner block-header">
                            	 <a href="tambah-user.php" class="btn"><i class="icon-plus"></i> Tambah</a>
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
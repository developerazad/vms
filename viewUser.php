<?php include("header.php"); ?>
		
		
		<div class="col-md-12">

			<?php include("leftMenu.php"); ?> <!-- col-md-3 is here -->
			<!-- Main Place work to be done -->
			<div class="col-md-9 hstu">
					<h3 class="text-center">Users Of HSTU</h3> 
						<form action="updateUser.php" method="post" enctype="multipart/form-data">

					<!-- Selecting from database -->
						<?php include("config.php"); ?>
						<?php 

								$sql = "SELECT * FROM user ";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
									echo "<table border='2' align='center' class='table table-hover'>
												<tr>
													<th>SL</th>
													<th>User Name</th>
													<th>Role</th>
													<th>Update</th>
													<th>Delete</th>
												</tr>";
										while($row = $result->fetch_assoc()){
												echo "<tr>";
													echo "<td>".$row['userid']."</td>";
													echo "<td>".$row['username']."</td>";
													echo "<td>".$row['role']."</td>";
						?>

													<td><a href="updateUser.php?userid=<?php echo $row['userid']?>&username=<?php echo $row['username'] ?>">Update</a></td>
													<td><a href="deleteUser.php?userid=<?php echo $row['userid']?>">Delete</a></td>

						<?php 
												echo "</tr>";
										}
									echo "</table>";
								} else {
									echo("No Data were Found!");
								}
								
								$conn->close();
							
							
						 ?>

					<!-- Selecting from database  End-->

					
					</form>

					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
						        
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           <a href="entryUser.php"><input name="addnew" class="form-control" type="button" value="Add New" style="width:110px;"></a>
						           </div>
						        </div>
     					</div>
     					<div class="form-group">
						        
						        <div class="inputGroupContainer">
						          <div class="input-group">
						           	<input name="search" placeholder="Search Here" class="form-control" type="text" style="width: 180px;"></a> &nbsp;&nbsp;
						           	<button type="submit" style="width:100px;">Search</button>
						           </div>
						        </div>
						        
     					</div>
					</form>
			</div> <!-- col-md-9 -->
			<!-- Main Place work to be done end -->

					

		</div> <!-- col-md-12 -->
					
		
		<?php include("footer.php"); ?>


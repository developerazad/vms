<?php include("header.php"); ?>
		
		
		<div class="col-md-12">

			<?php include("leftMenu.php"); ?> <!-- col-md-3 is here -->
			<!-- Main Place work to be done -->
			<div class="col-md-9 hstu">
					<h3 class="text-center">Search Result for Students Of HSTU</h3> 
						<form action="" method="post" enctype="multipart/form-data">

					<!-- Selecting from database -->
						<?php include("config.php"); ?>
						<?php 
						if (isset($_POST["search"])) {
								$key = $_POST["search"];
								$sql = "SELECT * FROM student WHERE name like '%$key%' OR faculty like '%$key%' OR dept like '%$key%' OR contact like '%$key%' OR address like '%$key%' ";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
									echo "<table border='2' align='center' class='table table-hover'>
												<tr>
													<th>SL</th>
													<th>Name</th>
													<th>Faculty</th>
													<th>Dept.</th>
													<th>DOB</th>
													<th>Address</th>
													<th>Contact</th>
													<th>Gender</th>
													<th>Update</th>
													<th>Delete</th>
												</tr>";
										while($row = $result->fetch_assoc()){
												echo "<tr>";
													echo "<td>".$row['stdid']."</td>";
													echo "<td>".$row['name']."</td>";
													echo "<td>".$row['faculty']."</td>";
													echo "<td>".$row['dept']."</td>";
													echo "<td>".$row['dob']."</td>";
													echo "<td>".$row['address']."</td>";
													echo "<td>".$row['contact']."</td>";
													echo "<td>".$row['gender']."</td>";
						?>

													<td><a href="updateStudent.php?stdid=<?php echo $row['stdid']?>">Update</a></td>
													<td><a href="deleteStudent.php?stdid=<?php echo $row['stdid']?>">Delete</a></td>

						<?php
												echo "</tr>";
										}
									echo "</table>";
								} else {
									echo("No Data were Found!");
								}
								
								$conn->close();

						}
							
						 ?>

					<!-- Selecting from database  End-->

					
					</form>

					<form action="searchStudent.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
						        
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           <a href="entryStudent.php"><input name="addnew" class="form-control" type="button" value="Add New" style="width:110px;"></a>
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


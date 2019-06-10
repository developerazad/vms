<?php include("header.php"); ?>


<!-- retrive data from database to update for a specific user -->

<?php 
	$t_id = isset($_GET['t_id'])?$_GET['t_id']:"";
	
 ?>
					<?php include("config.php"); ?>
					<?php
							$sql="SELECT * FROM teacher WHERE t_id = $t_id ";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $t_id   = $row["t_id"];
							        $name 	= $row["name"];
							        $email    = $row["email"];
							        $contact    = $row["contact"];
							        $dob    = $row["dob"];
							        $address    = $row["address"];
							        $degree    = $row["degree"];
							        $gender    = $row["gender"];
							        $marry    = $row["marry"];
							        $salary    = $row["salary"];
									
							    }
							}
							
							$conn->close();

					?>
<!-- retrive data from database to update for a specific user end -->


<!--Updating into database -->
						<?php include("config.php"); ?>
						<?php 
						if (isset($_POST["submit"])) {

								$sql = "UPDATE teacher SET name = '" .$_POST["name"]. "', email='" .$_POST["email"]."', contact='" .$_POST["contact"]."', dob='" .$_POST["dob"]."' , address='" .$_POST["address"]."' , degree='" .$_POST["degree"]."' , gender='" .$_POST["gender"]."' , marry='" .$_POST["marry"]."', salary='" .$_POST["salary"]."' WHERE t_id = $t_id";
								if ($conn->query($sql)===TRUE) {
									echo "<script>alert('Successfully Updated Teacher!');</script>";
								} else {
									echo "<script>alert('Error Updating Teacher!');</script>";
									
								}
								$conn->close();

							} 
							
						 ?>

					<!-- Updating into database End-->



		
		
		<div class="col-md-12">

			<?php include("leftMenu.php"); ?> <!-- col-md-3  -->
			<!-- Main Place work to be done -->
			<div class="col-md-9 hstu">
					<h3 class="text-center">Update Faculty Form</h3> 
					<form class="well form-horizontal" action="" method="post" id="contact_form">
						<fieldset>

						<div class="col-md-5">
							<div class="form-group">
						        <label class="col-md-4 control-label">Name:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="name" placeholder="Full Name" class="form-control" type="text" required="required" value="<?php echo $name; ?>">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Email:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="email" placeholder="Email" class="form-control" type="email" value="<?php echo $email; ?>">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Contact:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="contact" placeholder="Contact" class="form-control" type="text" value="<?php echo $contact; ?>">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">DOB:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="dob" placeholder="Date Of Birth" class="form-control" type="date" value="<?php echo $dob; ?>">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Address:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="address" placeholder="Address" class="form-control" type="text" value="<?php echo $address; ?>">
						           </div>
						        </div>
     						 </div>
     					</div>




						<div class="col-md-4">
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Degree:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<select name="degree" id="" value="<?php echo $degree; ?>">
						           		<option value="BSc in CSE">BSc in CSE</option>
						           		<option value="MSc in CSE">MSc in CSE</option>
						           		<option value="BSc in ECE">BSc in ECE</option>
						           		<option value="MSc in ECE">MSc in ECE</option>
						           		<option value="BSc in EEE">BSc in EEE</option>
						           		<option value="MSc in EEE">MSc in EEE</option>
						           	</select>
						           </div>
						        </div>
     						 </div>

     						 <div class="form-group">
						        <label class="col-md-4 control-label">Gender:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<select name="gender" id="" value="<?php echo $gender; ?>">
						           		<option value="">Select</option>
						           		<option value="Male">Male</option>
						           		<option value="Female">Female</option>
						           	</select>
						           </div>
						        </div>
     						 </div>

     						 <div class="form-group">
						        <label class="col-md-4 control-label">Married:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<select name="marry" id="" value="<?php echo $marry; ?>">
						           		<option value="">Select</option>
						           		<option value="Yes">Yes</option>
						           		<option value="No">No</option>
						           	</select>
						           </div>
						        </div>
     						 </div>

     						 <div class="form-group">
						        <label class="col-md-4 control-label">Salary:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="salary" placeholder="Salary" class="form-control" type="text" value="<?php echo $salary; ?>">
						           </div>
						        </div>
     						 </div>

     						 <div class="form-group">
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="submit" placeholder="Address" class="form-control" type="submit" value="Update Teacher" style="background-color:#3739d580;;color:#fff;">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<a href="entryStudent.php"><input name="cancel" placeholder="Address" class="form-control" type="button" value="Cancel" style="background-color:#cf3f3f66;;color:#fff;"></a>
						           </div>
						        </div>
     						 </div>
     						 
     					</div>


						</fieldset>
					</form>


					
			</div>  <!-- col-md-9 -->
			<!-- Main Place work to be done -->
		</div> <!-- col-md-12 -->


		<?php include("footer.php"); ?>


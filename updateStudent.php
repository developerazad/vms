<?php include("header.php"); ?>


<!-- retrive data from database to update for a specific user -->

<?php 
	$stdid = isset($_GET['stdid'])?$_GET['stdid']:"";
	
 ?>
					<?php include("config.php"); ?>
					<?php
							$sql="SELECT * FROM student WHERE stdid = $stdid ";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $stdid   = $row["stdid"];
							        $name 	= $row["name"];
							        $faculty 	= $row["faculty"];
							        $dept    = $row["dept"];
							        $dob    = $row["dob"];
							        $address    = $row["address"];
							        $email    = $row["email"];
							        $contact    = $row["contact"];
							        $gender    = $row["gender"];
									
							    }
							}
							
							$conn->close();

					?>
<!-- retrive data from database to update for a specific user end -->


<!--Updating into database -->
						<?php include("config.php"); ?>
						<?php 
						if (isset($_POST["submit"])) {

								$sql = "UPDATE student SET name = '" .$_POST["name"]. "', faculty='" .$_POST["faculty"]."', dept='" .$_POST["dept"]."', dob='" .$_POST["dob"]."' , address='" .$_POST["address"]."' , email='" .$_POST["email"]."' , contact='" .$_POST["contact"]."' , gender='" .$_POST["gender"]."' WHERE stdid = $stdid";
								if ($conn->query($sql)===TRUE) {
									echo "<script>alert('Successfully Updated Student!');</script>";
								} else {
									echo "<script>alert('Error Updating Student!');</script>";
									
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
						        <label class="col-md-4 control-label">Faculty:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="faculty" placeholder="Faculty" class="form-control" type="text" value="<?php echo $faculty; ?>">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Department:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="dept" placeholder="Department" class="form-control" type="text" value="<?php echo $dept; ?>">
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
						        <label class="col-md-4 control-label">E-mail:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="email" placeholder="E-mail" class="form-control" type="email" value="<?php echo $email; ?>">
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
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="submit" placeholder="Address" class="form-control" type="submit" value="Update Student" style="background-color:#3739d580;;color:#fff;">
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


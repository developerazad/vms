<?php include("header.php"); ?>
		
		
		<div class="col-md-12">

			<?php include("leftMenu.php"); ?> <!-- col-md-3  -->
			<!-- Main Place work to be done -->
			<div class="col-md-9 hstu">
					<h3 class="text-center">Student Registration Form</h3> 
					<form class="well form-horizontal" action=" " method="post" id="contact_form">
						<fieldset>

						<div class="col-md-5">
							<div class="form-group">
						        <label class="col-md-4 control-label">Name:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="name" placeholder="Full Name" class="form-control" type="text" required="required">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Faculty:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="faculty" placeholder="Faculty" class="form-control" type="text">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Department:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="dept" placeholder="Department" class="form-control" type="text" required="required">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">DOB:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="dob" placeholder="Date Of Birth" class="form-control" type="date">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Address:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="address" placeholder="Address" class="form-control" type="text">
						           </div>
						        </div>
     						 </div>
     					</div>




						<div class="col-md-4">
     						 <div class="form-group">
						        <label class="col-md-4 control-label">E-mail:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="email" placeholder="E-mail" class="form-control" type="email" required="required">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Contact:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="contact" placeholder="Contact" class="form-control" type="text">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Gender:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<select name="gender" id="" required="required">>
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
						           	<input name="submit" placeholder="Address" class="form-control" type="submit" value="Register" style="background-color:#3739d580;;color:#fff;">
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


					<!-- inserting into database -->
						<?php include("config.php"); ?>
						<?php 
						if (isset($_POST["submit"])) {


							$sql1 = "SELECT * FROM student WHERE email='".$_POST["email"]."' ";
								$result = $conn->query($sql1);
								if ($result->num_rows > 0) {
									echo "<script>alert('Sorry, E-mail already exist!');</script>";
								}else{

									$sql = "INSERT INTO student (name, faculty, dept, dob, address, email, contact, gender) VALUES('".$_POST["name"]."', '".$_POST["faculty"]."','".$_POST["dept"]."','".$_POST["dob"]."','".$_POST["address"]."','".$_POST["email"]."','".$_POST["contact"]."','".$_POST["gender"]."')";
									if ($conn->query($sql)===TRUE) {
										echo "<script>alert('Successfully Registered');</script>";
									} else {
										echo "There was an error registering student!";
									}
									$conn->close();
								}

							} 
							
						 ?>

					<!-- inserting into database End-->
			</div>  <!-- col-md-9 -->
			<!-- Main Place work to be done -->
		</div> <!-- col-md-12 -->


		<?php include("footer.php"); ?>


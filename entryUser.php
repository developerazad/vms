<?php include("header.php"); ?>
		
		
		<div class="col-md-12">

			<?php include("leftMenu.php"); ?> <!-- col-md-3  -->
			<!-- Main Place work to be done -->
			<div class="col-md-9 hstu">
					<h3 class="text-center">User Registration Form</h3> 
					<form class="well form-horizontal" action=" " method="post" id="contact_form">
						<fieldset>

						<div class="col-md-5">
							<div class="form-group">
						        <label class="col-md-4 control-label">Username:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="username" placeholder="Username" class="form-control" type="text" required="required">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Password:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="password" placeholder="Password" class="form-control" type="password" required="required">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Role:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<select name="role" id="" required="required">>
						           		<option value="">Select</option>
						           		<option value="Admin">Admin</option>
						           		<option value="General">General</option>
						           	</select>
						           </div>
						        </div>
     						 </div>
     					</div>





						<div class="col-md-4">
     						 
     						 <div class="form-group">
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="submit" placeholder="Address" class="form-control" type="submit" value="Add User" style="background-color:#3739d580;;color:#fff;">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<a href="entryUser.php"><input name="cancel" placeholder="Address" class="form-control" type="button" value="Cancel" style="background-color:#cf3f3f66;;color:#fff;"></a>
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


							// checking username exist or not 
								$sql1 = "SELECT * FROM user WHERE username='".$_POST["username"]."' ";
								$result = $conn->query($sql1);
								if ($result->num_rows > 0) {
									echo "<script>alert('Sorry, username already exist!');</script>";
								}else{
								// checking username exist or not End

									$sql = "INSERT INTO user (username, password,role) VALUES('".$_POST["username"]."',sha1('" .$_POST["password"]."'),'".$_POST["role"]."')";
									if ($conn->query($sql)===TRUE) {
										echo "<script>alert('Successfully Registered');</script>";
									} else {
										echo "<script>alert('There was an error adding user!');</script>";
										
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


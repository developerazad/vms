<?php include("header.php"); ?>


<!-- retrive data from database to update for a specific user -->

<?php 
	$userid = isset($_GET['userid'])?$_GET['userid']:"";
	$username = isset($_GET['username'])?$_GET['username']:"";
 ?>
					<?php
							$servername = "localhost";
							$user_name = "root";
							$password = "";
							$dbname = "varsity";

							// Create connection
							$conn = new mysqli($servername, $user_name, $password, $dbname);
							// Check connection
							if ($conn->connect_error) {
							    die("Connection failed: " . $conn->connect_error);
							}

							
							$sql="SELECT * FROM user WHERE userid = $userid AND username = $username";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row = $result->fetch_assoc()) {
							        $userid   = $row["userid"];
							        $username = $row["username"];
							        $password = $row["password"];
									$role     = $row["role"];
									
							    }
							}
							
							$conn->close();

					?>
<!-- retrive data from database to update for a specific user end -->


<!--Updating into database -->
						<?php include("config.php"); ?>
						<?php 
						if (isset($_POST["submit"])) {

								$sql = "UPDATE user SET username='" .$_POST["username"]. "' ,password = sha1('" .$_POST["password"]."') , role='" .$_POST["role"]. "' WHERE userid=$userid";
								if ($conn->query($sql)===TRUE) {
									echo "<script>alert('Successfully Updated data!');</script>";
								} else {
									echo "<script>alert('Error Updating user!');</script>";
									
								}
								$conn->close();

							} 
							
						 ?>

					<!-- Updating into database End-->



		
		
		<div class="col-md-12">

			<?php include("leftMenu.php"); ?> <!-- col-md-3  -->
			<!-- Main Place work to be done -->
			<div class="col-md-9 hstu">
					<h3 class="text-center">Update User Form</h3>
					<form class="well form-horizontal" action="" method="post" id="contact_form">
						<fieldset>

						<div class="col-md-5">
							<div class="form-group">
						        <label class="col-md-4 control-label">Username:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="username" placeholder="Username" class="form-control" type="text" required="required" value="<?php echo $username; ?>" >
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Password:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="password" placeholder="Password" class="form-control" type="password" value="<?php echo $password; ?>">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Role:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<select name="role" id="" value="<?php echo $role; ?>" >
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
						           	<input name="submit" placeholder="Address" class="form-control" type="submit" value="Update User" style="background-color:#3739d580;;color:#fff;">
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


					
			</div>  <!-- col-md-9 -->
			<!-- Main Place work to be done -->
		</div> <!-- col-md-12 -->


		<?php include("footer.php"); ?>


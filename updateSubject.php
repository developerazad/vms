<?php include("header.php"); ?>


<!-- retrive data from database to update for a specific user -->

<?php 
	$s_id = isset($_GET['s_id'])?$_GET['s_id']:"";
	
 ?>
					<?php include("config.php"); ?>
					<?php
							$sql="SELECT * FROM subject WHERE s_id = $s_id ";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $s_id   = $row["s_id"];
							        $name 	= $row["name"];
							        $subject 	= $row["subject"];
							        $semester    = $row["semester"];
							        $duration    = $row["duration"];
									
							    }
							}
							
							$conn->close();

					?>
<!-- retrive data from database to update for a specific user end -->


<!--Updating into database -->
						<?php include("config.php"); ?>
						<?php 
						if (isset($_POST["submit"])) {

								$sql = "UPDATE subject SET name = '" .$_POST["name"]. "', subject='" .$_POST["subject"]."', semester='" .$_POST["semester"]."', duration='" .$_POST["duration"]."' WHERE s_id = $s_id";
								if ($conn->query($sql)===TRUE) {
									echo "<script>alert('Successfully Updated Subject!');</script>";
								} else {
									echo "<script>alert('Error Updating Subject!');</script>";
									
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
						        <label class="col-md-4 control-label">Faculty's Name:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="name" placeholder="Faculty Name" class="form-control" type="text" required="required" value="<?php echo $name; ?>">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Subject's Name:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="subject" placeholder="Subject" class="form-control" type="text" value="<?php echo $subject; ?>">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Semester:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<select name="semester" id="" value="<?php echo $semester; ?>">
						           		<option value="">Select</option>
						           		<option value="6">6</option>
						           		<option value="8">8</option>
						           		<option value="10">10</option>
						           	</select>
						           </div>
						        </div>
     						 </div>
     					</div>




						<div class="col-md-4">
     						  <div class="form-group">
						        <label class="col-md-4 control-label">Duration:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<select name="duration" id="" value="<?php echo $duration; ?>">
						           		<option value="">Select</option>
						           		<option value="4 Years">4 Years</option>
						           		<option value="5 Years">5 Years</option>
						           	</select>
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="submit" placeholder="Address" class="form-control" type="submit" value="Add Now" style="background-color:#3739d580;;color:#fff;">
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


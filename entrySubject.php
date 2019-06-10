<?php include("header.php"); ?>
		
		
		<div class="col-md-12">

			<?php include("leftMenu.php"); ?> <!-- col-md-3  -->
			<!-- Main Place work to be done -->
			<div class="col-md-9 hstu">
					<h3 class="text-center">Subject Registration Form</h3> 
					<form class="well form-horizontal" action=" " method="post" id="contact_form">
						<fieldset>

						<div class="col-md-5">
							<div class="form-group">
						        <label class="col-md-4 control-label">Faculty's Name:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="name" placeholder="Faculty Name" class="form-control" type="text" required="required">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Subject's Name:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="subject" placeholder="Subject" class="form-control" type="text" required="required">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Semester:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<select name="semester" id="" required="required">
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
						           	<select name="duration" id="" required="required">
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


					<!-- inserting into database -->
						<?php include("config.php"); ?>
						<?php 
						if (isset($_POST["submit"])) {

								$sql = "INSERT INTO subject (name, subject, semester, duration) VALUES('".$_POST["name"]."', '".$_POST["subject"]."','".$_POST["semester"]."','".$_POST["duration"]."')";
								if ($conn->query($sql)===TRUE) {
									echo "<script>alert('Successfully Subject Added');</script>";
								} else {
									echo "<script>alert('There was an error adding subject!');</script>";
									
								}
								$conn->close();

							} 
							
						 ?>

					<!-- inserting into database End-->
			</div>  <!-- col-md-9 -->
			<!-- Main Place work to be done -->
		</div> <!-- col-md-12 -->


		<?php include("footer.php"); ?>


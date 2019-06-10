<?php include("header.php"); ?>


<!-- retrive data from database to update for a specific user -->

<?php 
	$f_id = isset($_GET['f_id'])?$_GET['f_id']:"";
	
 ?>
					<?php include("config.php"); ?>
					<?php
							$sql="SELECT * FROM faculty WHERE f_id = $f_id ";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $f_id   = $row["f_id"];
							        $name 	= $row["name"];
							        $dob    = $row["dob"];
									
							    }
							}
							
							$conn->close();

					?>
<!-- retrive data from database to update for a specific user end -->


<!--Updating into database -->
						<?php include("config.php"); ?>
						<?php 
						if (isset($_POST["submit"])) {

								$sql = "UPDATE faculty SET name = '" .$_POST["name"]. "', dob='" .$_POST["dob"]."' WHERE f_id = $f_id";
								if ($conn->query($sql)===TRUE) {
									echo "<script>alert('Successfully Updated Faculty!');</script>";
								} else {
									echo "<script>alert('Error Updating Faculty!');</script>";
									
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
						        <label class="col-md-4 control-label">Faculty Name:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="name" placeholder="Faculty Name" class="form-control" type="text" required="required" value="<?php echo $name; ?>">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Date of Starting:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="dob" placeholder="Starting Date" class="form-control" type="date" value="<?php echo $dob; ?>">
						           </div>
						        </div>
     						 </div>
     					</div>


     					<div class="col-md-4">
     						 
     						 <div class="form-group">
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="submit" class="form-control" type="submit" value="Update Faculty" style="background-color:#3739d580;;color:#fff;">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<a href="entryFaculty.php"><input name="cancel" class="form-control" type="button" value="Cancel" style="background-color:#cf3f3f66;;color:#fff;"></a>
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


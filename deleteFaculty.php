<?php 
	session_start();  
?>
<?php 
if($_SESSION['admin'] == "" || $_SESSION['username'] == ""){
	header("location:index.php");
}
?>


<!-- retrive data from database to update for a specific user -->

<?php 
	$f_id = isset($_GET['f_id'])?$_GET['f_id']:"";
	
 ?>
					


					<!--Deleting from database -->
						<?php include("config.php"); ?>
						<?php 
							// if (isset($_POST["submit"])) {
								$sql = "DELETE FROM faculty WHERE f_id = $f_id";
								if ($conn->query($sql)===TRUE) {
									echo "<script>location.replace('viewFaculty.php');</script>";
								} else {
									echo "<script>alert('Error deleting user!');</script>";
									
								}
								$conn->close();

							// } 
							
						 ?>

					<!-- Deleting from database End-->



		
		
	
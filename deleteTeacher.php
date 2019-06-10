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
	$t_id = isset($_GET['t_id'])?$_GET['t_id']:"";
	
 ?>
					


					<!--Deleting from database -->
						<?php include("config.php"); ?>
						<?php 
							// if (isset($_POST["submit"])) {
								$sql = "DELETE FROM teacher WHERE t_id = $t_id";
								if ($conn->query($sql)===TRUE) {
									echo "<script>location.replace('viewTeacher.php');</script>";
								} else {
									echo "<script>alert('Error deleting Teacher!');</script>";
									
								}
								$conn->close();

							// } 
							
						 ?>

					<!-- Deleting from database End-->



		
		
	
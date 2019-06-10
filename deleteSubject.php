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
	$s_id = isset($_GET['s_id'])?$_GET['s_id']:"";
	
 ?>
					


					<!--Deleting from database -->
						<?php include("config.php"); ?>
						<?php 
							// if (isset($_POST["submit"])) {
								$sql = "DELETE FROM subject WHERE s_id = $s_id";
								if ($conn->query($sql)===TRUE) {
									echo "<script>location.replace('viewSubject.php');</script>";
								} else {
									echo "<script>alert('Error deleting Subject!');</script>";
									
								}
								$conn->close();

							// } 
							
						 ?>

					<!-- Deleting from database End-->



		
		
	
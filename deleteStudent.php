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
	$stdid = isset($_GET['stdid'])?$_GET['stdid']:"";
	
 ?>
					


					<!--Deleting from database -->
						<?php include("config.php"); ?>
						<?php 
							// if (isset($_POST["submit"])) {
								$sql = "DELETE FROM student WHERE stdid = $stdid";
								if ($conn->query($sql)===TRUE) {
									echo "<script>location.replace('viewStudent.php');</script>";
								} else {
									echo "<script>alert('Error deleting Student!');</script>";
									
								}
								$conn->close();

							// } 
							
						 ?>

					<!-- Deleting from database End-->



		
		
	
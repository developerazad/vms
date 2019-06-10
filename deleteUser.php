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
	$userid = isset($_GET['userid'])?$_GET['userid']:"";
	$username = isset($_GET['username'])?$_GET['username']:"";
 ?>
					


<!--Deleting into database -->
						<?php include("config.php"); ?>
						<?php 
							// if (isset($_POST["submit"])) {
								$sql = "DELETE FROM user WHERE userid = $userid";
								if ($conn->query($sql)===TRUE) {
									echo "<script>location.replace('viewUser.php');</script>";
								} else {
									echo "<script>alert('Error deleting user!');</script>";
									
								}
								$conn->close();

							// } 
							
						 ?>

					<!-- Deleting from database End-->



		
		
	
<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>University Management System</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="js/script.js"></script>
</head>
<body>
	<div class="container">
		
		<div class="login" style="margin-top:170px;">
		
			<div class="formstyle" >
					<h3 class="text-center" style="color: #fff;">Admin Login</h3>

			<div class="col-md-12">

				<div class="col-md-4"></div>
				<div class="col-md-4 border" style="background-color:#533C254D;;color: #fff;border: 1px solid honeydew;">
					<form method="post">
						
					  <div class="form-group">
					    <label for="exampleInputEmail1">Username</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="username" name="username" required="required">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name="password" required="required">
					  </div>

					  <button type="submit" class="btn btn-default" name="submit">Login</button> <br> <br>

					  

					  			<!-- login validation -->
					<?php 
							$_SESSION['admin']="";
					?>

					<?php include("config.php"); ?>
					<?php 
						if (isset($_POST["submit"])) {

								$sql= "SELECT * FROM user WHERE username= '" . $_POST["username"]."' AND password = '" . $_POST["password"]."' ";
								
								$result = $conn->query($sql);
											if ($result->num_rows > 0) {
													$_SESSION["email"]= $_POST["email"];
													$_SESSION["username"]= $_POST["username"];
													$_SESSION['admin']= "yes";
												    echo "<script>location.replace('home.php');</script>";
														
												} else {
												    echo "<span style='color:red;'>Invalid username or password</span>";
												}
								$conn->close();		
							}
							
		 			?>
		<!-- login validation End-->
					  
				</form><br>
				</div>
				<div class="col-md-4"></div>

			</div>
				
				<br>

			</div>
	
	
</div>
	
    <!-- footer section --> 
			<footer>
				
			</footer>

		<!-- footer section Ends--> 
	</div><!--  containerFluid Ends -->

<script src="js/bootstrap.min.js"></script>

	
</body>
</html>


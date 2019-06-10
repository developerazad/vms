<?php 
	session_start();  
?>
<?php 
if($_SESSION['admin'] == "" || $_SESSION['username'] == ""){
	header("location:index.php");
}
?>
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
	<div class="container background">
		
		<header style="margin-left: 264px;">
			<nav>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="#">Students</a>
					<ul>
						<li><a href="viewStudent.php">View Students</a></li>
						<li><a href="entryStudent.php">Entry Students</a></li>
					</ul>
				</li>

				<li><a href="#">Teachers</a>
					<ul>
						<li><a href="viewTeacher.php">View Teachers</a></li>
						<li><a href="entryTeacher.php">Entry Teachers</a></li>
					</ul>
				</li>
				<li><a href="#">Faculties</a>
					<ul>
						<li><a href="viewFaculty.php">View Faculties</a></li>
						<li><a href="entryFaculty.php">Entry Faculties</a></li>
					</ul>
				</li>
				<li><a href="#">Subjects</a>
					<ul>
						<li><a href="viewSubject.php">View Subjects</a></li>
						<li><a href="entrySubject.php">Entry Subjects</a></li>
					</ul>

				</li>
				<li><a href="#">Users</a>
					<ul>
						<li><a href="viewUser.php">View Users</a></li>
						<li><a href="entryUser.php">Entry Users</a></li>
					</ul>

				</li>
				<li><a href="LogOut.php">LogOut</a></li>
			</ul>
		</nav>
		</header>
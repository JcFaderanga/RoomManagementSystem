<?php
include("connections/connection.php");
require_once "PHPfunctions/searchInstructor.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="StyleSearch.css">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>My Self Introduction</title>
</head>   
<body>
	<div class="container">
		<div class="header">Room Management System</div>
		<nav>
			<ul>
				<li><a href="#">Search</a></li>
				<li><a href="rooms/roomDashboard.php">Rooms</a></li>
			</ul>
		</nav>
		<div class="content">
			<div class="content-title">
				Search
			</div>
			   <div class="radio-box-content">
				<a href="Instructor/addInstructor.php">Add Instructor here</a>
			</div> 
			<form action="" method="post">
				<div class="input-box">
					<div class="details">
						<div>
							<label>Instructor ID</label>
						</div>
						<input type="text" name="searchTermID" placeholder="9 Digit ID">
					</div>
					<span
					 style="color: rgb(0,0,0,.4);
					  font-weight: 600">OR</span>
					<div class="SearchFullName">
						<div class="details">
						    <div>
							    <label>First Name</label>
						    </div>
						<input type="text" name="searchTermFname" placeholder="Fisrtname">
					    </div>
					    <div class="details">
						    <div>
							    <label>Last Name</label>
						    </div>
						   <input type="text" name="searchTermLname" placeholder="Lastname">
					    </div>    	
					</div>
				</div>
				<div class="search-btn-box">
					<button name="searchButton" id="searchButton">Search</button>
				</div>
			</form>			
		</div><!-- end content div -->
		<div class="filter">
		    <?php echo $errorSearchResult; ?>
	    </div>
		<?php echo $instructorSearchResult; ?>
	</div>
</body>
</html>
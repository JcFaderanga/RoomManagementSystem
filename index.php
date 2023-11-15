<?php
include("connections/connection.php");
$searchResult1 = $searchResult = $errormsg ="";
if (isset($_POST['searchButton'])) {
    $searchTermID = $_POST['searchTermID'];
	$searchTermFname = $_POST['searchTermFname'];
	$searchTermLname = $_POST['searchTermLname'];

    // SQL query
    $sql = "SELECT
		instructor.instructor_id,
		instructor.firstname,
		instructor.lastname,
		instructor_startend_date.startDate,
		instructor_startend_date.endDate
    FROM
        instructor
    INNER JOIN
        instructor_startend_date 
	ON
	    instructor.instructor_id = instructor_startend_date.instructorDate_id
    WHERE
        instructor.instructor_id = '$searchTermID'
	OR
	    instructor.firstname = '$searchTermFname'
	OR
	    instructor.lastname = '$searchTermLname'
	";

    $result = $connections->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
			$searchResult .='
				<div class="Table-container">
					<table id="table">
				        <tr id="firstTr">
							<td></td>
							<td>Instructor ID</td>
							<td>Fisrtname</td>
							<td>Lastname</td>
							<td>Start date</td>
							<td>End date</td>
							<td></td>
				        </tr>';
            while ($row = $result->fetch_assoc()) {
				$searchResult .='
						<tr>
							<td><div class="div-bx-chevron-right"><i class="bx bx-chevron-right"></div></i></td>
							<td>'.$row["instructor_id"].'</td>
							<td>'.$row["firstname"].'</td>
							<td>'.$row["lastname"].'</td>
							<td>'.$row["startDate"].'</td>
							<td>'.$row["endDate"].'</td>
							<td>'."<div class='btn-div'><button class='btn-tbl'><a href='Instructor/instructorProfile.php?id=".$row['instructor_id']."'>select</a></button></div>".'</td>
						</tr>'; 
					echo '</table>';
				echo '</div>';	
            }
        } else {
			$errormsg .='
				<div class="error-msg">
					No results found.
				</div>'; 
			}
    } else {
        echo 'Error: ' . $connections->error;
     }
}
$connections->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styleSearch.css">
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
				<li><a href="rooms/roomDashboard.html">Rooms</a></li>
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
		<?php
			echo $errormsg;
		?>
	</div>
			<?php
			echo $searchResult;
			?>
			
	</div>
</body>
</html>
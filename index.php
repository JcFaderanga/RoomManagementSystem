<?php
include("connections/connection.php");
$searchResult1 = $searchResult ="";
if (isset($_POST['searchButton'])) {
    $searchTermID = $_POST['searchTermID'];


    // SQL query
    $sql = "SELECT * FROM instructor WHERE instructor_id LIKE '%$searchTermID%'
	 ";

    // Execute the query
    $result = $connections->query($sql);

    if ($result) {
        // Check if there are any results
        if ($result->num_rows > 0) {
			$searchResult1 .= `
				`;
            while ($row = $result->fetch_assoc()) {
				$searchResult .='
				<tr id="firstTr">
					<td></td>
					<td>Instructor ID</td>
					<td>Fisrtname</td>
					<td>Lastname</td>
					<td>Start date</td>
					<td>End date</td>
					<td>Status</td>
					<td></td>
				</tr>
				<tr>
				  <td><i class="bx bx-chevron-right"></i></td>
				  <td>'.$row["instructor_id"].'</td>
				  <td>'.$row["firstname"].'</td>
				  <td>'.$row["lastname"].'</td>

				</tr>'; 
				
            }
			echo $searchResult;
        } else {
            echo 'No results found.';
        }
    } else {
        echo 'Error: ' . $connections->error;
    }
}

// Close the database connection
$connections->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styleindex.css">
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
				<li><a href="#">Rooms</a></li>
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
						<input type="text" name="" placeholder="Fisrtname">
					    </div>
					    <div class="details">
						    <div>
							    <label>Last Name</label>
						    </div>
						   <input type="text" name="" placeholder="Lastname">
					    </div>    	
					</div>
				</div>
				<div class="search-btn-box">
					<button name="searchButton" id="searchButton">Search</button>
				</div>
			</form>			
		</div><!-- end content div -->
	<div class="filter"></div>
		<div class="Table-container">
			<table>
				<?php
				echo $searchResult1;
				echo $searchResult;
				?>
			</table>
		</div>
	</div>
</body>
</html>
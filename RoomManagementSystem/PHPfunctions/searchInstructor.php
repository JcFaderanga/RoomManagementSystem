<?php

include("connections/connection.php");
$searchResult1 = $searchResult = $errormsg = $errorSearchResult = $instructorSearchResult ="";
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
			$instructorSearchResult = $searchResult;
        } else {
			$errormsg .='
				<div class="error-msg">
					No results found.
				</div>'; 
			}
			$errorSearchResult = $errormsg;
    } else {
        echo 'Error: ' . $connections->error;
     }
}
$connections->close();
?>
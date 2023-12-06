<?php
 include("../connections/connection.php");
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){

    // Prepare a select statement
    $sql = 
"SELECT
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
    instructor.instructor_id = ?";
    
    if($stmt = mysqli_prepare($connections, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $instructor_id = $row["instructor_id"];
                $firstname =["firstname"];
                $lastname =["lastname"];
                $startDate =["startDate"];
                $endDate =["endDate"];

                
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
  
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");

}
$Strand = $sub =  $startTime=  $endTime= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedStrand = $_POST["strandDropdown"];
    $selectedSubject = $_POST["subjectDropdown"];
    $startTime = $_POST["startTime"];
    $endTime = $_POST["endTime"];

    if (isset($_POST["strandDropdown"])) {
        if ($selectedStrand === "Strand") {
            $Strand = "Na";
        } else if ($selectedStrand === "STEM") {
            $Strand = "SC99000STEM";
        } else if ($selectedStrand === "ADAS") {
            $Strand = "SC99000ADAS";
        } else if ($selectedStrand === "ABM") {
            $Strand = "SC99000ABM";
        } else if ($selectedStrand === "GAS") {
            $Strand = "SC99000GAS";
        } else if ($selectedStrand === "ICT") {
            $Strand = "SC99000ICT";
        } else if ($selectedStrand === "HE") {
            $Strand = "SC99000HE";
        }
    if ($selectedSubject === "oralCommunication") {
            $sub = "Oral Communication";
        } elseif ($selectedSubject === "komunikasyon") {
            $sub = "Komunikasyon";
        } elseif ($selectedSubject === "generalMath") {
            $sub = "General Mathematics";
        } elseif ($selectedSubject === "earthScience") {
            $sub = "Earth Science";
        } elseif ($selectedSubject === "philosophy") {
            $sub = "Philosophy";
        } elseif ($selectedSubject === "peh1") {
            $sub = "PEH1";
        } elseif ($selectedSubject === "empowermentTech") {
            $sub = "Empowerment Technologies";
        } elseif ($selectedSubject === "genChem1") {
            $sub = "General Chemistry 1";
        } elseif ($selectedSubject === "genBio1") {
            $sub = "General Biology 1";
        } elseif ($selectedSubject === "rhgp") {
            $sub = "RHGP";
        }

        $query = mysqli_query($connections, "INSERT INTO instructor_subject (instructor_id, strand,subject_code,StartTime,EndTime) VALUES ('$instructor_id','$Strand','$sub','$startTime','$endTime')");

        if ($query) {
            
        } else {
            echo "Error: " . mysqli_error($connections);
        }
    }
}
$instructorSearchResult = $res ="";

// Fetch instructor subjects
$query_subjects = mysqli_query($connections,
 "SELECT * FROM instructor_subject WHERE instructor_id = '$instructor_id'
 ");
if ($query_subjects) {
    // Generate table rows dynamically
    while ($subject_row = mysqli_fetch_assoc($query_subjects)) {
        $instructorSearchResult .= "<tr>";
        $instructorSearchResult .= "<td>{$subject_row['subject_code']}</td>";
        $instructorSearchResult .= "<td>{$subject_row['strand']}</td>";
        $instructorSearchResult .= "<td>{$subject_row['StartTime']}</td>";
        $instructorSearchResult .= "<td>{$subject_row['EndTime']}</td>";
        $instructorSearchResult .= "</tr>";
    }
    $instructorSearchResult;
} else {
    echo "Error: " . mysqli_error($connections);
}
$strandHandled = "";
$query_strand = mysqli_query($connections, "SELECT strand_name FROM strands WHERE strand_code = '$instructor_id'");
if ($query_strand) {
    // Generate table rows dynamically
    while ($strand_row = mysqli_fetch_assoc($query_strand)) {
        $strandHandled .= "<tr>";
        $strandHandled .= "<td>{$strand_row['strand_name']}</td>";
        $strandHandled .= "</tr>";
    }
    $strandHandled;
} else {
    echo "Error: " . mysqli_error($connections);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="InstructorProfile.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">Room Management System</div>
                <nav>
                    <ul>
                        <li><a href="../index.php">Search</a></li>
                        <li><a href="../rooms/roomDashboard.php">Rooms</a></li>
                    </ul>
                </nav>
            <div class="inner-container">
            <div class="leftSide">
                <div class="profile">
                    <div class="name-box">
                        <span class="name-title"><?php echo $row["firstname"];echo " " ;echo $row["lastname"]; ?></span>
                    </div>
                        <div class="profile-info">
                            <div class="info-box">
                                    <div class="details">
                                        <label>Instructor ID</label>
                                        <?php echo $row["instructor_id"]; ?>
                                    </div>
                                    <div class="details">
                                        <label>Started date effective</label>
                                        <?php echo $row["startDate"]; ?>
                                    </div>
                                    <div class="details">
                                        <label>End date effective</label>
                                        <?php echo $row["endDate"]; ?>
                                    </div>
                            </div>
                        </div>      
                </div>
                <div class="left">
                            <div class="upper-left">

                            </div>
                            <div class="subject-list">
                        <table>
                            <tr id="firstTr">
                                <td>Subject Code</td>
                                <td>Strand</td>
                                <td>Start Time</td>
                                <td>End Time</td>
				        </tr>

                            </thead>
                            <tbody>
                                <?php echo $strandHandled; ?>
                            </tbody>
                        </table>

                            </div>
                        </div>
            </div>
                <div class="right">
                    <div class="upper-right">
                        <div class="add_sub">
                    <form action="" method="post">
                <div class="input-box-instructor">
                <button class="filter_logo" id="filter" name="addSub">Add subject</button>
                <div class="details">
                        <select id="strandDropdown" name="strandDropdown">
                            <option value="">Strand</option> 
                            <option value="STEM">STEM</option>
                            <option value="ADAS">ADAS</option>
                            <option value="ABM">ABM</option>
                            <option value="GAS">GAS</option>
                            <option value="ICT">ICT</option>
                            <option value="ICT">HE</option>
                            
                        </select>
                    </div>
                    <div class="details">
                        <select id="subjectDropdown" name="subjectDropdown">
                            <option value="">Add sub</option>
                            <option value="oralCommunication">Oral Communication</option>
                            <option value="komunikasyon">Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</option>
                            <option value="generalMath">General Mathematics</option>
                            <option value="earthScience">Earth Science</option>
                            <option value="philosophy">Introduction to the Philosophy of the Human Person</option>
                            <option value="peh1">Physical Education and Health 1</option>
                            <option value="empowermentTech">Empowerment Technologies</option>
                            <option value="genChem1">General Chemistry 1</option>
                            <option value="genBio1">General Biology 1</option>
                            <option value="rhgp">RHGP</option>
                             Add more options as needed 
                        </select>
                    </div>
                    <div class="details">
                        <input type="time" name="startTime" >
                    </div>  
                    <div class="details">
                        <input type="time" name="endTime" >
                    </div>  
                </div>
   
            </form>
                        </div>
                      
                    </div>
                    <div class="table-box">
                        <div class="filters">

                        </div>
                        <table>
                            <tr id="firstTr">
							<td>Subject Code</td>
							<td>Strand</td>
							<td>Start Time</td>
							<td>End Time</td>
				        </tr>

                            </thead>
                            <tbody>
                                <?php echo $instructorSearchResult; ?>
                            </tbody>
                        </table>
                       
                    </div>
                </div>
            </div>
            
    </div>
</body>
</html>
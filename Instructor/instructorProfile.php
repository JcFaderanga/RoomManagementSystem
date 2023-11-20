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
                $id = $row["instructor_id"];
                $firstname =["firstname"];
                $lastname =["lastname"];
                $startDate =["startDate"];
                $endDate =["endDate"];

                
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($connections);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="instructorProfile.css">
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
            <div class="content">
                <div class="left">
                    <div class="upper-left">

                    </div>
                    <div class="subject-list">

                    </div>
                </div>
                <div class="right">
                    <div class="table-box">
                        <div class="filters">

                        </div>
                        <table>

                        </table>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>
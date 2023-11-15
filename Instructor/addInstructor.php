<?php
include("../connections/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="StyleInstructor.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">Room Management System</div>
            <nav>
                <ul>
                    <li><a href="../index.php">Search</a></li>
                    <li><a href="#">Rooms</a></li>
                </ul>
            </nav>
        <div class="addInstructor">        	
            <form action="../PHPfunctions/saveInstructor.php" method="post">
                <div class="input-box-instructor">
                    <div class="details">
                            <div>
                                <label for="firstname">Firstname:</label>
                            </div>
                        <input type="text" name="firstname" placeholder="Fisrtname">
                    </div>
                    <div class="details">
                            <div>
                                <label for="lastname">Lastname:</label>
                            </div>
                        <input type="text" name="lastname" placeholder="Lastname">
                    </div>   
                    <div class="details">
                            <div>
                                <label for="start">Start date:</label>
                            </div>
                        <input type="date" name="startDate" placeholder="Lastname">
                    </div>  
                    <div class="details">
                            <div>
                                <label for="end">End date:</label>
                            </div>
                        <input type="date" name="endDate" placeholder="Lastname">
                    </div>  
                </div>
                <div class="search-btn-box-instructor">
					<button>Save</button>
				</div>      
            </form>
        </div>
    </div>
</body>
</html>
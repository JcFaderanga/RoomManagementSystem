<?php include("../connections/connection.php"); require_once "../PHPfunctions/rooms.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="roomstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Room Management System</title>
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
        <form action="" method="post">
            <div class="filter">
                <div class="filter-details">
                    <button class="filter_logo" id="filter" name="filter">Show Filters<i class='bx bxs-filter-alt'></i></button>
                    <div class="details">
                        <select id="strandDropdown" name="strandDropdown">
                            <option value="">Strand</option>
                            <option value="STEM">STEM</option>
                            <option value="ADAS">ADAS</option>
                            <option value="ABM">ABM</option>
                            <option value="GAS">GAS</option>
                            <option value="ICT">ICT</option>
                            <option value="HE">HE</option>
                        </select>
                    </div>
                    <div class="details">
                        <select id="gradeDropdown" name="gradeDropdown">
                            <option value="">Grade level</option>
                            <option value="Grade 11">Grade 11</option>
                            <option value="Grade 12">Grade 12</option>
                        </select>
                    </div>
                    <div class="details">
                        <select id="floorLocationDropdown" name="floorLocationDropdown">
                            <option value=""><?php echo $floor; ?></option>
                            <option value="1">Floor 1</option>
                            <option value="2">Floor 2</option>
                            <option value="3">Floor 3</option>
                            <option value="4">Floor 4</option>
                            <option value="5">Floor 5</option>
                        </select>
                    </div>
                    <div class="details">
                        <select id="availabilityDropdown" name="availabilityDropdown">
                            <option value="">Availability</option>
                            <option value="Available">Available</option>
                            <option value="Occupied">Occupied</option>
                        </select>
                    </div>
                </div>
                <div class="filter-details"></div>
                <div class="filter-details">
                
                <div class="details">
                            <div>
                              
                            </div>
                        <input type="time" name="startDate" placeholder="Lastname">
                    </div>  
                    <div class="details">
                            <div>
                        
                            </div>
                            
                    </div> 
                    <div class="details">
                            <div>
                             
                            </div>
                        <input type="time" name="endDate" placeholder="Lastname">
                    </div>  


                </div>

            </div>
        </form>
        <?php
        
         echo $searchResult . $errormsg; ?>
    </div>
</body>
</html>

<?php
include("../connections/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleinstructor.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">Room Management System</div>
            <nav>
                <ul>
                    <li><a href="../index.php">Search</a></li>
                    <li><a href="rooms/roomDashboard.php">Rooms</a></li>
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
    <!--  <div class="selectStrand">        	
        <form action="" method="post">
                    <div class="Starnd-Gradelvl">
                    <div class="details">
                            <div>
                                <label for="courseDropdown">Select Strand</label>
                            </div>
                        <select id="courseDropdown" name="strandDropdown">
                            <option value="">-- NONE --</option>
                            <option value="STEM">STEM</option>
                            <option value="ADAS">ADAS</option>
                            <option value="ABM">ABM</option>
                            <option value="GAS">GAS</option>
                            <option value="ICT">ICT</option>
                            <option value="ICT">HE</option>
                             Add more options as needed 
                        </select>
                    </div>
                    <div class="details">
                            <div>
                                <label for="gradeDropdown">Set Grade</label>
                            </div>
                        <select id="gradeDropdown" name="gradeDropdown">
                            <option value="">-- NONE --</option>
                            <option value="GRADE 11">GRADE 11</option>
                            <option value="GRADE 12">GRADE 12</option>
                             Add more options as needed 
                        </select>
                    </div>
                    </div>    
            </form>
        </div>
        <div class="addSubject">        	
            <form action="" method="post">
                <div class="input-box-instructor">
                    <div class="details">
                        <div>
                            <label for="subjectDropdown">Select Subject</label>
                        </div>
                        <select id="subjectDropdown" name="subjectDropdown">
                            <option value="">-- NONE --</option>
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
                            <div>
                                <label for="start">Class Start:</label>
                            </div>
                        <input type="time" name="startDate" placeholder="Lastname">
                    </div>  
                    <div class="details">
                            <div>
                                <label for="end">Class End:</label>
                            </div>
                        <input type="time" name="endDate" placeholder="Lastname">
                    </div>  
                </div>
                <div class="search-btn-box-instructor">
					<button>Save</button>
				</div>      
            </form>
        </div>-->
    </div>
</body>
</html>
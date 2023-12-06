
<?php
include("../connections/connection.php");
 $floorLoc = $Strand = $GradeLvl = $Availability ="" ;
 $floor= "Floor";
 if (isset($_POST["filter"])) {
    $selectedStrand = $_POST["strandDropdown"];
    $selectedGrade = $_POST["gradeDropdown"]; 
    $selectedFloor = $_POST["floorLocationDropdown"]; 
    $selectedAvailability = $_POST["availabilityDropdown"]; 
    
//SELECT STRAND
    if (isset($_POST["strandDropdown"])) {
        if ($selectedStrand === "Strand") {
            $Strand ="Na";
        
          }
       else if ($selectedStrand === "STEM") {
          $Strand ="SC99000STEM";
      
        }
        else if ($selectedStrand === "ADAS") {
          $Strand ="SC99000ADAS";
  
        }
        else if ($selectedStrand === "ABM") {
          $Strand ="SC99000ABM";
      
        }
        else if ($selectedStrand === "GAS") {
          $Strand ="SC99000GAS";
       
        }
        else if ($selectedStrand === "ICT") {
            $Strand ="SC99000ICT";
       
          }
        else if ($selectedStrand === "HE") {
            $Strand ="SC99000HE";
       
          }
      } 
//GRADE LEVEL
if (isset($_POST["gradeDropdown"])) {
    if ($selectedGrade === "Grade 11") {
      $GradeLvl ="11";
   
    }
    else if ($selectedGrade === "Grade 12") {
      $GradeLvl ="12";
      
    }
  } 
    
//SELECT FLOOR
  if (isset($_POST["floorLocationDropdown"])) {
    if ($selectedFloor === "Floor") {
        $floorLoc ="Na";
        $floor = "Floor";
      }
    else if ($selectedFloor === "1") {
      $floorLoc ="1";
      $floor = "Floor 1";
    }
    else if ($selectedFloor === "2") {
      $floorLoc ="2";
      $floor = "Floor 2";
    }
    else if ($selectedFloor === "3") {
      $floorLoc ="3";
      $floor = "Floor 3";
    }
    else if ($selectedFloor === "4") {
      $floorLoc ="4";
      $floor = "Floor 4";
    }
  } 
  //Availability
if (isset($_POST["availabilityDropdown"])) {
    if ($selectedAvailability === "Availability") {
        $Availability ="Na";
      }
    else if ($selectedAvailability === "Available") {
      $Availability ="0";
    }
    else if ($selectedAvailability === "Occupied") {
      $Availability ="1";
      
    }
    
  } 
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styleroom.css">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        <form action="" method="post">
            <div class="filter">
                <div class="filter-details">
                  <button class="filter_logo" id="filter" name="filter">Show Filters<i class='bx bxs-filter-alt' ></i></button>
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
                            <option value=""><?php echo $floor;?></option>
                                <option value="1">Floor 1</option>
                                <option value="2">Floor 2</option>
                                <option value="3">Floor 3</option>
                                <option value="4">Floor 4</option>
                                <option value="5">Floor 5</option>
                            </select>
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

              <div class="search-box">
                <i class='bx bx-search-alt-2' ></i>
                <input class="search-inputbox" type="text"></input>
              </div>
	       </div>
           </form> 
            <?php 
            include("../connections/connection.php");
             $sqldefault =  "SELECT 
             strands.strand_name,
             room_status.status,
             room_floors.floor_number,
             strand_room_details.room_number
              FROM 
             strand_room_details
             INNER JOIN
             strands ON strands.strand_code = strand_room_details.strand_code_ID
             INNER JOIN
             room_status ON room_status.status_ID = strand_room_details.room_status_ID
             INNER JOIN
             room_floors ON room_floors.floor_ID = strand_room_details.room_floor_ID  
           
            WHERE strand_room_details.strand_code_ID = '$Strand' 
            AND strand_room_details.room_floor_ID = '$floorLoc'
            AND strand_room_details.room_status_ID = '$Availability'
              ";
 // WHERE strand_room_details.room_floor_ID   = '$floorLoc'
             $sql = $sqldefault;
            
    
    $searchResult =$errormsg= $tableResult="";
    
    $result = $connections->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
			$searchResult .='
				<div class="Table-container">
					<table id="table">
				        <tr id="firstTr">
							<td id=firstCell></td>
                            <td>Strand</td>
							<td>Room #</td>
							<td>Status</td>
							<td>Floor location</td>
				        </tr>';
            while ($row = $result->fetch_assoc()) {
				$searchResult .='
						<tr>
							<td><div class="div-bx-chevron-right"><i class="bx bx-chevron-right"></div></i></td>
							<td>'.$row["strand_name"].'</td>
                            <td>'.$row["room_number"].'</td>
                            <td>'.$row["status"].'</td>
                            <td>'.$row["floor_number"].'</td>
						</tr>'; 
					echo '</table>';
				echo '</div>';	
            }
            echo $searchResult;
        } else {
			$errormsg .='
				<div class="error-msg">
					No results found.
				</div>'; 
			}
    } else {
        echo 'Error: ' . $connections->error;
     }

$connections->close();
            ?>
    </div>
</body>
</html>
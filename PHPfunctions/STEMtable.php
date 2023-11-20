<?php
include("../connections/connection.php");
    $sql = 
    "SELECT
    stem.room_number,
    stem.room_floor_ID,
    stem.room_status_ID,
    strands.strand_name,
    room_floors.floor_number,
    room_status.status
    FROM stem
    INNER JOIN strands ON stem.strand_code_ID = strands.strand_code
    INNER JOIN room_status ON stem.room_status_ID = room_status.status_ID
    INNER JOIN room_floors ON stem.room_floor_ID = room_floors.floor_ID";
    
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
            $tableResult = $searchResult;
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
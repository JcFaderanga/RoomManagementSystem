<?php
include("../connections/connection.php");

$floorLoc = $Strand = $GradeLvl = $Availability = "";
$floor = "Floor";

if (isset($_POST["filter"])) {
    $selectedStrand = $_POST["strandDropdown"];
    $selectedGrade = $_POST["gradeDropdown"];
    $selectedFloor = $_POST["floorLocationDropdown"];
    $selectedAvailability = $_POST["availabilityDropdown"];

    // SELECT STRAND
    $strandMappings = [
        "Strand" => "Na",
        "STEM" => "SC99000STEM",
        "ADAS" => "SC99000ADAS",
        "ABM" => "SC99000ABM",
        "GAS" => "SC99000GAS",
        "ICT" => "SC99000ICT",
        "HE" => "SC99000HE",
    ];
    $Strand = isset($strandMappings[$selectedStrand]) ? $strandMappings[$selectedStrand] : "";

    // GRADE LEVEL
    $GradeLvl = ($selectedGrade === "Grade 11" || $selectedGrade === "Grade 12") ? substr($selectedGrade, -2) : "";

    // SELECT FLOOR
    $floorLoc = ($selectedFloor === "Floor") ? "Na" : $selectedFloor;
    $floor = ($selectedFloor === "Floor") ? "Floor" : "Floor " . $selectedFloor;

    // AVAILABILITY
    $availabilityMappings = [
        "Availability" => "Na",
        "Available" => "0",
        "Occupied" => "1",
    ];
    $Availability = isset($availabilityMappings[$selectedAvailability]) ? $availabilityMappings[$selectedAvailability] : "";
}

$sql = "SELECT 
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
        INNER JOIN
            grade_level ON grade_level.grade_level_ID = strand_room_details.grade_lvl_ID
        WHERE 
            1=1";
if ($Strand !== "") {
    $sql .= " AND strand_room_details.strand_code_ID = '$Strand'";
}
if ($GradeLvl !== "") {
    $sql .= " AND strand_room_details.grade_lvl_ID = '$GradeLvl'";
}
if ($floorLoc !== "") {
    $sql .= " AND strand_room_details.room_floor_ID = '$floorLoc'";
}
if ($Availability !== "") {
    $sql .= " AND strand_room_details.room_status_ID = '$Availability'";
}

$result = $connections->query($sql);

$searchResult = $errormsg = "";

if ($result) {
    if ($result->num_rows > 0) {
        $searchResult .= '
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
            $searchResult .= '
                    <tr>
                        <td><div class="div-bx-chevron-right"><i class="bx bx-chevron-right"></div></i></td>
                        <td>' . $row["strand_name"] . '</td>
                        <td>' . $row["room_number"] . '</td>
                        <td>' . $row["status"] . '</td>
                        <td>' . $row["floor_number"] . '</td>
                    </tr>';
        }
        $searchResult .= '</table></div>';
    } else {
        $errormsg .= '<div class="error-msg">No results found.</div>';
    }
} else {
    $errormsg .= '<div class="error-msg">Error: ' . $connections->error . '</div>';
}

$connections->close();
?>
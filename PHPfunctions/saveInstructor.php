<?php 
include("../connections/connection.php");
$firstname = $lastname = $startDate =$endDate="";
	
if($_SERVER["REQUEST_METHOD"]=="POST"){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
}
if($firstname && $lastname){
  $query = mysqli_query($connections, "INSERT INTO instructor(firstname,lastname) VALUES ('$firstname', '$lastname')");
}
if($startDate && $endDate){
$query = mysqli_query($connections, "INSERT INTO instructor_StartEnd_date(startDate,endDate) VALUES ('$startDate','$endDate')");
}

header("location: ../index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="StyleRoom.css">
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
            <div class="filter">
              <div class="filter_logo">Show Filters<i class='bx bxs-filter-alt' ></i></div>
              <div class="search-box">
                <i class='bx bx-search-alt-2' ></i>
                <input class="search-inputbox" type="text"></input>
              </div>
	       </div> 
            <?php 
            include("../connections/connection.php");
            require_once "../PHPfunctions/STEMtable.php";
            echo $tableResult;
            ?>
    </div>
</body>
</html>
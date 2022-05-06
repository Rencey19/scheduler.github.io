<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Supermercado+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    
</head>
<header>
    <div id="main">
        <div class="logo"></div>
        <nav>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="schedule.html">Class schedule</a></li>
                <li><a href="logout.php">Logout</a>
            </ul>
        </nav>
        <body class="section">
            <h1><img src="lyceum.png" align="left" height="15%" width="25%"></h1>
            <br><br><br>
            <div class="text"> 
                <br><br><br><h2> Hello, <?php echo $user_data['user_name']; ?></h2>
                <h1>Class Timetable</h1>
                <p> Class timetable ensures that all the subjects get equal amount of time so that students can learn effectively. The time table is set in such a way that students can study different subjects without getting bored. Class time table can Add, Edit, Delete and Save.</p>
                <table> 
                <tr>
                </tr>
</body>
</html>
<?php include("connection.php");
error_reporting(0); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Flights</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div>
        <div class="navcontainer">
        <nav>
            <a class="active" href="#home">Home</a>
            <a href="#contact">Contact</a>
            <a href="#service">Services</a>
            <a href="#about">Help</a>
            <i class='bx bx-user-circle' style='color:#fbf9f9'  ></i>
            <a href="#login" class="log">LogIn/SignUp </a>
        </nav>
    </div>
    <div class="box">
        <p>AVAILABLE FLIGHTS</p>
        <div class="sbox">
            <div class="transbox">
               <p> INDIGO FLIGHTS</p>
            </div>
            <div class="trabox">
               <p> SPICE JET</p>
            </div>
        
        </div>
    </div>
    </div>
</body>
</html>

<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$passwowrd = "";
$dbname = "telaverge";


$con = mysqli_connect($servername, $username, $password, $dbname);

if($con)
{
    //   echo "successfully connected";
}
else{
    echo "connection failed".mysqli_connect_error();
}
?>
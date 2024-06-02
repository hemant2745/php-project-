<?php
echo "Welcome to a stage were we are ready to get connected to a database ";
// way to connet to a data base
// // mysqli extension
// // PDO 
$servername ="localhost";
$username ="root";
$password="";


$conn = mysqli_connect($servername, $username , $password);

if(!$conn){
    die("sorry we failed to connect: ". mysqli_connect_error());
}else{
    echo "Connection was successful";
}


?>
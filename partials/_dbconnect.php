<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $database="dharam";

    $conn=mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("Through an error" . mysqli_error());
    }
?> 
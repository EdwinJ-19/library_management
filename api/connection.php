<?php

$connect = new mysqli("localhost","root","","library_system");

if($connect == false){
    die("Error: " .mysqli_connect_errno() ."". mysqli_connect_error());
}else{
    echo "Connected";
}
?>
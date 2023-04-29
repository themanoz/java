<?php
$servername="127.0.0.1";
$username="root";
$password="gowrish123";
$dbname="hci";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    // echo "connected";
}
else{
    // echo"not connected";
}
?>
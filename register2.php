<?php
$servername="localhost:3309";
$username="root";
$password="";
$dbname="hci";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn){
  // echo "CONNECTED";
  

}
else{
   // echo "NOT CONNECTED";
}



?>
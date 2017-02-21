<?php
//this page will first take the registration id, and then will display name age and plan details 
//html table is created with the button 

//connection to the database
$servername="52.77.217.188";
$username="root";
$password="euorsecure@1234";
$dbname="euor_newdb"; 
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection 
if($conn->connect_error){
    die("Connection Failed:".$conn->connect_error);
}
echo "Database Connected Successfully";
$useridval=$_POST["userid"];

$sql= "select * from register_user_details";
$row = mysqli_fetch_assoc($sql);
echo $sql;

print $row;
//ehco "test4";
//calculate the age
//if block implement lic plan with age 
?>
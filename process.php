<?php
//include database connection file

include 'db.php';

//check form is submitted or not

if($_SERVER["REQUEST_METHOD"] == 'POST'){

// get data from form

$PlayerName = $_POST['username'];
$Email = $_POST['email'];
$GameName = $_POST['game'];
$TeamName = $_POST['teamname'];
$SkillLevel = $_POST['skill'];
$EntryFee = $_POST['fee'];
$PaymentStatus = $_POST['status'];
$RegistrationDate = $_POST['date'];

// create sql query to insert data into database

$sql = "INSERT INTO Players(PlayerName,Email,GameName,TeamName,SkillLevel,EntryFee,PaymentStatus,RegistrationDate ) VALUES ('$PlayerName','$Email','$GameName','$TeamName','$SkillLevel','$EntryFee','$PaymentStatus','$RegistrationDate' )";

// Database execution
if(mysqli_query($conn, $sql)){
    echo "Data inserted successfully";
}
else{
    echo"Error: " . mysqli_error($conn);
}

}
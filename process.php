<?php
include("db.php");

$name = $_POST['username'];
$email = $_POST['email'];
$game = $_POST['game'];
$team = $_POST['teamname'];
$skill = $_POST['skill'];
$fee = $_POST['fee'];
$status = $_POST['status'];
$date = $_POST['date'];

$sql = "INSERT INTO Players 
(PlayerName, Email, GameName, TeamName, SkillLevel, EntryFee, PaymentStatus, RegistrationDate)
VALUES 
('$name','$email','$game','$team','$skill','$fee','$status','$date')";

if(mysqli_query($conn, $sql)){
    header("Location: index.php");
} else {
    echo mysqli_error($conn);
}
?>
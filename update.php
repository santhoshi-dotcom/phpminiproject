<?php
include 'db.php';

$id = $_POST['id'];

$sql = "UPDATE Players SET 
PlayerName='{$_POST['username']}',
Email='{$_POST['email']}',
GameName='{$_POST['game']}',
TeamName='{$_POST['teamname']}',
SkillLevel='{$_POST['skill']}',
EntryFee='{$_POST['fee']}',
PaymentStatus='{$_POST['status']}',
RegistrationDate='{$_POST['date']}'
WHERE id=$id";

if(mysqli_query($conn,$sql)){
    header("Location: index.php");
} else {
    echo mysqli_error($conn);
}
?>
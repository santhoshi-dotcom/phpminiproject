<?php
include 'db.php';

// INSERT DATA
if(isset($_POST['submit'])){
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

    mysqli_query($conn, $sql);
}

// FETCH DATA
$result = mysqli_query($conn, "SELECT * FROM Players");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Gaming Tournament Registration</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: url('https://images.unsplash.com/photo-1542751371-adc38448a05e') no-repeat center center/cover;
}

/* FORM CONTAINER */
.container {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(12px);
    padding: 30px;
    border-radius: 15px;
    width: 400px;
    margin: 40px auto;
    box-shadow: 0 8px 32px rgba(0,0,0,0.3);
    color: #fff;
}

.title {
    text-align: center;
    font-size: 22px;
    font-weight: bold;
}

.highlight {
    text-align: center;
    margin-bottom: 20px;
    font-weight: 600;
    font-size: 22px;
    background: linear-gradient(45deg, #0066ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

input, select {
    width: 100%;
    padding: 12px;
    margin-bottom: 12px;
    border-radius: 10px;
    border: none;
    outline: none;
}

/* MAIN BUTTON */
.btn {
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 12px;
    background: linear-gradient(135deg , #0072ff);
    color: white;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s ease;
    box-shadow: 0 5px 15px rgba(0, 114, 255, 0.5);
}

.btn:hover {
    transform: translateY(-3px) scale(1.03);
    box-shadow: 0 8px 25px rgba(0, 114, 255, 0.8);
}

/* TABLE */
.table-title {
    text-align: center;
    color: white;
    margin-top: 20px;
}

table {
    width: 90%;
    margin: 20px auto;
    border-collapse: collapse;
    color: white;
    background: rgba(0,0,0,0.6);
    border-radius: 10px;
    overflow: hidden;
}

th, td {
    padding: 12px;
    border: 1px solid #00f2ff;
    text-align: center;
}

th {
    background: #0066ff;
}

tr:hover {
    background: rgba(0, 242, 255, 0.2);
    transition: 0.3s;
}

/* ACTION BUTTONS */
.edit-btn {
    padding: 6px 12px;
    border-radius: 8px;
    background: linear-gradient(45deg, #ffb347, #ffcc33);
    color: black;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
}

.edit-btn:hover {
    transform: scale(1.1);
    box-shadow: 0 0 10px #ffcc33;
}

.delete-btn {
    padding: 6px 12px;
    border-radius: 8px;
    background: linear-gradient(45deg, #ff416c, #ff4b2b);
    color: white;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
}

.delete-btn:hover {
    transform: scale(1.1);
    box-shadow: 0 0 10px #ff4b2b;
}
</style>
</head>

<body>

<div class="container">
    <div class="title">🎮 Gaming Tournament</div>
    <h2 class="highlight">Register Now</h2>

    <form method="POST">

        <input type="text" name="username" placeholder="Player Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="game" placeholder="Game Name" required>
        <input type="text" name="teamname" placeholder="Team Name">

        <select name="skill">
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="pro">Pro</option>
        </select>

        <input type="number" name="fee" placeholder="Entry Fee" required>

        <select name="status">
            <option value="paid">Paid</option>
            <option value="pending">Pending</option>
        </select>

        <input type="date" name="date" required>

        <button type="submit" name="submit" class="btn">Submit</button>
    </form>
</div>

<h2 class="table-title">Players List</h2>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Game</th>
    <th>Team</th>
    <th>Skill</th>
    <th>Fee</th>
    <th>Status</th>
    <th>Date</th>
    <th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['PlayerName']; ?></td>
    <td><?= $row['Email']; ?></td>
    <td><?= $row['GameName']; ?></td>
    <td><?= $row['TeamName']; ?></td>
    <td><?= $row['SkillLevel']; ?></td>
    <td><?= $row['EntryFee']; ?></td>
    <td><?= $row['PaymentStatus']; ?></td>
    <td><?= $row['RegistrationDate']; ?></td>

    <td>
        <a class="edit-btn" href="edit.php?id=<?= $row['id']; ?>">Edit</a>
        <a class="delete-btn" href="delete.php?id=<?= $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
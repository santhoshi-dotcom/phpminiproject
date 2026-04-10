<?php
include 'db.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM Players WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Player</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* BACKGROUND */
body {
    height: 100vh;
    background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                url('https://images.unsplash.com/photo-1511512578047-dfb367046420') no-repeat center/cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* MAIN CARD */
.edit-card {
    width: 420px;
    padding: 30px;
    border-radius: 20px;
    backdrop-filter: blur(18px);
    background: rgba(255,255,255,0.08);
    box-shadow: 0 10px 40px rgba(0,0,0,0.6);
    color: white;
    animation: fadeIn 0.8s ease;
}

/* ANIMATION */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px);}
    to { opacity: 1; transform: translateY(0);}
}

/* TITLE */
.edit-card h2 {
    text-align: center;
    margin-bottom: 20px;
    font-weight: 600;
    background: linear-gradient(45deg, #00f2ff, #4facfe);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* INPUTS */
.edit-card input {
    width: 100%;
    padding: 12px;
    margin-bottom: 12px;
    border-radius: 10px;
    border: none;
    outline: none;
    background: rgba(255,255,255,0.9);
    font-size: 14px;
}

/* BUTTON */
.update-btn {
    width: 100%;
    padding: 14px;
    border-radius: 12px;
    border: none;
    background: linear-gradient(135deg, #00c6ff, #0072ff);
    color: white;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
    box-shadow: 0 5px 20px rgba(0,114,255,0.5);
}

.update-btn:hover {
    transform: translateY(-3px) scale(1.03);
    box-shadow: 0 10px 30px rgba(0,114,255,0.9);
}

/* BACK BUTTON */
.back-btn {
    display: block;
    text-align: center;
    margin-top: 15px;
    text-decoration: none;
    color: #00f2ff;
    font-size: 14px;
}
</style>
</head>

<body>

<div class="edit-card">
<h2>🎮 Edit Player</h2>

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?= $row['id'] ?>">

<input type="text" name="username" value="<?= $row['PlayerName'] ?>" required>
<input type="email" name="email" value="<?= $row['Email'] ?>" required>
<input type="text" name="game" value="<?= $row['GameName'] ?>" required>
<input type="text" name="teamname" value="<?= $row['TeamName'] ?>">
<input type="text" name="skill" value="<?= $row['SkillLevel'] ?>">
<input type="number" name="fee" value="<?= $row['EntryFee'] ?>">
<input type="text" name="status" value="<?= $row['PaymentStatus'] ?>">
<input type="date" name="date" value="<?= $row['RegistrationDate'] ?>">

<button type="submit" class="update-btn">🚀 Update Player</button>

</form>

<a href="index.php" class="back-btn">⬅ Back to Home</a>
</div>

</body>
</html>
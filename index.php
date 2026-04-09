<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Tournament Registration</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            background: url('https://images.unsplash.com/photo-1542751371-adc38448a05e') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            padding: 30px;
            border-radius: 15px;
            width: 400px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.3);
            color: #fff;
        }

        .title {
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* SAME EFFECT FOR HEADING */
        .highlight {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
            font-size: 22px;
            background: linear-gradient(45deg, #0066ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            
        }

        label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
            background: rgba(255,255,255,0.85);
        }

        input:focus, select:focus {
            border: 2px solid #00f2ff;
        }

        /* SAME EFFECT FOR BUTTON */
        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(45deg, #0066ff);
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 0 10px rgba(0, 242, 255, 0.6);
        }

        .btn:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px #00f2ff;
        }

    </style>
</head>

<body>

<div class="container">
    <div class="title">🎮 Gaming Tournament</div>
    <h2 class="highlight">Register Now</h2>

    <form action="process.php" method="POST">

        <label>Player Name</label>
        <input type="text" name="username" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Game Name</label>
        <input type="text" name="game" required>

        <label>Team Name</label>
        <input type="text" name="teamname">

        <label>Skill Level</label>
        <select name="skill">
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="pro">Pro</option>
        </select>

        <label>Entry Fee</label>
        <input type="number" name="fee" required>

        <label>Payment Status</label>
        <select name="status">
            <option value="paid">Paid</option>
            <option value="pending">Pending</option>
        </select>

        <label>Registration Date</label>
        <input type="date" name="date" required>

        <button type="submit" class="btn">Submit</button>

    </form>
</div>

</body>
</html>
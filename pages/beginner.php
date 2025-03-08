<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beginner Level</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="container">
        <header class="main-header">
            <h1>Beginner Yoga Exercises</h1>
        </header>

        <div class="levels-container">
            <div class="level-card">
                <img src="../assets/images/mountain_pose.jpg" class="level-img">
                <h3 class="level-title">Mountain Pose</h3>
                <p>Stand tall, keep your arms by your sides, and breathe deeply.</p>
            </div>

            <div class="level-card">
                <img src="../assets/images/downward_dog.png" class="level-img">
                <h3 class="level-title">Downward Dog</h3>
                <p>Form an inverted 'V' shape with your body and stretch.</p>
            </div>
        </div>

        <a href="home.php" class="logout-btn">Back to Levels</a>
    </div>
</body>

</html>

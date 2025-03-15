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
    <link rel="stylesheet" href="../assets/css/style.css?v=1.1">
    </head>

<body>
    <div class="container">
        <header class="main-header">
            <h1>Advanced Yoga Exercises</h1>
        </header>

        <div class="levels-container">
            <div class="level-card">
                <img src="../assets/images/triangle_pose.jpg" class="level-img">
                <h3 class="level-title">Triangle Pose</h3>
                <p> While you're holding the pose, your legs form a triangle shape with the floor. The posture also engages other areas of your body as you lean your torso forward and extend your arms outward.</p>
            </div>

            <div class="level-card">
                <img src="../assets/images/pigeon_pose.png" class="level-img">
                <h3 class="level-title">Pegion Pose</h3>
                <p>The pigeon yoga pose requires you to get into a low lunge position with your right leg forward and left leg back. From there, you lower your body so that your right shin is parallel to the mat. Your left leg should be extended straight behind you, with the top of your foot resting on the mat</p>
            </div>
        </div>

        <a href="home.php" class="logout-btn">Back to Levels</a>
    </div>
</body>

</html>

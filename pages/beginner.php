<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
}
?><head>
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    

<h2>Beginner Level Yoga</h2>

<div>
    <h3>1. Mountain Pose</h3>
    <img src="../assets/images/mountain_pose.jpg" width="200">
    <p>Stand tall, keep your arms by your sides, and breathe deeply.</p>
</div>

<div>
    <h3>2. Downward Dog</h3>
    <img src="../assets/images/downward_dog.jpg" width="200">
    <p>Form an inverted 'V' shape with your body and stretch.</p>
</div>

<a href="home.php">Back to Levels</a>
<a href="../auth/logout.php">Logout</a>
<script src="../assets/js/script.js"></script>
</body>
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
}
?>
<body>
    

<div class="container">
<h2>Welcome to Yoga Trainer</h2>
<p>Select your level:</p>

<div>
    <a href="beginner.php">
        <h3>Beginner</h3>
        <img src="../assets/images/beginner.jpg" width="200">
    </a>
</div>

<div>
    <a href="intermediate.php">
        <h3>Intermediate</h3>
        <img src="../assets/images/intermediate.jpg" width="200">
    </a>
</div>

<div>
    <a href="advanced.php">
        <h3>Advanced</h3>
        <img src="../assets/images/advanced.jpg" width="200">
    </a>
</div>

<a href="../auth/logout.php">Logout</a>
</div>
<script src="../assets/js/script.js"></script>

</body>

<?php
session_start();

// If user is logged in, go to home page
if (isset($_SESSION['user_id'])) {
    header("Location: pages/home.php");
    exit();
}

// If not logged in, show the login page
header("Location: auth/login.php");
exit();
?>
<body>
<script src="assets/js/script.js"></script>
</body>

<?php
session_start();
session_destroy();
header("Location: login.php");
?>
<head><link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<script src="../assets/js/script.js"></script>
</body>
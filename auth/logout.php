<?php
session_start();
session_destroy();
header("Location: login.php");
?>
<body>
<script src="../assets/js/script.js"></script>
</body>
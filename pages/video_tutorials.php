<?php
include '../includes/db.php';
session_start();

// Fetch videos from the database
$query = "SELECT videos.pose_name, videos.video_url, yoga_levels.level_name 
          FROM videos 
          JOIN yoga_levels ON videos.level_id = yoga_levels.id";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga Video Tutorials</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Yoga Video Tutorials</h2>
        <div class="video-list">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="video-card">
                    <h3><?php echo $row['pose_name']; ?> (<?php echo $row['level_name']; ?>)</h3>
                    <iframe src="<?php echo $row['video_url']; ?>" allowfullscreen></iframe>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>

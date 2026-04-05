<?php
session_start();
include "db.php";

// Check login
if (!isset($_SESSION['username'])) {
    echo "Please login first";
    exit();
}

$user = $_SESSION['username'];

$sql = "SELECT * FROM resume WHERE username='$user' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query error");
}

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    echo "No resume found for user: " . $user;
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <h2>Resume Builder</h2>
    <div>
        <a href="form.php">Home</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<!-- Resume Content -->
<div class="container">

    <?php if (!empty($row['photo'])) { ?>
        <img src="images/<?php echo $row['photo']; ?>" width="100"><br>
    <?php } ?>

    <h1><?php echo $row['name']; ?></h1>
    <p>Email: <?php echo $row['email']; ?></p>
    <p>Phone: <?php echo $row['phone']; ?></p>

    <h3>Skills</h3>
    <p><?php echo $row['skills']; ?></p>

    <h3>Education</h3>
    <p><?php echo $row['education']; ?></p>

    <h3>Projects</h3>
    <p><?php echo $row['projects']; ?></p>

    <button onclick="window.print()">Download / Print</button>
</div>

</body>
</html>
<?php
session_start();
include "db.php";

// ✅ Session check
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

$user = $_SESSION['username'];

// Fetch latest resume for this user
$sql = "SELECT * FROM resume WHERE username='$user' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    echo "No resume found for user: " . $user;
    exit();
}

$row = mysqli_fetch_assoc($result);

// Determine template (default to 1 = Simple)
$template = $row['template'] ?? 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar (Updated for hover/click effects) -->
<div class="navbar">
    <h2>Resume Builder</h2>
    <div>
        <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
        <a href="form.php">Home</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<!-- Resume Template Section -->
<div class="resume-template">
    <?php
    switch ($template) {
        case 1: include 'templates/simple.php'; break;
        case 2: include 'templates/moderate.php'; break;
        case 3: include 'templates/professional.php'; break;
        case 4: include 'templates/creative.php'; break;
        case 5: include 'templates/modern.php'; break;
        case 6: include 'templates/classic.php'; break;
        default: include 'templates/simple.php';
    }
    ?>
</div>

</body>
</html>
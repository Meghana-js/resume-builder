<link rel="stylesheet" href="style.css">
<?php
session_start();
include "db.php";

$user = $_SESSION['username'];

$sql = "SELECT * FROM resume WHERE username='$user' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<style>
body {
    font-family: Arial;
    background: #f4f4f4;
}
.container {
    width: 60%;
    margin: auto;
    background: white;
    padding: 20px;
    box-shadow: 0 0 10px gray;
}
h1 {
    text-align: center;
    color: #333;
}
.section {
    margin-top: 20px;
}
</style>

<div class="container">
    <h1><?php echo $row['name']; ?></h1>
    <p><b>Email:</b> <?php echo $row['email']; ?></p>
    <p><b>Phone:</b> <?php echo $row['phone']; ?></p>

    <div class="section">
        <h3>Skills</h3>
        <p><?php echo $row['skills']; ?></p>
    </div>

    <div class="section">
        <h3>Education</h3>
        <p><?php echo $row['education']; ?></p>
    </div>

    <div class="section">
        <h3>Projects</h3>
        <p><?php echo $row['projects']; ?></p>
    </div>
</div>
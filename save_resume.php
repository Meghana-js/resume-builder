<?php
session_start();
include "db.php";

$user = $_SESSION['username'];

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$skills = $_POST['skills'];
$education = $_POST['education'];
$projects = $_POST['projects'];

// 👇 ADD PHOTO CODE HERE
$photo = $_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'], "images/".$photo);

// 👇 UPDATED SQL (photo added)
$sql = "INSERT INTO resume (username, name, email, phone, skills, education, projects, photo)
VALUES ('$user', '$name', '$email', '$phone', '$skills', '$education', '$projects', '$photo')";

mysqli_query($conn, $sql);

// 👇 (Optional template logic if you added dropdown)
$template = $_POST['template'];

if ($template == 1) {
    header("Location: resume.php");
} else {
    header("Location: resume2.php");
}
?>
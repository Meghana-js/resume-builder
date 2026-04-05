<?php
session_start();
include "db.php";

$user = $_SESSION['username'];

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$skills = $_POST['skills'];
$education = $_POST['education'];
$projects = $_POST['projects'];

// Handle photo upload
$photo = $_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'], "images/".$photo);

// Get selected template, default to 1 (Simple)
$template = $_POST['template'] ?? 1;

// Insert into database including template
$sql = "INSERT INTO resume (username, name, email, phone, skills, education, projects, photo, template) 
        VALUES ('$user', '$name', '$email', '$phone', '$skills', '$education', '$projects', '$photo', '$template')";

mysqli_query($conn, $sql);

// Redirect to resume page
header("Location: resume.php");
exit();
?>
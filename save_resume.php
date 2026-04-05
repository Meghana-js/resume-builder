<?php
session_start();
include "db.php";

// Step 2a: Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

$user = $_SESSION['username'];

// Step 2b: Check if form data exists
if(isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['skills'], $_POST['education'], $_POST['projects'], $_POST['template'])) {

    // Step 2c: Sanitize input
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $phone = mysqli_real_escape_string($conn, trim($_POST['phone']));
    $skills = mysqli_real_escape_string($conn, trim($_POST['skills']));
    $education = mysqli_real_escape_string($conn, trim($_POST['education']));
    $projects = mysqli_real_escape_string($conn, trim($_POST['projects']));
    $template = (int) $_POST['template'];

    // Step 2d: Handle photo upload
    $photo = '';
    if(isset($_FILES['photo']) && $_FILES['photo']['name'] != '') {
        $photo = time() . '_' . basename($_FILES['photo']['name']);
        move_uploaded_file($_FILES['photo']['tmp_name'], "images/".$photo);
    }

    // Step 2e: Insert into database
    $sql = "INSERT INTO resume (username, name, email, phone, skills, education, projects, photo, template)
            VALUES ('$user','$name','$email','$phone','$skills','$education','$projects','$photo','$template')";
    mysqli_query($conn, $sql);

    // ✅ Step 2f: Redirect to success page (avoids form resubmission)
    header("Location: resume_success.php");
    exit();

} else {
    header("Location: form.php");
    exit();
}
?>
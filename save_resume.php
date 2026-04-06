<?php
session_start();
include "db.php";

// ✅ Check login
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

$user = $_SESSION['username'];

// ✅ Check required fields
if (
    isset(
        $_POST['name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['skills'],
        $_POST['education'],
        $_POST['projects'],
        $_POST['template']
    )
) {

    // ✅ Sanitize input
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $phone = mysqli_real_escape_string($conn, trim($_POST['phone']));
    $address = mysqli_real_escape_string($conn, trim($_POST['address']));
    $objective = mysqli_real_escape_string($conn, trim($_POST['objective']));
    $skills = mysqli_real_escape_string($conn, trim($_POST['skills']));
    $education = mysqli_real_escape_string($conn, trim($_POST['education']));
    $experience = mysqli_real_escape_string($conn, trim($_POST['experience']));
    $projects = mysqli_real_escape_string($conn, trim($_POST['projects']));
    $achievements = mysqli_real_escape_string($conn, trim($_POST['achievements']));
    $languages = mysqli_real_escape_string($conn, trim($_POST['languages']));
    $hobbies = mysqli_real_escape_string($conn, trim($_POST['hobbies']));
    $template = (int) $_POST['template'];

    // ✅ Photo upload
    $photo = '';
    if (isset($_FILES['photo']) && $_FILES['photo']['name'] != '') {
        $photo = time() . '_' . basename($_FILES['photo']['name']);
        move_uploaded_file($_FILES['photo']['tmp_name'], "images/" . $photo);
    }

    // ✅ Insert query (UPDATED)
    $sql = "INSERT INTO resume 
    (username, name, email, phone, address, objective, skills, education, experience, projects, achievements, languages, hobbies, photo, template)
    VALUES 
    ('$user','$name','$email','$phone','$address','$objective','$skills','$education','$experience','$projects','$achievements','$languages','$hobbies','$photo','$template')";

    mysqli_query($conn, $sql);

    // ✅ Redirect
    header("Location: resume_success.php");
    exit();

} else {
    header("Location: form.php");
    exit();
}
?>
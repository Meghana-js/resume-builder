<?php
include "db.php";

// Check if form is submitted
if(isset($_POST['username']) && isset($_POST['password'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hash password

    // Check if username already exists
    $check = "SELECT * FROM users WHERE username='$username'";
    $res = mysqli_query($conn, $check);

    if(mysqli_num_rows($res) > 0) {
        echo "Username already taken. Please choose another.";
    } else {
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if(mysqli_query($conn, $sql)) {
            echo "Signup successful. <a href='login.html'>Login here</a>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
} else {
    echo "Please fill all fields.";
}
?>
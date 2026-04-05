<?php
session_start();
include "db.php";

// Check if form is submitted
if(isset($_POST['username']) && isset($_POST['password'])) {

    $username = mysqli_real_escape_string($conn, trim($_POST['username']));
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            $_SESSION['username'] = $username;
            header("Location: form.php");
            exit();
        } else {
            $message = "Invalid password!";
            $success = false;
        }
    } else {
        $message = "User not found!";
        $success = false;
    }

    // Display message page
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login Status</title>
        <style>
            body {
                font-family: "Segoe UI", sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background: linear-gradient(135deg, #ff416c, #ff4b2b);
                color: white;
            }
            .message-box {
                background: rgba(255,255,255,0.1);
                padding: 30px 40px;
                border-radius: 15px;
                text-align: center;
                box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            }
            h2 { margin-bottom: 20px; font-size: 28px; }
            a {
                display: inline-block;
                margin-top: 15px;
                padding: 12px 20px;
                background: linear-gradient(45deg, #6a11cb, #2575fc);
                color: white;
                text-decoration: none;
                border-radius: 8px;
                font-weight: bold;
                transition: 0.3s;
            }
            a:hover { background: linear-gradient(45deg, #2575fc, #6a11cb); }
            .error { color: #ffcccb; }
        </style>
    </head>
    <body>
        <div class="message-box">
            <h2 class="error">'.$message.'</h2>
            <a href="login.html">Try Again</a>
        </div>
    </body>
    </html>
    ';

} else {
    header("Location: login.html");
    exit();
}
?>
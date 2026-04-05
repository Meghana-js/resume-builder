<?php
include "db.php";

// Check if form is submitted
if(isset($_POST['username']) && isset($_POST['password'])) {

    $username = mysqli_real_escape_string($conn, trim($_POST['username']));
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT); // hash password

    // Check if username already exists
    $check = "SELECT * FROM users WHERE username='$username'";
    $res = mysqli_query($conn, $check);

    if(mysqli_num_rows($res) > 0) {
        $message = "Username already taken. Please choose another.";
        $success = false;
    } else {
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if(mysqli_query($conn, $sql)) {
            $message = "Signup successful! Login below:";
            $success = true;
        } else {
            $message = "Error: " . mysqli_error($conn);
            $success = false;
        }
    }

    // Display message page
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Signup Status</title>
        <style>
            body {
                font-family: "Segoe UI", sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background: linear-gradient(135deg, #6a11cb, #2575fc);
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
                background: linear-gradient(45deg, #ff416c, #ff4b2b);
                color: white;
                text-decoration: none;
                border-radius: 8px;
                font-weight: bold;
                transition: 0.3s;
            }
            a:hover { background: linear-gradient(45deg, #ff4b2b, #ff416c); }
            .error { color: #ffcccb; }
            .success { color: #a0ffb0; }
        </style>
    </head>
    <body>
        <div class="message-box">
            <h2 class="'.($success ? 'success' : 'error').'">'.$message.'</h2>';
    
    if($success){
        echo '<a href="login.html">Login Here</a>';
    }

    echo '
        </div>
    </body>
    </html>
    ';

} else {
    header("Location: signup.html");
    exit();
}
?>
<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resume Generated</title>
    <style>
        body {
            font-family: Arial;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg,#00c6ff,#0072ff);
            color: white;
        }
        .box {
            text-align: center;
            background: rgba(255,255,255,0.1);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            color: white;
            text-decoration: none;
            background: linear-gradient(45deg,#ff416c,#ff4b2b);
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }
        a:hover {
            background: linear-gradient(45deg,#ff4b2b,#ff416c);
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Resume Generated Successfully!</h2>
        <a href="resume.php">View Resume</a>
        <br><br>
        <a href="form.php">Create Another</a>
    </div>
</body>
</html>
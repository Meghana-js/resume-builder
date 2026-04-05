<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resume Builder</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <h2>Resume Builder</h2>
    <div>
        <a href="form.php">Home</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<!-- Resume Form -->
<div class="container">
    <form action="save_resume.php" method="POST" enctype="multipart/form-data">

        <input type="file" name="photo"><br>

        <input type="text" name="name" placeholder="Full Name"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="text" name="phone" placeholder="Phone"><br>

        <textarea name="skills" placeholder="Skills"></textarea><br>
        <textarea name="education" placeholder="Education"></textarea><br>
        <textarea name="projects" placeholder="Projects"></textarea><br>

        <!-- Template Dropdown -->
        <select name="template">
            <option value="1">Simple</option>
            <option value="2">Modern</option>
        </select><br><br>

        <button type="submit">Generate Resume</button>
    </form>
</div>

</body>
</html>
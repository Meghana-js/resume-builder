<?php
session_start();

// ✅ Session check
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resume Builder</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar (Updated for hover/click effects) -->
<div class="navbar">
    <h2>Resume Builder</h2>
    <div>
        <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
        <a href="form.php">Home</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<!-- Resume Form -->
<div class="container">
    <form action="save_resume.php" method="POST" enctype="multipart/form-data">

        <input type="file" name="photo"><br>

        <input type="text" name="name" placeholder="Full Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="phone" placeholder="Phone" required><br>

        <textarea name="skills" placeholder="Skills" required></textarea><br>
        <textarea name="education" placeholder="Education" required></textarea><br>
        <textarea name="projects" placeholder="Projects" required></textarea><br>

        <!-- Template Dropdown -->
        <select name="template">
            <option value="1">Simple</option>
            <option value="2">Moderate</option>
            <option value="3">Professional</option>
            <option value="4">Creative</option>
            <option value="5">Modern</option>
            <option value="6">Classic</option>
        </select><br><br>

        <button type="submit" class="generate-btn">Generate Resume</button>
    </form>
</div>

</body>
</html>
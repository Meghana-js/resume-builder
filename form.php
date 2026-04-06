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

<!-- Navbar -->
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

        <!-- Photo -->
        <input type="file" name="photo"><br>

        <!-- Basic Details -->
        <input type="text" name="name" placeholder="Full Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="phone" placeholder="Phone" required><br>
        <input type="text" name="address" placeholder="Address" required><br>

        <!-- Career Objective -->
        <textarea name="objective" placeholder="Career Objective" required></textarea><br>

        <!-- Skills -->
        <textarea name="skills" placeholder="Skills" required></textarea><br>

        <!-- Education -->
        <textarea name="education" placeholder="Education" required></textarea><br>

        <!-- Experience -->
        <textarea name="experience" placeholder="Experience"></textarea><br>

        <!-- Projects -->
        <textarea name="projects" placeholder="Projects" required></textarea><br>

        <!-- Achievements -->
        <textarea name="achievements" placeholder="Achievements"></textarea><br>

        <!-- Languages -->
        <input type="text" name="languages" placeholder="Languages Known"><br>

        <!-- Hobbies -->
        <input type="text" name="hobbies" placeholder="Hobbies"><br>

        <!-- ✅ Template Dropdown (MUST BE INSIDE FORM) -->
        <select name="template" required>
            <option value="">Select Template</option>
            <option value="1">Simple</option>
            <option value="2">Moderate</option>
            <option value="3">Professional</option>
            <option value="4">Creative</option>
            <option value="5">Modern</option>
            <option value="6">Classic</option>
        </select><br>

        <!-- ✅ ONLY ONE BUTTON -->
        <button type="submit" class="generate-btn">Generate Resume</button>

    </form>

</div>

</body>
</html>
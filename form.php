<a href="logout.php">Logout</a>
<?php session_start(); ?>

<form action="save_resume.php" method="POST" enctype="multipart/form-data">

    <input type="file" name="photo"><br>

    <input type="text" name="name" placeholder="Full Name"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="text" name="phone" placeholder="Phone"><br>

    <textarea name="skills" placeholder="Skills"></textarea><br>
    <textarea name="education" placeholder="Education"></textarea><br>
    <textarea name="projects" placeholder="Projects"></textarea><br>

    <!-- (Optional template dropdown if using templates) -->
    <select name="template">
        <option value="1">Simple</option>
        <option value="2">Modern</option>
    </select><br><br>

    <button type="submit">Generate Resume</button>
</form>
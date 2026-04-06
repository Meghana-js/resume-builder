<div class="container modern two-column">

    <h2 class="resume-title">RESUME</h2>

    <div class="row">

        <!-- LEFT COLUMN -->
        <div class="left">

            <?php if(!empty($row['photo'])): ?>
                <img src="images/<?php echo htmlspecialchars($row['photo']); ?>" width="120">
            <?php endif; ?>

            <h1><?php echo strtoupper(htmlspecialchars($row['name'])); ?></h1>

            <p><b>Email:</b> <?php echo htmlspecialchars($row['email']); ?></p>
            <p><b>Phone:</b> <?php echo htmlspecialchars($row['phone']); ?></p>
            <p><b>Address:</b> <?php echo htmlspecialchars($row['address']); ?></p>

            <div class="section">
                <h3>Skills</h3>
                <p><?php echo htmlspecialchars($row['skills']); ?></p>
            </div>

            <div class="section">
                <h3>Languages</h3>
                <p><?php echo htmlspecialchars($row['languages']); ?></p>
            </div>

            <div class="section">
                <h3>Hobbies</h3>
                <p><?php echo htmlspecialchars($row['hobbies']); ?></p>
            </div>

        </div>

        <!-- RIGHT COLUMN -->
        <div class="right">

            <div class="section">
                <h3>Career Objective</h3>
                <p><?php echo htmlspecialchars($row['objective']); ?></p>
            </div>

            <div class="section">
                <h3>Education</h3>
                <p><?php echo htmlspecialchars($row['education']); ?></p>
            </div>

            <div class="section">
                <h3>Experience</h3>
                <p><?php echo htmlspecialchars($row['experience']); ?></p>
            </div>

            <div class="section">
                <h3>Projects</h3>
                <p><?php echo htmlspecialchars($row['projects']); ?></p>
            </div>

            <div class="section">
                <h3>Achievements</h3>
                <p><?php echo htmlspecialchars($row['achievements']); ?></p>
            </div>

            <div class="section">
                <h3>Declaration</h3>
                <p>I hereby declare that the above information is true.</p>
            </div>

        </div>

    </div>

</div>
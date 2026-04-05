<div class="container simple">
    <?php if(!empty($row['photo'])) { ?>
        <img src="images/<?php echo $row['photo']; ?>" width="120">
    <?php } ?>
    <h1><?php echo $row['name']; ?></h1>
    <p><b>Email:</b> <?php echo $row['email']; ?></p>
    <p><b>Phone:</b> <?php echo $row['phone']; ?></p>

    <div class="section">
        <h3>Skills</h3>
        <p><?php echo $row['skills']; ?></p>
    </div>

    <div class="section">
        <h3>Education</h3>
        <p><?php echo $row['education']; ?></p>
    </div>

    <div class="section">
        <h3>Projects</h3>
        <p><?php echo $row['projects']; ?></p>
    </div>

    <button onclick="window.print()">Download / Print</button>
</div>
<?php
$current = basename($_SERVER['PHP_SELF']);
?>

<div class="menu">

<a href="career.php" class="<?php if($current=='career.php') echo 'active'; ?>">
• Career Objective
</a>

<a href="education.php" class="<?php if($current=='education.php') echo 'active'; ?>">
• Educational Attainment
</a>

<a href="skills.php" class="<?php if($current=='skills.php') echo 'active'; ?>">
• Skills
</a>

<a href="affiliation.php" class="<?php if($current=='affiliation.php') echo 'active'; ?>">
• Affiliation
</a>

<a href="experience.php" class="<?php if($current=='experience.php') echo 'active'; ?>">
• Work Experience
</a>

</div>

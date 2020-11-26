<?php

session_start();

?>
<html lang="en">

<head>
    <title>Profile</title>
</head>

<body>
<?php
require_once ('nav.php');
?>
<div class="rig">
    <h1>Welcome <?php echo $_SESSION['email']; ?></h1>
    <h2><a href = "logout.php">Log Out</a></h2>
</div>
</body>

</html>
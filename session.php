<?php if (isset($_SESSION['user_name'])) { ?>
    <li><a href="php/logout.php">Logout</a></li>
<?php } else { ?>
    <li><a href="login.html">Login</a></li>
<?php } ?>

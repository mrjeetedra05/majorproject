<?php
session_start();
session_unset();  // ✅ Session variables remove karega
session_destroy(); // ✅ Pura session destroy karega
header("Location: homepage.html"); // ✅ Logout hone ke baad homepage pe bhej dega
exit();
?>

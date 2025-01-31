<?php
session_start();
session_unset();  
session_destroy();

header("Location: /bliss/index.php"); // Redirect to homepage after logout
exit();
?>

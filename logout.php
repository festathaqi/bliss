<?php
session_start();
session_unset();  
session_destroy();

header("Location: /bliss/index.html"); // Redirect to homepage after logout
exit();
?>

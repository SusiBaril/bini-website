<?php
session_start();

// Clear session variables
$_SESSION = [];

// Unset all session variables and destroy the session
session_unset();
session_destroy();

// Generate logout hashes
$logout = md5("email");
$email_md5 = md5($logout);

// Redirect to index with logout information
echo "Logging Out... Please Wait...";
echo "<script>window.location.href='index.php?logout=$logout&v_1=$email_md5'</script>";

exit();
?>
<?php
session_start();
session_destroy();
header("Location: hlogin.php");
exit;
?>

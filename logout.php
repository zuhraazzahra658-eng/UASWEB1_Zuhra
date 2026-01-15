<?php
session_start();

//hapus semua session
session_unset();
session_destroy();

//kemnbali ke login
header("Location: login.php");
exit;
?>
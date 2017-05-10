<?php 
session_start();
ob_start();
 session_unset('login_validation');
 header('location:index.php');
?>
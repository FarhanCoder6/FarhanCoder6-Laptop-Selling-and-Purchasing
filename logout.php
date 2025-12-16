<?php
include("admin/config.php");
session_unset($_SESSION['user_session']);
header("location:index.php");
?>
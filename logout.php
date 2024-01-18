<?php
include_once('includes/conn.php');
session_destroy();
header('Location:login.php')
?>
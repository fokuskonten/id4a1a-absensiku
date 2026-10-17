<?php
// FokusKonten PHP 8.2 Compatibility Shield
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);
ini_set('display_errors', '0');

require_once '../config/database.php';

// If student is logged in, redirect to dashboard
if (isset($_SESSION['siswa_id'])) {
    header("Location: dashboard/");
    exit();
}

// Otherwise redirect to login page
header("Location: login.php");
exit();

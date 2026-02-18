<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$link = mysqli_connect('localhost', 'sjdbuser', 'Qo5y[QWZwT)EzUkA', 'samueljosephdb');

if (!$link) {
    die('Database connection error: ' . mysqli_connect_error());
}
echo 'Database connection successful!';
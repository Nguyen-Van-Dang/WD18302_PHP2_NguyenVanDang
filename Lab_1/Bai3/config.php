<?php
//Kết nối db
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "mysql";
$dbName     = "lab1";
//Tạo kết nối CSDL
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
// Kiểm tra kết nối CSDL
if ($db->connect_error) {
    die("Kết nối thất bại: " . $db->connect_error);
}
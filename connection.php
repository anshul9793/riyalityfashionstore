<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'registration';
$conn = mysqli_connect($server, $username, $password, $db);

if (!$conn) {
    echo "<script>alert('connection not established')</script>";
    mysqli_connect_error();
    exit();
}
?>
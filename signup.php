<?php
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
mysqli_query($conn, $sql);

echo "Signup successful";
?>
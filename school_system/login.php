<?php
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);;

if (!$result) {
    die("Error: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    header("Location: dashboard.php");
    exit();
} else {
    echo "incorrect Username or Password";
}
?>
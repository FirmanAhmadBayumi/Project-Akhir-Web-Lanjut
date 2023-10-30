<?php
session_start();

require_once('../database.php');
require_once('../config.php');

if(isset($_POST['username']) && isset($_POST['password'])) {
    // cek di database;

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$username'";

    $result = mysqli_query($db->conn, $query);
    if(mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $user['username'];
        header("Location: ". $config->base_url . "index.php");
    } else {
        header("Location: ". $config->base_url . "login.php?error=1");
    }
}
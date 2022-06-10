<?php
require_once('db.php');
session_start();

$login = $_POST['login'];
$password = $_POST['pwd'];
$query = "SELECT * FROM `admin1` WHERE `admin_log` = '$login' or  `admin_mail` = '$login'";
$result = mysqli_query($conn, $query);
if (isset($_POST['sublogin'])) {
    if (!empty($login) && !empty($password)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($password == $row['admin_pwd']) {
                    $_SESSION['Admin'] = $row['id'];
                    header("location:admin.php");
                } else {
                    header("location:admin.php?err=Admin Password is invalid");
                }
            }
        } else {
            header("location:admin.php?err=Admin is not found");
        }
    } else {
        if (empty($login)) {
            header("location:admin.php?err=Admin login is invalid");
        }
        if (empty($password)) {
            header("location:admin.php?err=Admin lassword is invalid");
        }
    }
} else {
    header("location:admin.php");
    session_destroy();
}

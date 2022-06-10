<?php
include 'db.php';

if (isset($_POST['del'])) {
    $id = $_GET['id'];
    $table = $_GET['sql'];
    $query = "DELETE FROM $table WHERE `id` = '$id'";
    $result = mysqli_query($conn, $query);
    header("location:admin.php?succes&admin");
} else {
    header("location:admin.php?");
}

<?php
include 'db.php';

if (isset($_POST['cheng'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $id = $_GET['id'];
    $table = $_GET['sql'];

    if (empty($name) && empty($price)) {
        header("location:admin.php?eror");
    } else {
        if (!empty($name)) {
            $qu =  "UPDATE `$table` SET `prod_name`='$name' WHERE `id` =  '$id' ";
            $result = mysqli_query($conn, $qu);
            header("location:admin.php?succes&admin");
        }

        if (!empty($price)) {
            $qu =  "UPDATE `$table` SET `prod_price`='$price' WHERE `id` =  '$id' ";
            $result = mysqli_query($conn, $qu);
            header("location:admin.php?succes&admin");
        }
    }
} 
else {
    header("location:admin.php");
}

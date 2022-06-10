<?php

include 'db.php';

if (isset($_POST["subuplod"])) {
    $prod_name = $_POST['prodname'];
    $prod_price = $_POST['prodprice'];
    $select = $_POST["select"];
    $prod_ing = $_POST["proding"];
    if (!empty($_POST["select"]) && !empty($_POST['prodname']) && !empty($_POST['prodprice']) && !empty($_POST['proding'])) {

        $insert = "INSERT INTO `$select`( `prod_name`, `prod_price`, `prod_ing`)
         VALUES('$prod_name', '$prod_price', '$prod_ing');";
        mysqli_query($conn, $insert);
        header("location: admin.php?sucsses");
    }
} else {
    header("location: admin.php?");
}


<?php

include 'db.php';

if (isset($_POST["sub"])) {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $text = $_POST["text"];
    if (!empty($_POST["name"]) && !empty($_POST['mail']) &&  !empty($_POST["text"])) {

        $insert = "INSERT INTO `mesig`( `user_name`, `user_text`, `user_mail`)
         VALUES('$name', '$text', '$mail');";
        mysqli_query($conn, $insert);
        header("location: contac.php?sucsses");
    } else {
        header("location: contac.php?err");
    }
} else {
    header("location: contac.php?err");
}
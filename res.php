<?php

include 'db.php';

if (isset($_POST["sub"])) {
    $people = $_POST['people'];
    $time = $_POST['time'];
    $date = $_POST["date"];
    if (!empty($_POST["people"]) && !empty($_POST['time']) && !empty($_POST['date'])) {

        $insert = "INSERT INTO `res`( `person`, `data`, `time`)
         VALUES('$people', '$date', '$time');";
        mysqli_query($conn, $insert);
        header("location: reserv.php?sucsses");
    } else {
        header("location: reserv.php?err");
    }
} else {
    header("location: reserv.php?err");
}

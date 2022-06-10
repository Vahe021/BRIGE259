<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/menulist.css">
    <title>Menu</title>
</head>

<body>
    <header>
        <?php include "menu.php";
        include 'db.php' ?>
    </header>
    <div class="menuimg">
        <p>Menu</p>
    </div>

    <div class="menuul">

        <div class="cocktail">
            <p>Our choice</p>
            <h1>Cocktails</h1>
            <ul>
                <?php
                $sql = "SELECT * FROM cocktails";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                ?>
                        <li>
                            <div>
                                <p><?php echo $row['prod_name'] ?></p>
                                <div></div>
                                <p>$<?php echo $row['prod_price'] ?></p>
                            </div>
                            <span><?php echo $row['prod_ing'] ?></span>
                        </li>
                    <?php
                    }
                    ?>
                <?php
                }
                ?>

            </ul>
        </div>

        <div class="wine">
            <p>We recommend</p>
            <h1>Wine selec</h1>
            <ul>
                <?php
                $sql = "SELECT * FROM wine";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                ?>
                        <li>
                            <div>
                                <p><?php echo $row['prod_name'] ?></p>
                                <div></div>
                                <p>$<?php echo $row['prod_price'] ?></p>
                            </div>
                            <span><?php echo $row['prod_ing'] ?></span>
                        </li>
                    <?php
                    }
                    ?>
                <?php
                }
                ?>
            </ul>
        </div>

        <div class="beer">
            <p>New arrivals</p>
            <h1>Craft beer</h1>
            <ul>
                <?php
                $sql = "SELECT * FROM beer";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                ?>
                        <li>
                            <div>
                                <p><?php echo $row['prod_name'] ?></p>
                                <div></div>
                                <p>$<?php echo $row['prod_price'] ?></p>
                            </div>
                            <span><?php echo $row['prod_ing'] ?></span>
                        </li>
                    <?php
                    }
                    ?>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>

    <div class="singlimg"></div>


    <footer>
        <?php include "futer.php" ?>
    </footer>
</body>

</html>
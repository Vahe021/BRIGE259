<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./icon/css/all.css">
</head>

<body>
    <?php
    include 'db.php';
    session_start();
    ?>

    <?php if (!isset($_SESSION['Admin'])) { ?>
        <div class="login">
            <form action="login.php" method="POST">
                <div class="err">
                    <p><?php if (isset($_GET['err'])) {
                            echo $_GET['err'];
                        }  ?></p>
                </div>
                <input type="text" class="login1" placeholder="E-mail or Name" name="login">
                <input type="password" class="pwd" placeholder="Password" name="pwd">
                <input type="submit" class="sub" value="Login" name="sublogin">
            </form>
        </div>
    <?php } else { ?>
        <div class="menue">
            <div class="logo">
                <div class="logo1">
                    <img src="./img/logo-light.png" width="100%" height="100%">
                </div>
            </div>

            <div class="logout">
                <?php echo '<a href="logout.php?logout"" ><i class="fa-solid fa-arrow-right-from-bracket"></i></a>'; ?>
            </div>
        </div>
        <div class="adminset">
            <div class="prodset">
                <form action="upload.php" method="POST" class="formuplod" enctype="multipart/form-data">
                    <input type="text" class="inp" name="prodname" placeholder="Name">
                    <input type="text" class="inp" placeholder="Price" name="prodprice">
                    <input type="text" class="inp" placeholder="Ingredients" name="proding">
                    <select class="inp" name="select">
                        <option value="">Type of product</option>
                        <option value="cocktails">cocktails</option>
                        <option value="wine">Wine selection</option>
                        <option value="beer">Craft beer</option>
                    </select>
                    <input type="submit" class="btn" name="subuplod" value="Upload">
                </form>
            </div>
            <div class="tableset">
                <ul>
                    <li id="prod">Product Table</li>
                    <li id="res">Reservation Table</li>
                    <li id="mess">Message Table</li>
                </ul>
            </div>
        </div>
        <div class="tables">
            <div class="prodtable">
                <table class="prodtable1">
                    <thead>
                        <th>Cocktails</th>
                        <th>Wine selection</th>
                        <th>Craft beer</th>
                    </thead>
                    <tr class='prodtabletr'>
                        <td class='prodtabletd'>
                            <?php
                            $sql = "SELECT * FROM cocktails";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            if ($resultCheck > 0) {
                            ?>
                                <table>
                                    <thead>
                                        <th>Product Name</th>
                                        <th>Ingredients</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </thead>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                    ?>
                                        <tr>
                                            <td><?php echo $row['prod_name'] ?></td>
                                            <td><?php echo $row['prod_ing'] ?></td>
                                            <td><?php echo $row['prod_price'] ?>$</td>
                                            <td>
                                                <p class="pset">Changes</p>
                                                <div class="divcheng">
                                                    <div class="choose">
                                                        <div class="close"><i class="fa-solid fa-circle-xmark"></i></i></div>
                                                        <p class="chengchoose">Cheng</p>
                                                        <p class="delchoose">Delet</p>
                                                    </div>
                                                    <div class="cheng">
                                                        <form class="cheng1" action="cheng.php?id=<?php echo $id ?>&sql=cocktails" method="POST">
                                                            <div class="close"><i class="fa-solid fa-circle-xmark"></i></i></div>
                                                            <input class="inpch" type="text" name="name" placeholder="Cheng Name">
                                                            <input class="inpch" type="text" name="price" placeholder="Cheng Price">
                                                            <!-- <input type="submit" class="sub" name="cheng" value="Cheng"> -->
                                                            <button type="submit" class="sub" name="cheng">Cheng</button>
                                                        </form>
                                                    </div>
                                                    <div class="delet">
                                                        <form class="delet1" action="del.php?id=<?php echo $id; ?>&sql=cocktails" method="POST">
                                                            <div class="close"><i id="close" class="fa-solid fa-circle-xmark"></i></i></div>
                                                            <h4>Delet Product</h4>
                                                            <input class="sub" type="submit" name="del" value="Delet">
                                                        </form>
                                                    </div>

                                            </td>
                                        </tr>

                                    <?php
                                    }
                                    ?>
                                </table>

                            <?php
                            }
                            ?>
                        </td>
                        <td class='prodtabletd'>
                            <?php
                            $sql1 = "SELECT * FROM wine";
                            $result1 = mysqli_query($conn, $sql1);
                            $resultCheck1 = mysqli_num_rows($result1);
                            if ($resultCheck1 > 0) {
                            ?>
                                <table>
                                    <thead>
                                        <th>Product Name</th>
                                        <th>Countre</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </thead>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result1)) {
                                        $id = $row['id'];
                                    ?>
                                        <tr>
                                            <td><?php echo $row['prod_name'] ?></td>
                                            <td><?php echo $row['prod_ing'] ?></td>
                                            <td><?php echo $row['prod_price'] ?>$</td>
                                            <td>
                                                <p class="pset">Changes</p>
                                                <div class="divcheng">
                                                    <div class="choose">
                                                        <div class="close"><i class="fa-solid fa-circle-xmark"></i></i></div>
                                                        <p class="chengchoose">Cheng</p>
                                                        <p class="delchoose">Delet</p>
                                                    </div>
                                                    <div class="cheng">
                                                        <form class="cheng1" action="cheng.php?id=<?php echo $id; ?>&sql=wine" method="POST">
                                                            <div class="close"><i class="fa-solid fa-circle-xmark"></i></i></div>
                                                            <input class="inpch" type="text" name="name" placeholder="Cheng Name">
                                                            <input class="inpch" type="text" name="price" placeholder="Cheng Price">
                                                            <input type="submit" class="sub" name="cheng" value="Cheng">
                                                        </form>
                                                    </div>
                                                    <div class="delet">
                                                        <form class="delet1" action="del.php?id=<?php echo $id; ?>&sql=wine" method="POST">
                                                            <div class="close"><i id="close" class="fa-solid fa-circle-xmark"></i></i></div>
                                                            <h4>Delet Product</h4>
                                                            <input class="sub" type="submit" name="del" value="Delet">
                                                        </form>
                                                    </div>

                                            </td>
                                        </tr>

                                    <?php
                                    }
                                    ?>
                                </table>

                            <?php
                            }
                            ?>
                        </td>
                        <td class='prodtabletd'>
                            <?php
                            $sql2 = "SELECT * FROM beer";
                            $result2 = mysqli_query($conn, $sql2);
                            $resultCheck2 = mysqli_num_rows($result2);
                            if ($resultCheck2 > 0) {
                            ?>
                                <table>
                                    <thead>
                                        <th>Product Name</th>
                                        <th>Ingredients</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </thead>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result2)) {
                                        $id = $row['id'];
                                    ?>
                                        <tr>
                                            <td><?php echo $row['prod_name'] ?></td>
                                            <td><?php echo $row['prod_ing'] ?></td>
                                            <td><?php echo $row['prod_price'] ?>$</td>
                                            <td>
                                                <p class="pset">Changes</p>
                                                <div class="divcheng">
                                                    <div class="choose">
                                                        <div class="close"><i class="fa-solid fa-circle-xmark"></i></i></div>
                                                        <p class="chengchoose">Cheng</p>
                                                        <p class="delchoose">Delet</p>
                                                    </div>
                                                    <div class="cheng">
                                                        <form class="cheng1" action="cheng.php?id=<?php echo $id; ?>&sql=beer" method="POST">
                                                            <div class="close"><i class="fa-solid fa-circle-xmark"></i></i></div>
                                                            <input class="inpch" type="text" name="name" placeholder="Cheng Name">
                                                            <input class="inpch" type="text" name="price" placeholder="Cheng Price">
                                                            <input type="submit" class="sub" name="cheng" value="Cheng">
                                                        </form>
                                                    </div>
                                                    <div class="delet">
                                                        <form class="delet1" action="del.php?id=<?php echo $id; ?>&sql=beer" method="POST">
                                                            <div class="close"><i id="close" class="fa-solid fa-circle-xmark"></i></i></div>
                                                            <h4>Delet Product</h4>
                                                            <input class="sub" type="submit" name="del" value="Delet">
                                                        </form>
                                                    </div>

                                            </td>
                                        </tr>

                                    <?php
                                    }
                                    ?>
                                </table>

                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="messigtable">
                <?php
                $sql1 = "SELECT * FROM mesig";
                $result1 = mysqli_query($conn, $sql1);
                $resultCheck1 = mysqli_num_rows($result1);
                if ($resultCheck1 > 0) {
                ?>
                    <table>
                        <thead class="messigthead">
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Message</th>
                        </thead>
                        <?php
                        while ($row = mysqli_fetch_assoc($result1)) {
                        ?>
                            <tr class="messigtr">
                                <td><?php echo $row['user_name'] ?></td>
                                <td><?php echo $row['user_mail'] ?></td>
                                <td><?php echo $row['user_text'] ?></td>
                            </tr>

                        <?php
                        }
                        ?>
                    </table>

                <?php
                }
                ?>
            </div>

            <div class="reservtable">
                <?php
                $sql2 = "SELECT * FROM res";
                $result2 = mysqli_query($conn, $sql2);
                $resultCheck2 = mysqli_num_rows($result2);
                if ($resultCheck2 > 0) {
                ?>
                    <table>
                        <thead>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>E-mail</th>
                            <th>Action</th>

                            <?php
                            while ($row = mysqli_fetch_assoc($result2)) {
                            ?>
                                <tr align="center">
                                    <td><?php echo $row['user_first'] ?></td>
                                    <td><?php echo $row['user_last'] ?></td>
                                    <td><?php echo $row['user_uid'] ?></td>
                                    <td>
                                        <a id="a" href="delad.php?delete=<?php echo $row['user_id']; ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>

                            <?php
                            }
                            ?>
                    </table>

                <?php
                }
                ?>
            </div>
        </div>
    <?php } ?>



    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/admin.js"></script>
</body>

</html>
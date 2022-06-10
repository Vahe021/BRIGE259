<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/contact.css">
    <title>Document</title>
</head>

<body>
    <header>
        <?php include 'menu.php' ?>
    </header>

    <div class="title">
        <p>Contact</p>
    </div>


    <div class="coment">
        <div class="coment1">
            <h5>Contact us</h5>
            <h2>Get in touch</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com.</p>
            <p><i class="fa-regular fa-clock"></i>Mon-Sun: 09am - 09pm</p>
            <p><i class="fa-solid fa-location-dot"></i>1611 Linden Avenue, London</p>
            <p><i class="fa-solid fa-grip"></i>301-382-4311, 301-461-967</p>
        </div>
        <div class="coment2">
            <form action="message.php" method="POST">
                <textarea placeholder="Your Message" name="text"></textarea>
                <input type="text" placeholder="Your Name" name="name">
                <input type="text" placeholder="Your E-mail" name="mail">
                <input type="submit" value="Submit" name="sub"></input>
            </form>
        </div>
    </div>

    <div class="map"></div>


    <footer>
        <?php include 'futer.php' ?>
    </footer>
</body>

</html>
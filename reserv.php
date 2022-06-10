<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reserv.css">
    <link rel="stylesheet" href="./icon/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <title>Document</title>
</head>

<body>

    <header>
        <?php include 'menu.php' ?>
    </header>




    <div class="reservs">
        <div class="title">
            <p>Reservations</p>
        </div>
        <form action="res.php" method="POST" class="reservs1">
            <span class="spanpeople"><i class="fa-solid fa-user-plus"></i></span>
            <select class="people" name="people">
                <option value="1">1 Person</option>
                <option value="2">2 Person</option>
                <option value="3">3 Person</option>
                <option value="4">4 Person</option>
                <option value="5">5 Person</option>
                <option value="6">6 Person</option>
                <option value="7">7 Person</option>
                <option value="8">8 Person</option>
                <option value="9">9 Person</option>
                <option value="10">10 Person</option>
            </select>

            <div class="spandata"><i class="fa-regular fa-calendar-days"></i></div>
            <input type='date' id="date" class="date" name="date" placeholder="Select Date..">
            <span class="spantime"><i class="fa-regular fa-clock"></i></span>
            <select class="time" name="time">
                <option value="6:30am">6:30 am</option>
                <option value="7:00am">7:00 am</option>
                <option value="7:30am">7:30 am</option>
                <option value="8:00am">8:00 am</option>
                <option value="8:30am">8:30 am</option>
                <option value="9:00am">9:00 am</option>
                <option value="9:30am">9:30 am</option>
                <option value="10:00am">10:00 am</option>
                <option value="10:30am">10:30 am</option>
                <option value="11:00am">11:00 am</option>
                <option value="11:30am">11:30 am</option>
                <option value="12:00am">12:00 pm</option>
                <option value="12:30am">12:30 pm</option>
                <option value="1:00pm">1:00 pm</option>
                <option value="1:30pm">1:30 pm</option>
                <option value="2:00pm">2:00 pm</option>
                <option value="2:30pm">2:30 pm</option>
                <option value="3:00pm">3:00 pm</option>
                <option value="3:30pm">3:30 pm</option>
                <option value="4:00pm">4:00 pm</option>
                <option value="4:30pm">4:30 pm</option>
                <option value="5:00pm">5:00 pm</option>
                <option value="5:30pm">5:30 pm</option>
                <option value="6:00pm">6:00 pm</option>
                <option value="6:30pm">6:30 pm</option>
                <option value="7:00pm" selected="selected">7:00 pm</option>
                <option value="7:30pm">7:30 pm</option>
                <option value="8:00pm">8:00 pm</option>
                <option value="8:30pm">8:30 pm</option>
                <option value="9:00pm">9:00 pm</option>
                <option value="9:30pm">9:30 pm</option>
                <option value="10:00pm">10:00 pm</option>
                <option value="10:30pm">10:30 pm</option>
                <option value="11:00pm">11:00 pm</option>
                <option value="11:30pm">11:30 pm</option>
            </select>
            <button type="submit" name="sub" class="btnreserv">Book a Table</button>
        </form>


    </div>

    <footer>

        <?php include "futer.php" ?>

    </footer>

    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#date", {
            dateFormat: "d-m-Y ",
        });
    </script>

</body>

</html>
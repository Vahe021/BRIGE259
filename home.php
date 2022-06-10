<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./icon/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <title>BRIDGE269</title>
</head>


<body>
    <header>
        <?php include "menu.php" ?>
    </header>

    <div class="slider">
        <div class="slider_itm">
            <img src="./img/slider-img-1.jpg">
            <div class="text">
                <p>Exclusive drink service</p>
                <p>Cocktail stage evenings</p>
                <a href="#">View more</a>
            </div>
        </div>
        <div class="slider_itm">
            <img src="./img/slider-img-2.jpg">
            <div class="text">
                <p>Exclusive drink service</p>
                <p>Cocktail stage evenings</p>
                <a href="#">View more</a>
            </div>
        </div>
        <div class="slider_itm">
            <img src="./img/slider-img-3.jpg">
            <div class="text">
                <p>Exclusive drink service</p>
                <p>Cocktail stage evenings</p>
                <a href="#">View more</a>
            </div>

        </div>

    </div>
    <div class="reservs">
        <div class="reservs1">
            <span class="spanpeople"><i class="fa-solid fa-user-plus"></i></span>
            <select class="people">
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
            <input type='date' id="date" class="date" placeholder="Select Date..">
            <span class="spantime"><i class="fa-regular fa-clock"></i></span>
            <select class="time">
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
            <button type="submit" class="btnreserv">Book a Table</button>
        </div>
        <div class="obautres">
            <div class="openhours">
                <div>
                    <p>Visit a bar</p>
                    <p>Open hours</p>
                </div>
                <div>
                    <p>Monday – Friday:</p>
                    <p>4:00 pm – 1:00 am</p>
                </div>
                <div>
                    <p>Saturday :</p>
                    <p>4:00 pm – 3:00 am</p>
                </div>
                <div>
                    <p>Sunday:</p>
                    <p>4:00 pm – 2:00 am</p>
                </div>
                <div>
                    <a href="#">Visit Us</a>
                </div>
            </div>
            <div class="imgres"></div>
            <div class="besthours">
                <div>
                    <p>The best offer</p>
                    <p>Happy hour</p>
                </div>
                <div>
                    <p>Monday – Sunday:</p>
                    <p>4:00 pm – 7:00 pm</p>
                </div>
                <div>
                    <p>20% off all wine by the glass</p>
                    <p>15% off all cocktails</p>
                </div>
                <div>
                    <p>25% off selected craft beer</p>
                    <p>10% off all spirits</p>
                </div>
                <div>
                    <a href="#">View more</a>
                </div>
            </div>
        </div>
    </div>

    <div class="img"></div>


    <div class="recommend">

        <div class="aboutrec">
            <div>
                <p>This week’s specials</p>
            </div>
            <div>
                <p>We recommend</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiu smod tempor incididunt ut labore etdo</p>
            </div>
        </div>

        <div class="restaurant-menu-list-holder">
            <div class="menu-list">
                <ul>
                    <li>
                        <div class="menu-name">
                            <h2>Coco spice</h2>
                            <div></div>
                            <h3>$19</h3>
                        </div>

                        <span>Captain Morgan spiced rum, pineaple</span>
                    </li>
                    <li>
                        <div class="menu-name">
                            <h2>Tequila Sunrise</h2>
                            <div></div>
                            <h3>$14</h3>
                        </div>
                        <span>Tequila, orange juice, grenadine</span>
                    </li>
                    <li>
                        <div class="menu-name">
                            <h2>Cuba Libre</h2>
                            <div></div>
                            <h3>$22</h3>
                        </div>
                        <span>Dark rum, fresh lime, Coke</span>
                    </li>
                    <li>
                        <div class="menu-name">
                            <h2>Gin Fizz</h2>
                            <div></div>
                            <h3>$24</h3>
                        </div>
                        <span>Bombay Sapphire gin, Ginger beer, lime juice</span>
                    </li>
                    <a href="#">View More</a>
                </ul>
            </div>
            <div class="imgrec"></div>
        </div>

    </div>

    <div class="promotions">
        <div class="prom1">
            <div>
                <p>Promotions</p>
            </div>
            <div>
                <a href="#">Learn more</a>
            </div>
        </div>
        <div class="prom2">
            <img src="./img/pin.png">
        </div>
        <div class="prom3">
            <div>
                <p>Promotions</p>
            </div>
            <div>
                <a href="#">Learn more</a>
            </div>
        </div>
    </div>

    <footer>
        <?php include_once "futer.php"; ?>
    </footer>

    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="./js/scripthome.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#date", {
            dateFormat: "d-m-Y ",
        });
    </script>

</body>

</html>
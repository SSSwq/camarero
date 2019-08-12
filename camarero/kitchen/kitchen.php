<?php
include ('../scripts php/db.php');
?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>kitchen</title>
        <link href="kitchen.css" rel="stylesheet" type="text/css">
        <script src="kitchen.js" type="text/javascript"></script>
        <link href="https://fonts.googleapis.com/css?family=Gudea&display=swap" rel="stylesheet"> <!-- шрифт Gudea-->
        <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet"> <!-- Шрифт Monoton -->
        <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet"> <!-- Шрифт Nanum Gothic-->
    </head>
    <body>
        <div class="general">
            <nav class="nav_line">
                <div id="name_dish"><p>Dish</p></div>
                <div id="name_number"><p>Number</p></div>
                <div id="name_time_of_order"><p>Time of order</p></div>
                <div id="name_order_status"><p>Order status</p></div>
                <div id="name_table_id"><p>table ID</p></div>
            </nav>
            <main class="main">
                <div class="f_dish">
                    <div class="dish_1"><p class="dish_1">King`s pancackes with chilli</p></div>
                    <div class="number_1"><p>1</p></div>
                    <div class="time_of_order_1"><p>14:30</p></div>
                    <div class="order_status_1"><p>Waiting for the waiter</p></div>
                    <div class="table_id_1"><p>1</p></div>
                </div>
                <div class="s_dish">
                    <div class="dish_2"><p>Grillage with dark chocolate</p></div>
                    <div class="number_2"><p>2</p></div>
                    <div class="time_of_order_2"><p>14:30</p></div>
                    <div class="order_status_2"><p>The order is accepted, in progress</p></div>
                    <div class="table_id_2"><p>1</p></div>
                </div>

            </main>
            <div class="lines">
                <div id="h_line_1"></div>
                <div id="h_line_2"></div>
                <div id="h_line_3"></div>
                <div id="h_line_4"></div>
                <div id="w_line_1"></div>
            </div>
            <footer class="footer">
                <div class="all_border">
                    <div id="cam"><p>Camarero</p></div>
                    <div id="other_text"><p>New approach to the customer</p></div>
                </div>
                <div class="time">
                    <div id="border_time"></div>
                    <div id="now_time">
                        <p>
                            <?php
                                echo date('H:i');
                            ?>
                        </p>
                    </div>
                </div>
            </footer>
        </div>

    </body>

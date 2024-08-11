<?php
session_start();

if (!isset($_SESSION['user'])) {
    $_SESSION['msg'] = "You must log in first";
    header("location: login.php");
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: index.php");
}
$db =
    mysqli_connect("localhost", "root", "", "hms", "3308");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="css/booking.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dashboard</title>
</head>

<body>

    <div style="height: 100%;" class="row">
        <div class="column" style="background-color:whitesmoke; flex:10%; text-align:center;height: 100%;">
            <img class="dashavatar" src="avatars/avatar1.jpeg" alt="">
            <h2 class="username">
                <?php
                $sql = "select * from userlogin where email = '" . $_SESSION['first'] . "'";
                $stmt = mysqli_query($db, $sql);
                $row = mysqli_fetch_array($stmt);
                $first = $row['first_name'];
                $last = $row['last_name'];

                echo
                $first, "<br>",
                $last;
                ?>
            </h2>

            <h6 class="usermail"><?php echo $_SESSION['first']; ?></h6>
            <div class="dashfooter">
                <a href="dash.php?logout='1'">
                    <button id="logout" class="buttons">Logout</button>
                </a>
                <p style="margin: 0 auto;display: block;color: #111;width: 218px;font-family: Montserrat;">Copyright © 2024 All Rights Reserved Privacy policy | Terms and Conditions</p>
            </div>
        </div>

        <div class="column" style="background-color:white;">

            <div class="dashcontent">
                <img src="logo.jpg" alt="">
                <h2>Bookings</h2>
                <a class="addbooking" href="index.php">+</a>

            </div>

            <div class="dashbookings">
                <div class="bookingcard">
                    <?php

                    $getbooking = "SELECT * from bookings where email = '" . $_SESSION['first'] . "'";
                    $stmts = mysqli_query($db, $getbooking);
                    while ($rowz = mysqli_fetch_array($stmts)) {
                        
                    $arrival = $rowz['arrival'];
                    $departure = $rowz['departure'];
                    $adults = $rowz['adults'];
                    $children = $rowz['children'];
                    $hotel = $rowz['hotel'];

                    echo "
                    <div class = 'bookingbox'>
                    <div class='card_header'>
                    <div class='card_head_text'>
                    <p class='card_head_text_p'>Arrival Date</p>
                    <p class='card_head_text_p2'>$arrival</p>
                    <p class='card_head_text_p'>Departure Date</p>
                    <p class='card_head_text_p2'>$departure</p>
                    <p class='card_head_text_p'>Adults</p>
                    <p class='card_head_text_p2'>$adults</p>
                    <p class='card_head_text_p'>Children</p>
                    <p class='card_head_text_p2'>$children</p>
                    <p class='card_head_text_p'>Hotel</p>
                    <p class='card_head_text_p2'>$hotel</p>
                </div>
                </div>
                </div>
                ";}
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php include('include/logfunction.php') ?>
<?php include('include/db.php') ?>


<?php


if (!isset($_SESSION['user'])) {
    $_SESSION['msg'] = "You must log in first";
    header("location: login.php");
}




$_SESSION["arrival"] = $_GET["arrival"];
$_SESSION["departure"] = $_GET["departure"];
$_SESSION["adults"] = $_GET["Adults"];
$_SESSION["children"] = $_GET["Children"];
$_SESSION["hotel"] = $_GET["Hotel"];
                   



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
    <link rel="stylesheet" href="css/booking.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Bookings</title>
</head>

<body>

    <img class="backgroundimg" src="apricots.svg" alt="">
    <div class="card">
        <form method="post" action="checkout.php">
            <div class="card_header">
                <div class="card_head_text">
                    <p class="card_head_text_p">Arrival Date</p>
                    <p class="card_head_text_p2"><?php echo $_GET["arrival"]; ?></p>
                    <p class="card_head_text_p">Departure Date</p>
                    <p class="card_head_text_p2"><?php echo $_GET["departure"]; ?></p>
                    <p class="card_head_text_p">Adults</p>
                    <p class="card_head_text_p2"><?php echo $_GET["Adults"]; ?></p>
                    <p class="card_head_text_p">Children</p>
                    <p class="card_head_text_p2"><?php echo $_GET["Children"]; ?></p>
                    <p class="card_head_text_p">Hotel</p>
                    <p class="card_head_text_p2"><?php echo $_GET["Hotel"]; ?></p>
                </div>

                <img class="logoform" style="width:100px;" src="logo.jpg" alt="">
            </div>


            <div class="card_body">
                <?php
                if ($_GET["Adults"] == 1) {
                    echo ' <div class="card_booking">
                <img class = "card_booking_img" src="images/queenroom.jpg" alt="">
                <div class = "card_booking_details">
                    <h5>The Hotel Queen Room</h5>
                    <span class="material-symbols-outlined">bed</span><span>x1</span>
                    <p>Stanley Queen Rooms at Sarova Stanley offer the rare luxury of space, the largest in their category in the city, having been built at a time when space was never a constraint. The rooms are done up in classical style with chintz furnishings and plush carpeting.j</p>
                    <h6>Average Nightly rate</h6> 
                    <p>23,000 KES</p>
                    <button class="Booknow" >Book Now</button>
                </div>
            </div>


               <div class="card_booking">
                <img class = "card_booking_img" src="images/club.jpg" alt="">
                <div class = "card_booking_details">
                        <h5>The Hotel Club Room</h5>
                        <span class="material-symbols-outlined">bed</span><span>x1</span>
                        <p>Club Rooms offer a very comfortable stay featuring elegant interiors and amenities such a floral arrangement in the bedroom, fluffy white terry towel robes and slippers, free internet access and 42 inch flat-screen televisions. Club Room guests also enjoy evening canapes on the house followed by aromatic candles and chocolates for turn down service.   Guests booked under Stanley Club Rooms have exclusive access to the 1902 Club Lounge</p>
                        <h6>Average Nightly rate</h6> 
                        <p>32,000 KES</p>
                        <button class="Booknow" >Book Now</button>
                </div>
            </div>
             
            ';
                }

                ?>

                <?php
                if ($_GET["Adults"] == 2) {
                    echo ' 
                
                <div class="card_booking">
                <img class="card_booking_img" src="images/twin.jpg" alt="">
                <div class="card_booking_details">
                    <h5>The Hotel Twin Room</h5>
                    <span class="material-symbols-outlined">single_bed</span><span>x1</span>
                    <span class="material-symbols-outlined">single_bed</span><span>x1</span>
                    <p>Stanley Twin Rooms at Sarova Stanley offer the rare luxury of space, the largest in their category in the city, having been built at a time when space was never a constraint. The rooms are done up in classical style with chintz furnishings and plush carpeting.</p>
                    <h6>Average Nightly rate</h6>
                    <p>28,000 KES</p>
                    <button class="Booknow">Book Now</button>
                </div>
            </div>


              <div class="card_booking">
                <img class="card_booking_img" src="images/clubtwin.jpg" alt="">
                <div class="card_booking_details">
                    <h5>The Hotel Club Twin Room</h5>
                    <span class="material-symbols-outlined">single_bed</span><span>x1</span>
                    <span class="material-symbols-outlined">single_bed</span><span>x1</span>
                    <p>Club Twin Rooms offer a very comfortable stay featuring elegant interiors and amenities such a floral arrangement in the bedroom, fluffy white terry towel robes and slippers, free internet access and 42 inch flat-screen televisions.</p>
                    <h6>Average Nightly rate</h6>
                    <p>34,000 KES</p>
                    <button class="Booknow">Book Now</button>
                </div>
            </div>
             
            ';
                }
                ?>


            </div>
        </form>
    </div>
    <p style="position: absolute;
    font-size: 13px;
    left: 1%;
    top: 120%;
    padding: 40px;
    color: #113;
    font-family: Montserrat;">Copyright © 2024 All Rights Reserved Privacy policy | Terms and Conditions</p>
</body>

</html>
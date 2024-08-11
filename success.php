<?php include('include/db.php') ?>
<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "hms", "3308");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Stripe Example</title>
    <meta charset="UTF-8" />
</head>

<body>

<h1>The Hotel</h1>
<?php

$query = "INSERT INTO bookings (email,arrival, departure, adults, children,hotel)
  			  VALUES('".$_SESSION['first']. "' ,'" . $_SESSION['arrival'] . "', '" . $_SESSION['departure'] . "', '" . $_SESSION['adults'] . "', '" . $_SESSION['children'] . "','" . $_SESSION['hotel'] . "'     )";
$results = mysqli_query($db, $query);


if ($results === true) {
    echo '<script>alert("Check Dashboard to confirm booking!");
            location.href="dash.php";
            </script>';
} else {

    array_push($errors, "Failed to Confirm Payment ");
}




?>
<p>Thank you for your payment!</p>

</body>

</html>
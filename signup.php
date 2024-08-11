<?php include('include/signupfunction.php') ?>
<?php include('include/db.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Sign up</title>
</head>

<body>

    <img class="backgroundimg" src="apricots.svg" alt="">

    <div class="card1">
        <form method="post" action="signup.php">
            <div class="container">
                <h4 style="font-size: 30px; margin-bottom:40px; text-align:center;"><b>Sign Up</b></h4>
                <div class="login.">
                    <?php include('include/errors.php'); ?>
                    <span style="font-weight: lighter;">First Name</span>
                    <br>
                    <br>
                    <input class="inputlg" type="text" name="firstname" id="firstname">
                    <br>
                    <br>
                    <span style="font-weight: lighter;">Last Name</span>
                    <br>
                    <br>
                    <input class="inputlg" type="text" name="lastname" id="lastname">
                    <br>
                    <br>
                    <span style="font-weight: lighter;">Email Address</span>
                    <br>
                    <br>
                    <input class="inputlg" type="text" name="emailsg" id="email">
                    <br>
                    <br>
                    <span style="font-weight: lighter;">Password</span>
                    <br>
                    <br>
                    <input class="inputlg" type="text" name="passwordsg" id="password">
                    <br>
                    <br>
                    <span style="font-weight: lighter;">Phonenumber</span>
                    <br>
                    <br>
                    <input class="inputlg" type="integer" name="phonenumber" id="phonenumber">
                    <button type="submit" class="login" name="signup_user">Login</button>
                </div>
            </div>
        </form>

        <img style="width:100px;" src="logo.jpg" alt="">
    </div>
    <p style="font-size: 13px;left:1% ;bottom: 2%; color:#111; font-family:Montserrat;margin-top: 40px;padding-bottom: 30px;">Copyright © 2024 All Rights Reserved Privacy policy | Terms and Conditions</p>



</body>


</html>
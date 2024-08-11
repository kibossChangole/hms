<?php include('include/logfunction.php') ?>
<?php include('include/db.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>

    <img class="backgroundimg" src="apricots.svg" alt="">

    <div class="card">
        <form method="post" action="login.php">
            <div class="container">
                <h4 style="font-size: 30px; margin-bottom:20px; text-align:center;"><b>Login</b></h4>
                <div class="login.">
                    <?php include('include/errors.php'); ?>
                    <span style="font-weight: lighter;">Email Address</span>
                    <br>
                    <br>
                    <input class="inputlg" type="text" name="emailg" id="email">
                    <br>
                    <br>
                    <span style="font-weight: lighter;">Password</span>
                    <br>
                    <br>
                    <input class="inputlg" type="text" name="passwordg" id="password">
                    <a class = "signuplink" href="signup.php">Not registered? Create an account</a>
                    <button type="submit" class="login" name="login_user">Login</button>
                </div>
            </div>
        </form>

        <img style="width:100px;" src="logo.jpg" alt="">
    </div>
    <p style=" position: absolute; font-size: 13px;left:1% ;bottom: 2%; color:#111; font-family:Montserrat;">Copyright © 2024 All Rights Reserved Privacy policy | Terms and Conditions</p>



</body>


</html>
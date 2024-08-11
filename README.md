# HMS
The Hotel - Hotel Management System
Homepage
Click Login/ Sign-up
Create Account or Login using credentials 
Current Users
 

Booking
•	Use the sticky navigation bar on the screen to create a booking
•	After attempting to make a booking you will be redirected to the login page where you will need to create/login to an account first
•	After doing so a session will be created allowing you to create a booking by clicking the + button

 

•	You will need to input your suite requirements to go forward to the booking page where you can select a suite
•	Afterwards you will be taken to the payment gateway

•	Use the following Test cards to initiate a booking
 

•	Once payment is successful you will be redirected to the dashboard where you will be able to see your booking

Code Explanation
Connection to the database is made in the db.php file

User Registration
The login function is written in PHP and communicates with the SQL database to validate credentials
The frontend is found in signup.php
While the backend script is found in include/signupfunction.php


User Login
The login function is written in PHP and communicates with the SQL database to validate credentials
The frontend is found in Login.php
While the backend script is found in include/logfunction.php


Dashboard
The dashboard utilises PHP to communicate with the database and retrieves records from Mysql
Dash.php

Booking
The booking page uses a form to get the details input in the sticky navigation bar and is in Booking.php

Payment Gateway
The payment gateway uses Stripe API and is configured in Checkout.php

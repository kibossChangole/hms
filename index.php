<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/bookingnav.css">
  <link rel="stylesheet" href="css/slider.css">
  <link rel="stylesheet" href="css/flexslider.css">
  <link rel="stylesheet" href="css/gallery.css">
  <link rel="stylesheet" href="css/card.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

  <title>HMS</title>
</head>

<body>
  <header>
    <!---
      <div class="logo">
        <p>Mombasa</p>
        <p>|</p>
        <p>Kampala</p>
        <p>|</p>
        <p>Momo</p>
      -->
    <img src="logo.jpg" alt="">
    </div>
  </header>

  <div id="booking" class="bookingnav">

    <form id="bookingform" action="booking">

      <div class="menu-item">
        <h4>Arrival</h4>
        <input class="departure" type="date" id="arrival" name="arrival" required>
      </div>

      <div class="menu-item">
        <h4>Departure</h4>
        <input class="arrival" type="date" id="departure" name="departure" required>
      </div>

      <div class="menu-item">
        <h4>Adults</h4>
        <select name="Adults" class="adults" id="Adults" form="bookingform">
          <option value="1">1</option>
          <option value="2">2</option>


        </select>
      </div>

      <div class="menu-item">
        <h4>Children</h4>
        <select name="Children" class="adults" id="Adults">
          <option value="1">1</option>
          <option value="2">2</option>

        </select>
      </div>

      <div class="menu-item">
        <h4>Hotel</h4>
        <select name="Hotel" class="adults" id="Adults">
          <option value="Mombasa">Mombasa</option>
          <option value="Nairobi">Nairobi</option>
          <option value="Nakuru">Nakuru</option>
        </select>
      </div>

      <div class="menu-item" style="border-right:0px;">
        <button class="book" type="submit">Book Now</button>

      </div>

    </form>

  </div>

  <div id="section" class="section">
    <div class="split1">
      <img class="big" src="images/hotelhome3.jpg" alt="">
      <a href="signup.php"><button type="button" class="findus" name="button">Sign Up | Join</button></a>
      <p style=" position: absolute; font-size: 13px;left:3% ;bottom: 15%; color:#fff; font-family:Montserrat;">Copyright © 2024 All Rights Reserved Privacy policy | Terms and Conditions</p>


    </div>


    <div class="split2">
      <div class="allbutton">

        <a href="login.php"><button type="button" class="Login" name="button">Login</button></a>

        <a href="#section1"><button type="button" class="about" name="button">About</button></a>

        <a href="#section2"><button type="button" class="products" name="button">Gallery</button></a>

        <a href="#section3"><button type="button" class="seemenu" name="button">View Menu</button></a>

        <a href="#section5"><button type="button" class="contact" name="button">Contact Us</button></a>

      </div>
      <img class="backgroundimg" src="apricots.svg" alt="">



    </div>

  </div>

  <div id="section1" class="section1">

    <div class="containercl2">
      <div class="row" style="height: 100%; background-color:whitesmoke;">
        <div class="col-md">
          <img class="cl_images" src="images/cl4.jpg" alt="">
        </div>
        <div class="col-md">
          <h4 style="margin: 50px;text-align: center;border-bottom: 1px solid;padding: 30px;font-family: 'Montserrat';">The Hotel</h4>
          <p style="font-size: 14px; text-align: center;margin: 50px;font-family: 'Montserrat';">Welcome to The Hotel, where luxury meets comfort in the heart of Gotham. Our elegantly designed rooms and suites offer a perfect blend of modern amenities and classic charm. Enjoy breathtaking views, world-class dining, and exceptional service that caters to your every need. Whether you're here for business or leisure, our prime location and top-notch facilities ensure a memorable stay. Relax in our spa, unwind by the pool, or explore the vibrant local attractions. At The Hotel, we promise an unforgettable experience from the moment you arrive. Book your stay with us today!</p>
        </div>
        <div class="col-md">
          <img class="cl_images" src="images/cl2.jpg" alt="">
        </div>
        <div class="col-md">
          <h4 style="margin: 50px;text-align: center;border-bottom: 1px solid;padding: 30px;font-family: 'Montserrat';">The Spa</h4>
          <p style="font-size: 14px; text-align: center;margin: 50px;font-family: 'Montserrat';"> Indulge in ultimate relaxation at our luxurious spa at The Hotel. Our serene sanctuary offers a range of rejuvenating treatments designed to refresh your mind, body, and soul. From soothing massages and revitalizing facials to invigorating body scrubs and aromatherapy, our expert therapists use premium products to ensure a truly blissful experience. Whether you seek relaxation or revitalization, our spa provides the perfect escape from the everyday hustle. Treat yourself to a day of pampering and emerge feeling renewed and invigorated at The Hotel's spa.</p>
        </div>
      </div>
    </div>

  </div>

  <div id="section2" class="section2">
    <img style="position: absolute;width: 90px;left: 0px;" class="backgroundimgs" src="apricots.svg" alt="">
    <div style=" " class="containers3">
      <h4 style="margin: 10px 50px 50px 50px; text-align: center;border-bottom: 1px solid;padding: 30px;font-family: 'Montserrat';">Gallery</h4>
      <div class="row">
        <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
          <img src="images/hotelhome.jpg" class="img-fluid rounded">
        </a>
        <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
          <img src="images/cl3.jpg" class="img-fluid rounded">
        </a>
        <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
          <img src="images/cl5.jpg" class="img-fluid rounded">
        </a>
      </div>
      <div class="row">
        <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
          <img src="images/cl10.jpg" class="img-fluid rounded">
        </a>
        <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
          <img src="images/cl8.jpg" class="img-fluid rounded">
        </a>
        <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
          <img src="images/cl6.jpg" class="img-fluid rounded">
        </a>
      </div>
    </div>
  </div>

  <div id="section5" style="background-color: whitesmoke;">
    <h4 style="margin: 10px 100px 50px 100px;text-align: center;border-bottom: 1px solid;padding: 70px 30px 30px 30px;font-family: 'Montserrat';">Reviews</h4>
    <div class=" section5">
      <input type="radio" name="position" />
      <input type="radio" name="position" />
      <input type="radio" name="position" checked />
      <input type="radio" name="position" />
      <input type="radio" name="position" />

      <main id="carousel">
        <div class="item">
          <div>
            <img class="revimg" src="avatars/avatar3.jpg" alt="">
          </div>
          <div class="reviewtxt">
            <h6>John Doe</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="item">
          <div>
            <img class="revimg" src="avatars/avatar1.jpeg" alt="">
          </div>
          <div class="reviewtxt">
            <h6>John Doe</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="item">
          <div>
            <img class="revimg" src="avatars/avatar2.jpg" alt="">
          </div>
          <div class="reviewtxt">
            <h6>John Doe</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="item">
          <div>
            <img class="revimg" src="avatars/avatar4.jpg" alt="">
          </div>
          <div class="reviewtxt">
            <h6>John Doe</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="item">
          <div>
            <img class="revimg" src="avatars/avatar2.jpg" alt="">
          </div>
          <div class="reviewtxt">
            <h6>John Doe</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>

        <main>
    </div>
  </div>

  <div id="section3" class="section3">
    <div class="buttons">
      <button type="button" name="button">Menus</button>
    </div>
    <div class="buttons">
      <button id="kampala" type="button" name="button">Kampala</button>
      <button id="mombasa" type="button" name="button">Mombasa</button>
      <button id="momo" type="button" name="button">Momo</button>
    </div>
    <div id="everything" class="everything">
      <div id="menus" class="menus">
      </div>
    </div>
  </div>

  <div id="section4" class="section4">

    <div class="alllocals">

      <div id="location1" class="location">
        <div class="logo">
          <img src="logo.jpg" alt="">
        </div>

        <div class="row">
          <div class="time">
            <div class="title">
              <h6>The Hotel Mombasa</h6>
            </div>

            <div class="address">
              <p>Ground Floor, </p>
              <p>City Mall - Nyali</p>
              <p>Mombasa - Kenya</p>
              <p>shpak@TheHotel.com</p>
              <p>+254.202.023.769</p>
            </div>
          </div>

          <div class="time">
            <div class="title">
              <h6>Opening hours</h6>
            </div>

            <div class="address">
              <p>Mon - Thu : 7:30 AM - 23:30 PM</p>
              <p>Fri - Sun : 7:30 AM - 12 PM</p>
            </div>
          </div>


        </div>
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.002590740254!2d39.718582014755754!3d-4.019864745849564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18400df13ccf766f%3A0xd3a00b7be14c0c29!2sCafesserie-Mombasa!5e0!3m2!1sen!2ske!4v1603238412959!5m2!1sen!2ske" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>

      <div id="location2" class="location">
        <div class="logo">
          <img src="logo.jpg" alt="">
        </div>

        <div class="row">
          <div class="time">
            <div class="title">
              <h6>The Hotel Kampala</h6>
            </div>

            <div class="address">
              <p>Ground Floor,</p>
              <p>Acacia Mall kololo</p>
              <p>Kampala, Uganda</p>
              <p>shpak@TheHotel.com</p>
              <p>+256.787.968.080</p>
            </div>
          </div>

          <div class="time">
            <div class="title">
              <h6>Opening hours</h6>
            </div>

            <div class="address">
              <p>Mon - Thu : 7:30 AM - 23:30 PM</p>
              <p>Fri - Sun : 7:30 AM - 12 PM</p>
            </div>
          </div>

        </div>

        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.74877740609!2d32.5848049147335!3d0.3382892640843625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbba6692c7769%3A0xdb9982524952a89e!2sCafesserie!5e0!3m2!1sen!2ske!4v1603239452764!5m2!1sen!2ske" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        </div>

      </div>

      <div id="location3" class="location">
        <div class="logo">
          <img src="logo.jpg" alt="">
        </div>

        <div class="row">
          <div class="time">
            <div class="title">
              <h6>The Hotel Village</h6>
            </div>

            <div class="address">
              <p>Bogalobi- Kampala</p>
              <p>immy@TheHotel.com</p>
              <p>+256.793.524.526</p>
            </div>
          </div>

          <div class="time">
            <div class="title">
              <h6>Opening hours</h6>
            </div>

            <div class="address">
              <p>Mon - Thu : 7:30 AM - 23:30 PM</p>
              <p>Fri - Sun : 7:30 AM - 12 PM</p>
            </div>
          </div>

        </div>

        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.756218526002!2d32.615119614733544!3d0.3196787641079454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb155cc1a04f%3A0x66b3059d451c7a77!2sCafesserie%20Village%20Mall!5e0!3m2!1sen!2ske!4v1603240045067!5m2!1sen!2ske" width="100%" height="250" frameborder="0" style="border:0;margin-top: 55px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>

      <div id="location4" class="location">
        <div class="logo">
          <img src="logo.jpg" alt="">
        </div>

        <div class="row">
          <div class="time">
            <div class="title">
              <h6>The Hotel Jinja</h6>
            </div>

            <div class="address">
              <p>Bogalobi- kampala Uganda</p>
              <p>info@TheHotel.com</p>
              <p>+256 772 995 414</p>
            </div>
          </div>

          <div class="time">
            <div class="title">
              <h6>Opening hours</h6>
            </div>

            <div class="address">
              <p>Mon - Thu : 10:00 AM - 7:30 PM</p>
              <p>Fri - Sun : 10:00 AM - 7:30 PM</p>
            </div>
          </div>

        </div>
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.756222100384!2d32.615127214733576!3d0.31966956410795627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb36521e37cf%3A0x1b547895acd8a313!2sMomo%20Shawarma%20by%20Cafesserie!5e0!3m2!1sen!2ske!4v1603240143778!5m2!1sen!2ske" width="100%" height="250" frameborder="0" style="border:0; margin-top: 55px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

      </div>

    </div>



  </div>
  <!--
  <div id="section5" class="section1">
    <div class="title">
      <img src="images/hr_banner_box.png" alt="">
      <h6 style="font-size:25px;">Contact us</h6>

    </div>
    
    <div class="contact">
      <div class="input-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="">

      </div>

      <div class="input-group">
        <label for="email">Email</label>
        <input type="text" name="email" value="">

      </div>

      <div class="input-group">
        <label for="subject">Subject</label>
        <input type="text" name="subject" value="">

      </div>

      <div class="input-group">
        <label for="message">Message</label>
        <textarea name="message" style="height:13vh; width:60%;" rows="8"></textarea>

      </div>

      <div class="input-group">
        <button class="submit" type="button" name="button">Submit</button>

      </div>
    </div>
          -->
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
  <script src="js/slider.js" charset="utf-8"></script>
  <script src="js/navmenu.js"></script>
  <script src="js/gallery.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
    // Can also be used with $(document).ready()
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide"
      });
    });

    var kampala = document.getElementById("kampala");
    $(document).on('click', '#kampala', function(e) {
      e.preventDefault();
      if ($("#menus").children().length === 0) {
        $("#menus").append(" <img src='images/menus/kampalabig.png'></img>");
        $("#menus").append(" <button type='button' name='button'>Download Kampala Menu</button>");
      } else {
        $("#menus").empty();
        $("#menus").append(" <img src='images/menus/kampalabig.png'></img>");
        $("#menus").append(" <button type='button' name='button'>Download Kampala Menu</button>");
      }
    });

    var mombasa = document.getElementById("mombasa");
    $(document).on('click', '#mombasa', function(e) {
      e.preventDefault();
      if ($("#menus").children().length === 0) {
        $("#menus").append(" <img src='images/menus/mombasa.png'></img>");
        $("#menus").append(" <button type='button' name='button'>Download Mombasa Menu</button>");
      } else {
        $("#menus").empty();
        $("#menus").append(" <img src='images/menus/mombasa.png'></img>");
        $("#menus").append(" <button type='button' name='button'>Download Mombasa Menu</button>");
      }
    });

    var momo = document.getElementById("momo");
    $(document).on('click', '#momo', function(e) {
      e.preventDefault();
      if ($("#menus").children().length === 0) {
        $("#menus").append(" <img style= 'height:400px; width:550px;' src='images/menus/momo.png'></img>");
        $("#menus").append(" <button type='button' name='button'>Download Momo Menu</button>");
      } else {
        $("#menus").empty();
        $("#menus").append(" <img style= 'height:400px; width:550px;' src='images/menus/momo.png'></img>");
        $("#menus").append(" <button type='button' name='button'>Download Momo Menu</button>");
      }
    });
  </script>
</body>

</html>
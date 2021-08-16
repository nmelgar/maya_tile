<?php


if (isset($_POST['youremail']) && $_POST['youremail'] != '') {
  //IF email is valid, then send the email
  if (filter_var($_POST['youremail'], FILTER_VALIDATE_EMAIL)) {

    // submit the form
    $userName = $_POST['name'];
    $userEmail = $_POST['youremail'];
    $userPhone = $_POST['phonenumber'];
    $mailSubject = $_POST['subject'];
    $projectDescription = $_POST['description'];

    $to = "melgar.nefi@gmail.com";
    $body = "";

    $body .= "From: " . $userName . "\r\n";
    $body .= "Email: " . $userEmail . "\r\n";
    $body .= "Phone: " . $userPhone . "\r\n";
    $body .= "Message: " . $projectDescription . "\r\n";

    mail($to, $mailSubject, $body);

  }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Maya Tile & Design | Contact Us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/favicon.png">
  <meta charset="UTF-8">
  <meta name="description" content="Transform your space with profesional, honest, and responsible tile installation.">
  <meta name="keywords" content="design, maya tile, tile installation, tile, decoration, kitchen">
  <meta name="author" content="Maya Tile & Design">
  <meta name="robots" content="noodp,noydir" /><link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-204288776-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-204288776-1');
</script>
</head>

<body>
  <!--NAVIGATION BAR-->
  <nav class="header">
    <button class="hamburguer" id="hamburguer">
      <i class="fa fa-bars"></i>
    </button>
    <div class="list-of-items items-left" id="list-of-item">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="installations.html">Installation</a></li>
        <li><a href="design.html">Design</a></li>
        <li><a href="#" class="current">Contact Us</a></li>
      </ul>
    </div>


    <div class="logo-image">
      <a class="logo-brand" href="index.html"><img id="logo" src="images/logo.png" alt="mayatile logo"></a>
    </div>

    <div class="list-of-items items-right">
      <ul>
        <li><a target="_blank" href="https://www.facebook.com/Maya-Tile-Design-LLC-106513644976499"><i class="fa fa-facebook"></i></a></li>
        <li><a target="_blank" href="https://www.instagram.com/designmayatile/"><i class="fa fa-instagram"></i></a></li>
        <li><a target="_blank" href="https://www.linkedin.com/company/maya-tile-design-llc"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>

  </nav>

  <!--FASION BRANDS-->
  <section class="contact-info">
    <div class="title-style text-center">
      <h2>Contact Us</h2>
    </div>


    <!--CONTACT SECTION-->
    <div class="contact-section">
      <!--CONTACT LEFT-->
      <div class="contact-left">

        <form action="contact.php" method="POST">
          <label for="name">Your Name</label>
          <input type="text" id="name" name="name" placeholder="Your name.." required>

          <label for="youremail">Contact Email</label>
          <input type="email" id="youremail" name="youremail" placeholder="Your email" required>


          <label for="phonenumber">Your phone numer</label>
          <input type="number" id="phonenumber" name="phonenumber" placeholder="Phone number">

          <label for="subject">Subject</label>
          <input type="text" id="subject" name="subject" placeholder="Hello there!" required>

          <label for="description">Project description</label>
          <textarea id="description" name="description" placeholder="Tell us about your project" style="height:200px" required></textarea>

          <input type="submit" value="Submit">


        </form>
      </div>


      <!--CONTACT RIGHT-->
      <div class="contact-right">

        <ul class="fa-ul">
          <li><a target="_blank" href="https://www.facebook.com/Maya-Tile-Design-LLC-106513644976499"><i class="fa-li fa fa-facebook"></i>Facebook</a></li>
          <li><a target="_blank" href="https://www.instagram.com/designmayatile/"><i class="fa-li fa fa-instagram"></i>Instagram</a></li>
          <li><a target="_blank" href="https://www.linkedin.com/company/maya-tile-design-llc"><i class="fa-li fa fa-linkedin"></i>Linkedin</a></li>
          <li><a target="_blank" href="mailto:contact@mayatile.com"><i class="fa-li fa fa-at"></i>Email</a></li>
          <li><a target="_blank" href="tel:+1(480)454-0657"><i class="fa-li fa fa-phone"></i>Call Us</a></li>
          <li><a href=""><i class="fa-li fa fa-map-marker"></i>Phoenix, Arizona</a></li>

        </ul>
      </div>
    </div>
    <!--CONTACT SECTION ENDS-->



  </section>

  <!--footer-->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="roc-number">
            <h5>License Number</h5>
            <img src="images/roc-number.png" alt="image that shows the ROC numbers">
          </div>
        </div>
        <div class="col-md-4">
          <div class="insta-img">
            <h5>Get Inspiration</h5>
            <img src="images/insta1.jpg" alt="image of tiles to inspire others">
            <img src="images/insta2.jpg" alt="image of tiles to inspire others">
            <img src="images/insta3.jpg" alt="image of tiles to inspire others">
            <img src="images/insta4.jpg" alt="image of tiles to inspire others">
            <img src="images/insta5.jpg" alt="image of tiles to inspire others">
            <img src="images/insta6.jpg" alt="image of tiles to inspire others">
            <img src="images/insta7.jpg" alt="image of tiles to inspire others">
            <img src="images/insta8.jpg" alt="image of tiles to inspire others">
          </div>
        </div>
        <div class="col-md-4">
          <div class="app-download">
            <h5>Interesting Stuff</h5>
            <img src="images/love.png" alt="image that shows we love arizona">
            <a href="#"><img src="images/careers.png" alt="image that will lead to the careers"></a>
          </div>
        </div>

      </div>
      <hr>
      <div class="row">
        <div class="col-md-8">
          <p class="copyright">mayatile.com</p>
        </div>
        <div class="col-md-4">
          <div class="footer-icons">
            <a target="_blank" href="https://www.facebook.com/Maya-Tile-Design-LLC-106513644976499"><i class="fa fa-facebook"></i></a>
            <a target="_blank" href="https://www.linkedin.com/company/maya-tile-design-llc"><i class="fa fa-linkedin"></i></a>
            <a target="_blank" href="https://www.instagram.com/designmayatile/"><i class="fa fa-instagram"></i></a>
            <a target="_blank" href="mailto:contact@mayatile.com"><i class="fa fa-at"></i></a>
            <a target="_blank" href="tel:+1(480)454-0657"><i class="fa fa-phone"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="scripts/menu-script.js">

  </script>


</body>

</html>

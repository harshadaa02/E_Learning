<?php
session_start();

if(!isset($_SESSION['user_name'])){
  header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CONTACT</title>
    <link
      rel="stylesheet"
      href="
  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>

    <!-- NAVBAR -->

    <nav class="navbar">
      <div class="nav-heading"><i class="fas fa-book"></i><div>eLEARNING</div></div>
      <div class="display-user">
        Hey!
        <?php echo $_SESSION['user_name'];?>
      </div>
      <ul class="nav-ul">
        <a href="index.php"><li>HOME</li></a>
        <a href="about.php"><li>ABOUT</li></a>
        <a href="course.php"><li>COURSES</li></a>
        <a href="team.php"><li>TEAM</li></a>
        <a href="contact.php"><li>CONTACT</li></a>
        <a href="logout.php"
          ><button class="nav-btn">
            LOGOUT</button
        ></a>
      </ul>
    </nav>

    <!-- BANNER SECTION -->

    <div class="banner">
      <div class="banner-heading">Contact Us</div>
      <div class="breadcrumb-heading">Home/Contact</div>
    </div>

    <!-- CONTACT SECTION -->

    <div class="contact-categories">
      <div class="contact-subheading">Contact Us</div>
      <div class="contact-heading">Contact For Any Query.</div>
      <div class="contact-query">
        <div class="contact-details">
          <div class="contact-details-heading">Get In Touch</div>
          <div class="contact-details-desc">
            For general inquiries, assistance, or feedback regarding our
            e-learning platform, please feel free to contact our support team
            via email or phone. We strive to respond to all inquiries within
            24-48 hours.
          </div>
          <div class="contact-details-description">
            <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div>
              <p class="contact-para1">Company</p>
              <p class="contact-para2">Mumbai,Maharashtra,India</p>
            </div>
          </div>
          <div class="contact-details-description">
            <div class="contact-icon"><i class="fas fa-phone"></i></div>
            <div>
              <p class="contact-para1">Mobile</p>
              <p class="contact-para2">+012 345 67890</p>
            </div>
          </div>
          <div class="contact-details-description">
            <div class="contact-icon"><i class="fas fa-envelope-open"></i></div>
            <div>
              <p class="contact-para1">Email</p>
              <p class="contact-para2">info@example.com</p>
            </div>
          </div>
        </div>
        <div class="contact-map">
          <div class="mapouter">
            <div class="gmap_canvas">
            <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=550&amp;height=520&amp;hl=en&amp;q=pillai college of engineering,panvel&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            <a href="https://thepasswordgame.com/">The Password Game</a>
            </div>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    
    <footer>
      <div class="footer">
        <div>
          <p>QUICK LINKS</p>
          <ul>
            <li class="footer-li">About Us</li>
            <li class="footer-li">Contact Us</li>
            <li class="footer-li">Private Policy</li>
            <li class="footer-li">Terms & Conditions</li>
          </ul>
        </div>
        <div>
          <p>CONTACT</p>
          <ul>
            <li class="footer-li">
              <i class="fas fa-map-marker-alt footer-icon"></i
              >Mumbai,Maharashtra
            </li>
            <li class="footer-li">
              <i class="fas fa-phone footer-icon"></i>+012 345 67890
            </li>
            <li class="footer-li">
              <i class="fas fa-envelope footer-icon"></i>info@example.com
            </li>
          </ul>
          <div class="website-icons">
          <a href="https://www.facebook.com/"
              ><i class="fab fa-facebook-f footer-icons"></i
            ></a>
            <a href="https://www.youtube.com/"
              ><i class="fab fa-youtube footer-icons"></i>
            </a>
            <a href="https://www.twitter.com/"
              ><i class="fab fa-twitter footer-icons"></i
            ></a>
            <a href="https://www.linkedin.com/"
              ><i class="fab fa-linkedin-in footer-icons"></i
            ></a>
          </div>
        </div>
        <div>
          <p>Resources</p>
          <ul>
            <li class="footer-li">Articles</li>
            <li class="footer-li">Webinar</li>
            <li class="footer-li">eBooks</li>
            <li class="footer-li">Press Release</li>
          </ul>
        </div>
      </div>
      <div class="subfooter">
        © eLEARNING, All Right Reserved. Designed By eLEARNING
        <i class="fas fa-arrow-up" id="scrollTop"></i>
      </div>
    </footer>
    <script src="index.js"></script>
  </body>
</html>

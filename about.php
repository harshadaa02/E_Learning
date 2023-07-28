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
    <title>ABOUT</title>
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
      <div class="banner-heading">About Us</div>
      <div class="breadcrumb-heading">Home/About</div>
    </div>

    <!-- FEATURES SECTION -->

    <div class="features-container">
      <div class="features">
        <div class="features-icon"><i class="fas fa-graduation-cap"></i></div>
        <div class="features-heading">Skilled Instructor</div>
        <div class="features-p">
          Beacon of knowledge,expertise passion,a sense of belonging and
          empowering every learner to thrive.
        </div>
      </div>
      <div class="features">
        <div class="features-icon"><i class="fas fa-globe"></i></div>
        <div class="features-heading">Online Classes</div>
        <div class="features-p">
          Online classes offer flexible scheduling, allowing you to learn at
          your own pace and convenience.
        </div>
      </div>
      <div class="features">
        <div class="features-icon"><i class="fas fa-home-lg"></i></div>
        <div class="features-heading">Home Projects</div>
        <div class="features-p">
          Get hands-on with our home projects, designed to foster creativity and
          practical learning in the comfort of your own space.
        </div>
      </div>
      <div class="features">
        <div class="features-icon"><i class="fas fa-book-open"></i></div>
        <div class="features-heading">Book Library</div>
        <div class="features-p">
          Dive into a treasure trove of books in our expansive online library,
          curated to cater to the diverse interests and learning needs of our
          users.
        </div>
      </div>
    </div>

    <!-- ABOUT SECTION -->

    <div class="about">
      <div class="about-img"></div>
      <div class="about-desc">
        <div class="about-desc1">ABOUT US</div>
        <div class="about-desc2">Welcome to eLEARNING</div>
        <div class="about-desc3">
          We are dedicated to revolutionizing education through digital
          platforms.At our e-learning website, we believe that knowledge should
          be accessible to all, breaking down barriers and empowering learners
          worldwide.
        </div>
        <div class="about-desc4">
          Our mission is to provide high-quality and engaging learning
          experiences that inspire individuals to reach their full potential and
          achieve their goals.
        </div>
        <div class="about-features">
          <div class="about-points">
            <div>
              <i class="fa-solid fa-arrow-right" id="about-icon"></i>Skilled
              Instructor
            </div>
            <div>
              <i class="fa-solid fa-arrow-right" id="about-icon"></i>Self Paced
              Learning
            </div>
            <div>
              <i class="fa-solid fa-arrow-right" id="about-icon"></i
              >Multilingual Support
            </div>
            <div>
              <i class="fa-solid fa-arrow-right" id="about-icon"></i>Virtual
              Labs
            </div>
            <div>
              <i class="fa-solid fa-arrow-right" id="about-icon"></i>Progress
              Tracking
            </div>
          </div>
          <div class="about-points">
            <div>
              <i class="fa-solid fa-arrow-right" id="about-icon"></i
              >International Certifications
            </div>
            <div>
              <i class="fa-solid fa-arrow-right" id="about-icon"></i>Diverse
              Course Selection
            </div>
            <div>
              <i class="fa-solid fa-arrow-right" id="about-icon"></i>Simulations
            </div>
            <div>
              <i class="fa-solid fa-arrow-right" id="about-icon"></i>Analytics
            </div>
            <div>
              <i class="fa-solid fa-arrow-right" id="about-icon"></i>Feedback
            </div>
          </div>
        </div>
        <a href="#"><button class="about-btn">Read more.</button></a>
      </div>
    </div>

    <!-- FOOTER SECTION -->
    
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

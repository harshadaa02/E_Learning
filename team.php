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
    <title>TEAM</title>
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
      <div class="banner-heading">Team</div>
      <div class="breadcrumb-heading">Home/Team</div>
    </div>

    <!-- EXPERT INSTRUCTOR SECTION -->

    <div class="expert-instructor">
      <div class="instructor-subheading">INSTRUCTORS</div>
      <div class="instructor-heading">Expert Instructors</div>
      <div class="instructor-details">
        <div class="instructor">
          <div class="instructor-img"></div>
          <div class="instructor-smi">
          <a href="https://www.facebook.com/"><i class="fab fa-facebook smi"></i></a>
          <a href="https://www.instagram.com/"><i class="fab fa-instagram-square smi"></i></a> 
          <a href="https://www.twitter.com/"><i class="fab fa-twitter-square smi"></i></a> 
          </div>
          <div class="instructor-name">MICHAEL BROWN</div>
          <div class="instructor-edu">Web Developer</div>
        </div>
        <div class="instructor">
          <div class="instructor-img instructor2"></div>
          <div class="instructor-smi">
          <a href="https://www.facebook.com/"><i class="fab fa-facebook smi"></i></a>
          <a href="https://www.instagram.com/"><i class="fab fa-instagram-square smi"></i></a> 
          <a href="https://www.twitter.com/"><i class="fab fa-twitter-square smi"></i></a> 
          </div>
          <div class="instructor-name">EMILY JOHNSON</div>
          <div class="instructor-edu">UI/UX Designer</div>
        </div>
        <div class="instructor">
          <div class="instructor-img instructor3"></div>
          <div class="instructor-smi">
          <a href="https://www.facebook.com/"><i class="fab fa-facebook smi"></i></a>
          <a href="https://www.instagram.com/"><i class="fab fa-instagram-square smi"></i></a> 
          <a href="https://www.twitter.com/"><i class="fab fa-twitter-square smi"></i></a> 
          </div>
          <div class="instructor-name">DAVID WILSON</div>
          <div class="instructor-edu">Software Engineer</div>
        </div>
        <div class="instructor">
          <div class="instructor-img instructor4"></div>
          <div class="instructor-smi">
          <a href="https://www.facebook.com/"><i class="fab fa-facebook smi"></i></a>
          <a href="https://www.instagram.com/"><i class="fab fa-instagram-square smi"></i></a> 
          <a href="https://www.twitter.com/"><i class="fab fa-twitter-square smi"></i></a> 
          </div>
          <div class="instructor-name">OLIVIA THOMPSON</div>
          <div class="instructor-edu">DevOps Engineer</div>
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

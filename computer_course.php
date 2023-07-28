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
    <title>E-Learning Website</title>
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
      <div class="nav-heading">
        <i class="fas fa-book"></i>
        <div>eLEARNING</div>
      </div>
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
    <div class="course-heading title">Computer Network</div>
    <div class="course_preview">
        <div class="course_preview_img"><img src="images/network.jpg" alt=""></div>
        <div class="course_preview_content"> A computer network is a collection of interconnected devices, such as computers, servers, routers, switches, and other networking equipment, that communicate and share resources with each other. Networks enable the exchange of data, information, and resources, making them a fundamental component of modern computing.
       <div class="sub_title"><i class="fa-regular fa-circle-dot circle"></i>KEY CONCEPTS</div>
       <ul>
        <li><i class="fa-solid fa-arrow-right"></i>Network Topologies</li>
        <li><i class="fa-solid fa-arrow-right"></i>Network Protocols</li>
        <li><i class="fa-solid fa-arrow-right"></i>Local Area Network</li>
        <li><i class="fa-solid fa-arrow-right"></i>Wide Area Network </li>
        <li><i class="fa-solid fa-arrow-right"></i>Network Addressing</li>
        <li><i class="fa-solid fa-arrow-right"></i>Wireless Networks</li>
        <a href="https://rzp.io/l/L7JyMvxRD3"><button class="rzp-button">Pay Now!</button></a>
       </ul>
        </div>
    </div>

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
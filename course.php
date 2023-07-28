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
    <title>COURSES</title>
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
      <div class="banner-heading">Courses</div>
      <div class="breadcrumb-heading">Home/Courses</div>
    </div>

    <!-- COURSE CATEGORIES SECTION -->

    <div class="course-categories">
      <div class="course-subheading">CATEGORIES</div>
      <div class="course-heading">Courses Categories</div>
      <div class="course-img">
        <div class="course1">
          <div class="course-desc">
            Web Design
            <p>49 Courses</p>
          </div>
        </div>
        <div class="course2">
          <div class="course-desc">
            Video Editing
            <p>30 Courses</p>
          </div>
        </div>
        <div class="course-images">
          <div class="course3">
            <div class="course-desc">
              Graphic Design
              <p>40 Courses</p>
            </div>
          </div>
          <div class="course4">
            <div class="course-desc">
              Online Marketing
              <p>35 Courses</p>
            </div>
          </div>
        </div>
        <div class="course5">
          <div class="course-desc">
            Fashion design
            <p>42 Courses</p>
          </div>
        </div>
      </div>
    </div>

    <!-- POPULAR COURSE SECTION -->

    <div class="popular-course">
      <div class="course-subheading">COURSES</div>
      <div class="course-heading">Popular Courses</div>
      <div class="popular-courses-list">
        
          <div class="course-list1">
          <a href="ai_course.php"><div class="course-list-img"></div> </a>
           <div class="course-list-price">$149.00</div>
           <div class="course-list-icon">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
           </div>
           <div class="course-list-heading">Artificial Intelligence Course</div>
           <button class="buynow"><a href="ai_course.php">Buy Now!</a></button>
           <div class="course-list-details">
            <div class="details"><i class="fas fa-user-tie"></i>John Doe</div>
            <div class="details"><i class="fas fa-clock"></i>1.5 Hrs</div>
            <div class="details"><i class="fas fa-user"></i>30 Students</div>
           </div>
          </div>
       
     
       
        <div class="course-list1">
          <a href="cyber_course.php"><div class="course-list-img pop-list-img2"></div></a>
          <div class="course-list-price">$199.00</div>
          <div class="course-list-icon">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div class="course-list-heading">
            Cybersecurity & Hacking Course
          </div>
          <button class="buynow"><a href="cyber_course.php">Buy Now!</a></button>
          <div class="course-list-details">
            <div class="details">
              <i class="fas fa-user-tie"></i>Mary Joseph
            </div>
            <div class="details"><i class="fas fa-clock"></i>2.5 Hrs</div>
            <div class="details"><i class="fas fa-user"></i>25 Students</div>
          </div>
        </div>
        <div class="course-list1">
          <a href="computer_course.php"><div class="course-list-img pop-list-img3"></div></a>
          <div class="course-list-price">$199.00</div>
          <div class="course-list-icon">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div class="course-list-heading">Computer Network Course</div>
          <button class="buynow"><a href="computer_course.php">Buy Now!</a></button>
          <div class="course-list-details">
            <div class="details">
              <i class="fas fa-user-tie"></i>Shiny Smith
            </div>
            <div class="details"><i class="fas fa-clock"></i>2 Hrs</div>
            <div class="details"><i class="fas fa-user"></i>30 Students</div>
          </div>
        </div>
        <div class="course-list1">
          <a href="web_course.php"><div class="course-list-img pop-list-img4"></div></a>
          <div class="course-list-price">$199.00</div>
          <div class="course-list-icon">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div class="course-list-heading">
            Web Development Course
          </div>
          <button class="buynow"><a href="web_course.php">Buy Now!</a></button>
          <div class="course-list-details">
            <div class="details">
              <i class="fas fa-user-tie"></i>Mary Joseph
            </div>
            <div class="details"><i class="fas fa-clock"></i>2.5 Hrs</div>
            <div class="details"><i class="fas fa-user"></i>25 Students</div>
          </div>
        </div>
        <div class="course-list1">
          <a href="android_course.php"><div class="course-list-img pop-list-img5"></div></a>
          <div class="course-list-price">$199.00</div>
          <div class="course-list-icon">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div class="course-list-heading">
            Android App Development
          </div>
          <button class="buynow"><a href="android_course.php">Buy Now!</a></button>
          <div class="course-list-details">
            <div class="details">
              <i class="fas fa-user-tie"></i>Mary Joseph
            </div>
            <div class="details"><i class="fas fa-clock"></i>2.5 Hrs</div>
            <div class="details"><i class="fas fa-user"></i>25 Students</div>
          </div>
        </div>
        <div class="course-list1">
          <a href="graphic_course.php"><div class="course-list-img pop-list-img6"></div></a>
          <div class="course-list-price">$199.00</div>
          <div class="course-list-icon">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div class="course-list-heading">
            Graphic Designing Course
          </div>
          <button class="buynow"><a href="graphic_course.php">Buy Now!</a></button>
          <div class="course-list-details">
            <div class="details">
              <i class="fas fa-user-tie"></i>Mary Joseph
            </div>
            <div class="details"><i class="fas fa-clock"></i>2.5 Hrs</div>
            <div class="details"><i class="fas fa-user"></i>25 Students</div>
          </div>
        </div>
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



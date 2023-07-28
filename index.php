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
      <li><a href="index.php">HOME</a></li>
      <li><a href="about.php">ABOUT</a></li>
      <li><a href="course.php">COURSES</a></li>
      <li><a href="team.php">TEAM</a></li>
      <li><a href="contact.php">CONTACT</a></li>
      <li><a href="logout.php"
          ><button class="nav-btn">
            LOGOUT</button
        ></a>
      </ul>
    </nav>

    <!-- MAIN SECTION -->

    <div class="main">
      <p class="main-p1">BEST ONLINE COURSES</p>
      <h1 class="main-heading">THE BEST ONLINE LEARNING</h1>
      <h1 class="main-heading">PLATFORM</h1>
      <p class="main-p2">
        Explore a world of endless possibilities as you embark on a journey of
        lifelong learning.
      </p>
      <p class="main-p2">
        Embrace the power of digital learning, unlock your full potential,all at
        your own pace.
      </p>
      <div class="main-btn">
      <a href="about.php"><button class="main-button1">Read More</button></a>
      <a href="course.php"
          >  <button class="main-button2">Enroll Now</button></a
        >
      </div>
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
        <a href="about.php"><button class="about-btn">Read more.</button></a>
      </div>
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

    <!-- POPULAR COURSE CATEGORIES SECTION-->

    <div class="popular-courses">
      <div class="course-subheading">COURSES</div>
      <div class="course-heading">Popular Courses</div>
      <div class="popular-courses-list">
        <div class="course-list1">
          <div class="course-list-img"></div>
          <div class="course-list-price">$149.00</div>
          <div class="course-list-icon">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div class="course-list-heading">Artifical Intelligence Course</div>
          <button class="buynow"><a href="ai_course.php">Buy Now!</a></button>
          <div class="course-list-details">
            <div class="details"><i class="fas fa-user-tie"></i>John Doe</div>
            <div class="details"><i class="fas fa-clock"></i>1.5 Hrs</div>
            <div class="details"><i class="fas fa-user"></i>30 Students</div>
          </div>
         
        </div>
        <div class="course-list1">
          <div class="course-list-img pop-list-img2"></div>
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
          <div class="course-list-img pop-list-img3"></div>
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
      </div>
    </div>

    <!-- EXPERT INSTRUCTOR SECTION -->

    <div class="expert-instructor">
      <div class="instructor-subheading">INSTRUCTORS</div>
      <div class="instructor-heading">Expert Instructors</div>
      <div class="instructor-details">
        <div class="instructor">
          <div class="instructor-img"></div>
          <div class="instructor-smi smi">
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

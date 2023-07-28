<?php
include("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Page</title>
    <link
      rel="stylesheet"
      href="
    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
  <?php
    include ("connection.php");
    if(isset($_POST['register']))
    {
        //collect post variables
       $name=$_POST['name'];
       $email=$_POST['email'];
       $pass=$_POST['pass'];
       $query ="INSERT INTO `education` (`name`, `email`, `password`) VALUES ('$name', '$email', '$pass');";
       $data=mysqli_query($con,$query); //execute the query
       if($data)
       { 
        echo '<script> alert("REGISTRATION SUCCESSFUL") </script>'
        ?>
       <script>
            location.replace("login.php");
       </script>
       <?php
        // echo "Data inserted";
       }
       else{
        echo "Failed";
       }
    }
 ?>

    <!-- NAVBAR SECTION -->

    <nav class="navbar">
      <div class="nav-heading"><i class="fas fa-book"></i><div>eLEARNING</div></div>
      <ul class="nav-ul">
        <a href="registration.php"><li>HOME</li></a>
        <a href="registration.php"><li>ABOUT</li></a>
        <a href="registration.php"><li>COURSES</li></a>
        <a href="registration.php"><li>TEAM</li></a>
        <a href="registration.php"><li>CONTACT</li></a>
        <a href="registration.php"
          ><button class="nav-btn">
            JOIN NOW<i class="fa-solid fa-arrow-right"></i></button
        ></a>
      </ul>
    </nav>

    <!-- LOGIN SECTION -->

    <div class="login-section">
       <div class="login-img"></div>
       <div class="login-info">
        <p class="login-heading">Register</p>
        <form class="login-form" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>"  method="post" name="form" id="form" onsubmit="return isvalid()">
        <div class="login-user-section">
          <div><label for="name" class="login-form-title">Username</label></div>
          <div><input
              name="name"
              id="name"
              type="text"
              id="name"
              class="login-form-input"
            /></div>
        </div>
        <div class="login-user-section">
          <div><label for="name" class="login-form-title">Email</label></div>
          <div><input
              name="email"
              id="email"
              type="text"
              id="email"
              class="login-form-input"
            /></div>
        </div>
        <div class="login-user-section">
        <div><label for="pass" class="login-form-title">Password</label></div>
           <div><input
            id="pass"
            name="pass"
            type="password"
            id="pass"
            class="login-form-input"
            /></div> 
        </div>
        <div class="login-btn-section" >
        <button name="register" value="register" type="submit" class="login-user-btn" >
            Submit
        </button>
        </div>
        <div class="redirection">
            Already have an account?<a href="login.php">Log In</a>
          </div>
        </form>
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


<script>
  
  function isvalid(){
  
    var name=document.form.name.value;
    var email=document.form.email.value;
    var pass=document.form.pass.value;
      if(name.length=="" && email.length=="" && pass.length=="")
    {
      alert("Name,Email and Password Fields are empty!");
      return false;
    
    }
    else{
          
          if(name.length=="")
          {
            alert("Name Field is empty!");
            return false;
          }
          if(email.length=="")
          {
            alert("Email Field is empty!");
            return false;
          }
          if(pass.length=="")
          {
            alert("Password Field is empty!");
            return false;
          }
        }
 
  }
  </script>
  <script src="index.js"></script>
  </body>
</html>

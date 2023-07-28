<?php
session_start();
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link
      rel="stylesheet"
      href="
    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <?php
     include("connection.php");
     if(isset($_POST['submit']))
       {   
         $username=$_POST['name'];
         $pass=$_POST['pass'];
         $query="SELECT * FROM education WHERE name='$username' && password='$pass' ";
         $data=mysqli_query($con,$query);
         $row=mysqli_fetch_array($data,MYSQLI_ASSOC);
         $total=mysqli_num_rows($data);
         //echo $total;
           if($total==1)
            {
              $_SESSION['user_name']=$username;
              echo '<script> alert("LOGIN SUCCESSFUL") </script>';
              ?>
              <script>
               location.replace("index.php");
              </script>
             
              <?php
            }
           else{
              echo '<script> alert("LOGIN FAILED.Incorrect Email Or Password")</script>';?>
              <script>location.replace("login.php")</script> 
              <?php
            }
         }

    ?>

    <!--NAVBAR SECTION  -->

    <nav class="navbar">
      <div class="nav-heading"><i class="fas fa-book"></i><div>eLEARNING</div></div>
      <ul class="nav-ul">
        <a href="login.php"><li>HOME</li></a>
        <a href="login.php"><li>ABOUT</li></a>
        <a href="login.php"><li>COURSES</li></a>
        <a href="login.php"><li>TEAM</li></a>
        <a href="login.php"><li>CONTACT</li></a>
        <a href="login.php"
          ><button class="nav-btn">
            JOIN NOW<i class="fa-solid fa-arrow-right"></i></button
        ></a>
      </ul>
    </nav>
   
    <!-- LOGIN SECTION -->

    <div class="login-section">
       <div class="login-img"></div>
       <div class="login-info">
        <p class="login-heading">Login</p>
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
        <button name="submit" value="register" type="submit" class="login-user-btn" >
            Log In
        </button>
        </div>
        <div class="redirection">
            Not an existing user?<a href="registration.php">Sign In</a>
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
    function isvalid()
    {
      var email=document.form.email.value;
      var pass=document.form.pass.value;
        if(email.length=="" && pass.length=="")
          {
            alert("Email and Password Fields are empty!");
            return false;
           }
        else{
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

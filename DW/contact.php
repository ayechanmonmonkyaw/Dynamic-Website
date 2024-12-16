<!DOCTYPE html>
<html lang="en">
<head>
    <title>SMC/contact page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!--icon link-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--main css link-->
    <link rel="stylesheet" href="main.css">
     <!--contact css link-->
     <link rel="stylesheet" href="contact.css">
</head>
<body>
    <!--Navigation Start-->
    <nav class="navbar navbar-expand-md bg navbar-light fixed-top">
            
        <!-- Toggler/collapsibe Button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
          </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="home.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="info.html">Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="app.html">Apps</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="contact.php">Contact</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Family Focus Hub
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="tips.html">Tips For Parents</a>
                    <a class="dropdown-item" href="livestreaming.html">Livestreaming</a>
                    <a class="dropdown-item" href="guide.html">Legislation & Guidance</a>
                </div>
            </li>
            <div class="nav-item">
                <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()" placeholder="Search popular apps..">
            </div>
             
        </ul>
    </div>  
    </nav>
    <!-- Navigation End-->

    <!-- Contact-->
    <div class="container">
      <div class="container-fluid">
        <h3>Welcome to Social Media Campaign</h3>
        <p>At SMC, we are passionate about staying safe online.
           Explore our website to discover more about our initiatives, upcoming events. <br>
           Thank you for visiting and for your support!
        </p>
      </div>
        <div class="row">
            <div class="col-sm-6">
            <img src="../DW/homeimg/contact.png" alt="contact image">
            </div>
            <div class="col-sm-6">
               <div class="con">
                 <h2>Inform Us</h2>
               <form name="f1" action="contact.php" onsubmit="return validation()" method="post">
                <input type="text" name="fName" placeholder="First Name" autofocus="autofocus"> <br>
                <input type="text" name="email" placeholder="Email" required> <br>
                <textarea cols="25" rows="3" name="msg" placeholder="Text message"></textarea> <br>
                <input type="submit" class="btn" name="send" value="Send">
               </form>
               </div>
            </div>
            

          </div>
        </div>
       
    </div>
        
    </div>
    <script>
        function validation()
        {
            var fn = document.f1.fName.value;
            var em = document.f1.email.value;
            var msg = document.f1.msg.value;
            if(fn.length=="" && em.length=="" && msg.length=="")
            {
                alert("Please fill First name, email and text");
                return false;
            }
            else
            {
                if(fn.length==""){
                    alert("First name is empty");
                    return false;
                }
                if(em.length==""){
                    alert("Email is empty");
                    return false;
                }
                if(msg.length==""){
                    alert("Message is empty");
                    return false;
                }
            }
        }
    </script>
        <!--Footer Start-->
        <div class="bg">
      <footer
              class="text-center text-lg-start text-black"
              >
        <!-- Grid container -->
        <div class="container-fluid p-4 pb-0">
          <!-- Section: Links -->
          <section class="">
            <!--Grid row-->
            <div class="row">
              <!-- Grid column -->
              <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact Us</h6>
                <p><i class="fas fa-home mr-3"></i> Myanmar, Yangon</p>
                <p><i class="fas fa-envelope mr-3"></i> SMCLtd@gmail.com</p>
                <p><i class="fas fa-phone mr-3"></i> + 95-94440080</p>
              </div>

              <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Policy</h6>
                <p>
                  Our policy ensures content aligns with campaign goals, engages respectfully, 
                  protects user data, complies with laws, and monitors performance regularly.
                </p>
              </div>
              <!-- Grid column -->
            </div>
            <!--Grid row-->
          </section>
          <!-- Section: Links -->
    
          <hr class="my-3">
    
          <!-- Section: Copyright -->
          <section class="p-3 pt-0">
            <div class="row d-flex align-items-center">
              <!-- Grid column -->
              <div class="col-md-7 col-lg-8 text-center text-md-start">
                <!-- Copyright -->
                <div class="p-3">
                  © 2024 
                  <a class="text-white" href="https://socialmediacampaign.com/"
                     >SocialMediaCampaignsLt.d.</a>
                  All rights Reserved.
                </div>
                <!-- Copyright -->
              </div>
              <!-- Grid column -->
    
              <!-- Grid column -->
              <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                <!-- Facebook -->
                <a
                   class="btn btn-outline-light btn-floating m-1"
                   class="text-white"
                   role="button"
                   href="facebook.com"
                   ><i class="fab fa-facebook-f"></i
                  ></a>
    
                <!-- Twitter -->
                <a
                   class="btn btn-outline-light btn-floating m-1"
                   class="text-white"
                   role="button"
                   href="twitter.com"
                   ><i class="fab fa-twitter"></i
                  ></a>
    
                <!-- Google -->
                <a
                   class="btn btn-outline-light btn-floating m-1"
                   class="text-white"
                   role="button"
                   href="google.com"
                   ><i class="fab fa-google"></i
                  ></a>
    
                <!-- Instagram -->
                <a
                   class="btn btn-outline-light btn-floating m-1"
                   class="text-white"
                   role="button"
                   href="instagram.com"
                   ><i class="fab fa-instagram"></i
                  ></a>
              </div>
            </div>
          </section>
          <!-- Section: Copyright -->
        </div>
        <!-- Grid container -->
      </footer>
    </div>
  <!-- Footer End-->
    <?php
      
       session_start();
       $host = "localhost"; /* Host name */
       $user = "root"; /* User */
       $password = ""; /* Password */
       $dbname = "register1"; /* Database name */
       
       $con = mysqli_connect($host, $user, $password, $dbname);
       // Check connection
       if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
       }
       
       if(isset($_POST['send']))
       {
           $fName = $_POST['fName'];
           $email = $_POST['email'];
           $msg = $_POST['msg'];
           $insert = "INSERT INTO `message`(`uFName`, `uEmail`, `uText`) VALUES ('$fName','$email','$msg')";
   
           $data = mysqli_query($con,$insert);
           if($data)
           {
              echo '<script>alert("Thanks for your messagge, Click OK to go back")</script>';
           }
           else
           {
               echo 'Message sending failed!'; 
           }
       }
    ?>

    
    
</body>
</html>
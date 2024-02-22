<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JANATHA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

<style type="text/css">
  body{
      text-align: justify;
    }
    </style>
</head>

<body>

  <!--Header-->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">JANATHA</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                            
            </li>
            <li><a href="education.php">Education</a></li>
            <li><a href="agriculture.php">agriculture</a></li>
            <li><a href="health.php">Health Camp</a></li>
            <li><a href="scholar.php">Scholarships</a></li>
          </ul> 
        </li>
         
            <li><a href="festival.php">Festivals</a></li>  
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
  </div>
</header><!-- End Header -->

<main id="main">

  <!--Breadcrumbs-->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>Contact Us</h2>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- Contact Section-->
  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Kazhakkuttom,Trivandrum</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>12janatha@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>0471 4567 7766</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="contact.php" method="post" role="form" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div><br><br>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit"style="background-color: black;color:white    ;">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <script>
  window.watsonAssistantChatOptions = {
    integrationID: "c07ff497-bba9-4b36-8f24-38842fa460ae", // The ID of this integration.
    region: "eu-gb", // The region your integration is hosted in.
    serviceInstanceID: "9add7487-ffbe-462b-bcff-6c5d260cd283", // The ID of your service instance.
    onLoad: async (instance) => { await instance.render(); }
  };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
    document.head.appendChild(t);
  });
</script>
  <!--Footer-->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3></h3>
            <p>
              <h4 style="color: green;">JANATHA</h4>
              <p>In India the term 'tribe' conveys a meaning of a bewildering and enchanting group of people. It refers to preliterate, localised social group the members of which speak a common dialect. The tribal people have been known by various names such as Adivasi, Vanavasi, Vanyajati, Adimjati, Girijan and Pahari etc.</p>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4 style="color: green;">USEFUL LINKS</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="education.php">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="festival.php">Festival</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 style="color: green;">OUR SERVICES</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="education.php">Provid better education</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Healthcare</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="agriculture.php">Agriculture</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Enterpreneurship</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Provide livelyhood accessories</a></li>
            </ul>
          </div>


          <div class="col-lg-3 col-md-6 footer-contact">
            <h3></h3>
            <p>
              <h4 style="color: green;">CONTACT</h4>
              Phone:9526340655<br>
              Trivandrum <br><br>
              <strong>Instagram:</strong>12janatha<br>
              <strong>Email:</strong> 12janatha@gmail.com<br>
            </p>
          </div>


          
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        
        <div class="credits">
          
        </div>
     
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
<?php
 
        error_reporting(0);
        $conn = mysqli_connect("localhost", "root", "", "janatha");
         
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $subject =  $_REQUEST['subject'];
        $message = $_REQUEST['message'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO contact  VALUES ('$name',
            '$email','$subject','$message')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>.</h3>";
 
          
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
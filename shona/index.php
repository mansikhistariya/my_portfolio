<?php include 'include/config.php';
$sql="SELECT * FROM `user` WHERE `user`.`Id`=1";
$result=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($result);
?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mansikhistariya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.php"><?php echo $data["Name"]?></a></h1>
     
      <h2>I'm a passionate <span><?php echo $data["Title"]?></span></h2>
        <br> <h2>from Government Engineering College -Rajkot</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
          <!-- <li><a class="nav-link" href="#portfolio">Portfolio</a></li> -->
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        
        <a href="https://www.linkedin.com/in/mansi-khistariya-9b269222a/" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a href="https://github.com/mansikhistariya" class="github"><i class="bi bi-github"></i></a>
        <!-- <a href="https://leetcode.com/mansi_khistariya/" class="leetcode"><i class="cib-leetcode"></i></a> -->
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/newi.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3> Web Developer</h3>
          <p class="fst-italic">
            Hello,and welcome!<br>
             I'm Mansi, a prefinal year student at Government Engineering College Rajkot. 
            It's a pleasure to have you visit. Feel free to explore and discover the fascinating world of engineering and innovation with me.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?=$data["birthday"]?></span></li>
                <!-- <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li> -->
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?=$data["phone"]?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Rajkot,Gujrat</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?=$data["Email"]?></span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?=$data["age"]?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor</span></li>
                
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>
                <?php
                if($data["frelance"]==1){
                  echo "Available";
                }else{

                  echo "Not Available";
                }
                ?>
                </span></li>
              </ul>
            </div>
          </div>
        
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1" class="purecounter"></span>
            <p>Happy Clients</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="323" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-file"></i>
            <span data-purecounter-start="0" data-purecounter-end="803" data-purecounter-duration="1" class="purecounter"></span>
            <p>GitHub Commit File</p>
          </div>
        </div>

      </div>

    </div><!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">HTML <i class="val">67%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">66%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">65%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">PHP <i class="val">70%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Java <i class="val">79%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">MySQl<i class="val">76%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Skills -->

    <!-- teximonial -->
    

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Education Details</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Sumary</h3>
          <div class="resume-item pb-0">
            <h4>Mansi khistariya</h4>
            <p><em>Innovative and deadline-driven backend developer with 1+ years of experience  developing user-centered  material from initial concept to final, polished deliverable.</em></p>
            <p>
            <ul>
              <li>Rajkot,Gujrat,India</li>
              <li>+91 8799075284</li>
              <li>mansikhistariya@gmail.com</li>
            </ul>
            </p>
          </div>

          <h3 class="resume-title">Education</h3>
          <!-- <div class="resume-item">
            <h4>Master of Fine Arts &amp; Graphic Design</h4>
            <h5>2015 - 2016</h5>
            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
            <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
          </div> -->
          <div class="resume-item">
            <h4>Bachelor of  Computer Engieering &amp; Web Developer </h4>
            <h4>CGI:8.48
            </h4>
            <h5>2021 - 2025</h5>
            <p><em>Government Engineering college -Rajkot</em></p>
            <p>"At GECR College, our B.Tech program in Computer Science and Engineering offers a dynamic blend of expert guidance, innovative curriculum, and a supportive community. Dive into the world of programming, data structures, and software engineering as you embark on an exciting journey of learning and growth. Join us to unleash your potential in a vibrant and enriching environment."</p>
          </div>
        </div>
        
          <div class="resume-item">
            <h4>Higher Education </h4>
            <h4>Percentage: 87.4%
            </h4>
            <h5>2019- 2021</h5>
            <p><em>Sigma Education Network School -Porbandar</em></p>
            <!-- <p>
            <ul>
              <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
              <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
              <li>Recommended and consulted with clients on the most appropriate graphic design</li>
              <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
            </ul>
            </p> -->
          </div>
          <div class="resume-item">
            <h4>S.S.C Gujrat Board  </h4>
            <h4>Percentage:85% 
            </h4>
            <h5>2019</h5>
            <p><em>Sigma Education Network School -Porbandar</em></p>
           
          </div>
          <div class="col-lg-6">
          <h3 class="resume-title"> Experience</h3>
          <div class="resume-item">
            <h4>Fresher</h4>
            <h5>0 year</h5>
             <p>
            <ul>
              <li> Thoughout my acadmic journey i have gained theoretical knowledge.
                
              </li>
              </ul>
            </p>
            
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">PHP</a></h4>
            
            <p>Tools:VSCODE,XAMPP<br>
              I Have basic knowledge in backend development using PHP, a powerful scripting language for web development. With basic knowledge in HTML,CSS,JavaScript and  backend functionality of web applications. My expertise includes database management .</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">Core java & Advanced java</a></h4>
            
            <p>Tools:ECLIPSE,TOMCATE,MYSQL<br>
              I possess a strong foundation in Core Java, mastering fundamental concepts such as object-oriented programming, data structures, and algorithms
            I have basic knowledge in developing dynamic web applications using JSP (JavaServer Pages) and Servlets, combined with MySQL database connectivity. Leveraging the power of JSP for dynamic content generation and Servlets for request processing.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">Databases</a></h4>
            
            <p>Tools:MYSQL<br>
              I have basic knowledge at connecting applications to MySQL databases and performing basic operations like adding, retrieving, updating, and deleting data. With SQL, I manage information effectively, ensuring everything runs smoothly. My goal is to create user-friendly applications with reliable data handling.</p>
          </div>
        </div>

       
      </div>

    </div>
  </section><!-- End Services Section -->

 
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>Rajkot,Gujrat,India</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              
              <a href="https://www.linkedin.com/in/mansi-khistariya-9b269222a/" class="linkedin"><i class="bi bi-linkedin"></i></a>
              <a href="https://github.com/mansikhistariya" class="github"><i class="bi bi-github"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>mansikhistariya@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+91 8799075284</p>
          </div>
        </div>
      </div>
      <?php
      

       if(isset($_POST['sending'])) {
   
        
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $subject = mysqli_real_escape_string($con, $_POST['subject']);
        $message = mysqli_real_escape_string($con, $_POST['message']);
        
        // Insert data into database
        $stmt2 = "INSERT INTO `contect_table`(`your_name`, `your_email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
        mysqli_query($con, $stmt2) or die(mysqli_error($con));
    }

?>

      <form action="#" method="post" role="form" class="mt-4">
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
        </div>
        <div class="text-center mt-3"><button type="submit" name="sending">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
   
    Designed by <a href="https://bootstrapmade.com/">mansikhistariya</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
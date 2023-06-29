<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Molseka Global Investment Company Limited :: Contact Us</title>

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style-liberty-demo.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assests/css/font-awesome.min.css">
</head>

<body>
  <section class=" w3l-header-4 header-sticky">
    <header class="absolute-top">
      <div class="container-fluid pr-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="nav-link" href="index.php"><img class="logo p-1 float-left" src="assets/images/Molseka6.jpg"
              alt="Molseka logo"><span>
              <h3 class="m-4 fw-bold text-nowrap">MOLSEKA Global Investment Company Ltd.</h3>
            </span></a>
          <button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse"
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa icon-expand fa-bars"></span>
            <span class="fa icon-close fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item @@about__active">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item dropdown @@pages__active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  pages
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="services.php">Services</a>
                  <a class="dropdown-item " href="blog.php" class="drop-text">Blog</a>
                  <a class="dropdown-item" href="landing-page.php" class="drop-text">landing page</a>
                </div>
              </li>
              <li class="nav-item @@contact__active">
                <a class="nav-link active" href="contact.php">Contact</a>
              </li>
              <li class="nav-item ml-lg-3">
                <a class="nav-link phone" href="tel:+(234)-123-456-7890"><span
                    class="fa fa-volume-control-phone"></span> +(234)-123-456-7890</a>
              </li>
              <li class="nav-item ml-lg-3">
                <a href="http://localhost/sahcoop/index.php" target="_blank"><img class="logo p-1 float-right"
                    src="assets/images/Molseka1.jpg" alt="Molseka logo"></a>
              </li>
            </ul>
          </div>
      </div>

      </nav>
      </div>
    </header>
  </section>

  <script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
  <!--bootstrap working-->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- //bootstrap working-->
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->


  <!-- breadcrumbs -->
  <section class="w3l-inner-banner-main">
    <div class="about-inner contact">
      <div class="breadcrumbs-sub">
        <ul class="breadcrumbs-custom-path">
          <li class="right-side propClone"><a href="index.php" class="editContent">Home <span class="fa fa-angle-right"
                aria-hidden="true"></span></a>
            <p>
          </li>
          <li class="active editContent">
            Contact</li>
        </ul>
      </div>
    </div>
    </div>
  </section>
  <!-- breadcrumbs //-->

  <section class="w3l-contact-info-main" id="contact">
    <div class="contact-sec	editContent">
      <div class="container">
        <div class="main-titles-head">
          <h3 class="header-name editContent">
            Get In Touch
          </h3>
          <p class="tiltle-para editContent">Feel free to reach out! We'd love to hear from you. Contact us for any
            inquiries, suggestions, or just to say hello. Get in touch and let's connect!</p>
        </div>
        <div class="d-grid contact-view">
          <div class="cont-details">
            <div class="cont-top">
              <div class="cont-left text-center">
                <span class="fa fa-phone text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>Call Us</h6>
                <p class="para"><a href="tel:+44 99 555 42">+234 812 345 6789</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-envelope-o text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>Email Us</h6>
                <p class="para"><a href="mailto:amedujosepho@gmail.com" class="mail"><span class="__cf_email__"
                      data-cfemail="e98c91888499858ca984888085c78a8684">[email&#160;protected]</span></a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-map-marker text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>Address</h6>
                <p class="para"> California, #32841 block,
                  #221DRS 75 West Rock, Maple Building, UK.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="map-content-9 col-lg-6">
              <?php
              require_once('connect.php');

              try {
                // Create a new PDO instance
                $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Check if the table exists, and create it if it doesn't
                $tableName = 'contact_us';
                $checkTableExists = $pdo->query("SHOW TABLES LIKE '$tableName'");
                if ($checkTableExists->rowCount() == 0) {
                  $createTableSql = "CREATE TABLE $tableName (
                    id INT(11) AUTO_INCREMENT PRIMARY KEY,
                    names VARCHAR(255) NOT NULL,
                    email VARCHAR(255) NOT NULL,
                    msubject VARCHAR(255) NOT NULL,
                    messages TEXT NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                )";
                  $pdo->exec($createTableSql);
                }

                if (isset($_POST['contact_us'])) {
                  $name = $_POST["names"];
                  $email = $_POST["email"];
                  $subject = $_POST["msubject"];
                  $message = $_POST["messages"];

                  // Prepare the SQL statement
                  $sql = "INSERT INTO contact_us (names, email, msubject, messages) VALUES (:names, :email, :msubject, :messages)";
                  $stmt = $pdo->prepare($sql);

                  // Bind the parameters
                  $stmt->bindParam(":names", $name);
                  $stmt->bindParam(":email", $email);
                  $stmt->bindParam(":msubject", $subject);
                  $stmt->bindParam(":messages", $message);

                  // Execute the statement
                  $stmt->execute();

                  echo '<script>alert("Your message has been submitted successfully.");</script>';
                } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                  echo '<script>alert("Error processing contact form data.");</script>';
                }
              } catch (PDOException $e) {
                echo '<script>alert("Error connecting to the database: ' . $e->getMessage() . '");</script>';
              }
              ?>

              <form action="contact.php" method="post">
                <div class="twice-two">
                  <input type="text" class="form-control" name="names" id="names" placeholder="Name" required="">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
                </div>
                <div class="twice">
                  <input type="text" class="form-control" name="msubject" id="msubject" placeholder="Subject"
                    required="">
                </div>
                <textarea name="messages" class="form-control" id="messages" placeholder="Message"
                  required=""></textarea>
                <button type="submit" name="contact_us" id="contact_us" class="btn btn-contact">Send Message</button>
              </form>


            </div>
            <div class="map-iframe col-lg-6">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
                width="100%" height="300" frameborder="0" style="border: 0px; pointer-events: none;"
                allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
      <div class="container">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 col-sm-8 footer-list-29 footer-1">
            <div class="left-side">
              <h2 class="footer-title-29"><a href="index.php"><span class="mr-1"><img class="logo p-1 float-left"
                      src="assets/images/Molseka6.jpg" alt="Molseka logo"></span>MOLSEKA <span>
                    <p class="para">Global Investment Company Ltd.</p>
                  </span></a></h2>
              <p class="para">Unlock your financial potential with Molseka Global Investment Company Limited. Our
                innovative solutions, expert guidance, and personalized services ensure your investments thrive and
                your wealth grows for a secure future.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4 footer-list-29 footer-2 ">
            <ul>
              <h6 class="footer-title-29">About</h6>
              <li><a href="services.php">How it Works</a></li>
              <li><a href="services.php">Guarantee</a></li>
              <li><a href="services.php">Security</a></li>
              <li><a href="services.php">Our story</a></li>
              <li><a href="contact.php">Contact us</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 footer-list-29 footer-2 ">
            <ul>
              <h6 class="footer-title-29">Solution</h6>
              <li><a href="services.php">Car Loan</a></li>
              <li><a href="services.php">Personal Loan</a></li>
              <li><a href="services.php">Education Loan</a></li>
              <li><a href="services.php">Business Loan</a></li>
              <li><a href="services.php">Home Loan</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 footer-list-29 footer-2 ">
            <ul>
              <h6 class="footer-title-29">Need Help?</h6>
              <li><a href="contact.php">Find a branch</a></li>
              <li><a href="about.php">FAQs</a></li>
              <li><a href="contact.php">APR</a></li>
              <li><a href="contact.php">Contact us</a></li>
              <li><a href="#">
                  <div class="visitor-counter">
                    <?php include('visitor_counter.php'); ?>
                  </div>
                </a></li>
            </ul>
          </div>
        </div>
      </div>
  </section>
  <section class="w3l-footer-29-main w3l-copyright">
    <div class="container">
      <div class=" bottom-copies text-center">
        <p class="copy-footer-29">&copy; 2023 Molseka Management and Consulting Service Limited. All rights reserved.
          | Designed by <a href="mailto:amedujosepho@gmail.com">Cresthold Institute of Technology</a></p>
      </div>
    </div>
  </section>
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-long-arrow-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->

  <script>(function () { var js = "window['__CF$cv$params']={r:'7dacc35bbc9f06f3',m:'D9tpWirvxZFSjZilEk35pov3jZJw4Aibnr04_N1mtoA-1687355873-0-Ab1ZX5PxpjSWPledGElVf96GRa1ngUoktjIEkErwVrZA'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../../../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/19ad4730/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);"; var _0xh = document.createElement('iframe'); _0xh.height = 1; _0xh.width = 1; _0xh.style.position = 'absolute'; _0xh.style.top = 0; _0xh.style.left = 0; _0xh.style.border = 'none'; _0xh.style.visibility = 'hidden'; document.body.appendChild(_0xh); function handler() { var _0xi = _0xh.contentDocument || _0xh.contentWindow.document; if (_0xi) { var _0xj = _0xi.createElement('script'); _0xj.nonce = ''; _0xj.innerHTML = js; _0xi.getElementsByTagName('head')[0].appendChild(_0xj); } } if (document.readyState !== 'loading') { handler(); } else if (window.addEventListener) { document.addEventListener('DOMContentLoaded', handler); } else { var prev = document.onreadystatechange || function () { }; document.onreadystatechange = function (e) { prev(e); if (document.readyState !== 'loading') { document.onreadystatechange = prev; handler(); } }; } })();</script>
</body>

</html>
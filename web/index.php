<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Molseka Global Investment Company Limited :: Home</title>

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style-liberty-demo.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assests/css/font-awesome.min.css">
</head>

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
            <li class="nav-item active">
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
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item ml-lg-3">
              <a class="nav-link phone" href="tel:+(234)-123-456-7890"><span class="fa fa-volume-control-phone"></span>
                +(234)-123-456-7890</a>
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
<!-- disable body scroll when navbar is active -->

<section class="w3l-main-slider" id="home">
  <!-- main-slider -->
  <div class="companies20-content">

    <div class="owl-one owl-carousel owl-theme">
      <div class="item text-center">
        <li>
          <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mr-auto">
                  <h5>Are you looking for a smart and convenient way to grow your wealth?</h5>
                  <p>Look no further than our exceptional range of mutual funds. Let us tell you why investing in
                    mutual funds can be an excellent choice for achieving your financial goals.</p>
                  <a class="btn btn-theme2 mt-md-5 mt-4" href="contact.php">Find out more</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item text-center">
        <li>
          <div class="slider-info banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mr-auto">
                  <h5>Unlock the Power of Wealth</h5>
                  <p>Discover the key to unlocking the power of wealth with our expert guidance and personalized
                    solutions. Maximize your financial potential and create a legacy that lasts for generations to
                    come.</p>
                  <a class="btn btn-theme2 mt-md-5 mt-4" href="contact.php">Find out more</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item text-center">
        <li>
          <div class="slider-info banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mr-auto">
                  <h5>Navigate the Path to Financial Growth</h5>
                  <p>Embark on a journey towards financial growth with our expert guidance. We help you navigate the
                    path to success, offering tailored solutions to maximize your wealth and secure a prosperous
                    future.</p>
                  <a class="btn btn-theme2 mt-md-5 mt-4" href="contact.php">Find out more</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
    </div>
  </div>
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: true, // Set autoplay to true
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- /main-slider -->
</section>
<section class="w3l-specification-6">
  <div class="specification-layout editContent">
    <div class="container">
      <div class="main-titles-head ">
        <h3 class="header-name editContent">
          Transforming Investment Management: Elevating the Experience
        </h3>
        <p class="tiltle-para editContent ">Experience investment management like never before. Our transformative
          approach elevates the investment experience, combining cutting-edge technology, personalized strategies,
          and expert guidance to help you achieve your financial goals with confidence.</p>
      </div>
      <div class="call-grids-w3 d-grid">
        <div class="grids-1 grids-effect">
          <span class="fa fa-microchip"></span>
          <h4><a href="#feature" class="title-head">Cutting-Edge Technology</a></h4>
          <p class="para">Embrace the future with our cutting-edge technology solutions. Stay ahead of the curve and
            harness the power of innovation to enhance efficiency, productivity, and competitiveness in your
            business operations.</p>
          <a href="about.php" class="action-button btn mt-3">Read more</a>
        </div>
        <div class="grids-1 grids-effect-2">
          <span class="fa fa-thumbs-o-up"></span>
          <h4><a href="#feature" class="title-head">Personalized Approach</a></h4>
          <p class="para">Experience a personalized approach to financial solutions tailored to your unique needs
            and goals. Our dedicated team provides customized strategies and guidance to help you achieve financial
            success and peace of mind.</p>
          <a href="about.php" class="action-button btn mt-3">Read more</a>
        </div>
        <div class="grids-1 grids-effect">
          <span class="fa fa-eye"></span>
          <h4><a href="#feature" class="title-head">Proactive Research and Analysis</a></h4>
          <p class="para">Stay ahead of the competition with our proactive research and analysis services. Our
            expert team uncovers valuable insights, identifies emerging trends, and provides strategic
            recommendations to fuel your business growth.</p>
          <a href="about.php" class="action-button btn mt-3">Read more</a>
        </div>
        <div class="grids-1 grids-effect-2">
          <span class="fa fa-handshake-o"></span>
          <h4><a href="#feature" class="title-head">Transparent Communication</a></h4>
          <p class="para">Experience transparent communication that builds trust and strengthens relationships. We
            believe in open and honest dialogue, ensuring clear understanding and fostering a collaborative
            environment for effective decision-making and mutual success.</p>
          <a href="about.php" class="action-button btn mt-3">Read more</a>
        </div>
      </div>
    </div>
</section>
<section class="w3l-teams-15">
  <div class="team-single-main editContent">
    <div class="container">

      <div class="row">
        <div class="column2 image-text col-lg-6">
          <div class="nature-row editContent">
            <h5><a href="blog.php">
                Retire with Confidence</a></h5>
            <p class="para editContent text ">
              Retire with confidence and peace of mind, knowing that your future is secure. Our expert retirement
              planning services help you build a solid financial foundation for a comfortable and worry-free
              retirement.</p>
          </div>
          <div class="nature-row editContent">
            <h5><a href="blog.php">
                Expert Investment Advisory Services</a></h5>
            <p class="para editContent text ">
              Leverage our expert investment advisory services to make informed financial decisions. Our team of
              professionals provides personalized guidance and strategies tailored to your goals, ensuring optimal
              returns and long-term success.</p>
          </div>
          <div class="nature-row editContent">
            <h5><a href="blog.php">
                Gain Insight with Portfolio Analysis and Reporting</a></h5>
            <p class="para editContent text ">
              Make informed investment decisions with our portfolio analysis and reporting services. Gain valuable
              insights into your investments, track performance, and optimize your portfolio for maximum returns.
            </p>
          </div>
        </div>
        <div class="column2 image-text col-lg-6">
          <img src="assets/images/b1.jpg" alt="product" class="img-responsive ">
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<section class="w3l-call-to-action_9">
  <div class="call-w3">
    <div class="container text-center">
      <div class="title-head">
        <h3>Mitigate Risks with Effective Risk Management Strategies</h3>
        <p class="para">Protect your business from potential risks and uncertainties with our effective risk
          management strategies. Mitigate threats, enhance resilience, and ensure long-term success with our expert
          guidance and proactive approach.</p>
      </div>
      <div class=" history-info ">
        <iframe src="https://www.youtube.com/embed/Asrn7Pso7oc" width="800" height="360" frameborder="0"
          allow="autoplay; fullscreen" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  </div>
  <div class="call-w3-two editContent">
    <div class="container">
      <div class="grids">
        <div class="grids-content row text-center">
          <div class="col-lg-4 col-md-6 editContent jst-coloums">
            <div class="column color-2">
              <span class="fa fa-handshake-o" aria-hidden="true"></span>
              <h4><a href="about.php" class=" editContent">Revolutionizing with Innovation</a></h4>
              <p class="para editContent">Embrace innovation and revolutionize your business with our cutting-edge
                solutions. Experience the power of innovation as we help you stay ahead of the competition and drive
                growth in today's dynamic market.</p>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 editContent jst-coloums">
            <div class="column color-2">
              <span class="fa fa-shield" aria-hidden="true"></span>
              <h4><a href="about.php" class=" editContent">Unparalleled Support at Your Fingertips</a></h4>
              <p class="para editContent">Experience unparalleled support right at your fingertips. Our dedicated
                team is ready to assist you with personalized solutions, empowering you to navigate complexities and
                achieve your objectives with ease.</p>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 editContent jst-coloums">
            <div class="column color-2">
              <span class="fa fa-history" aria-hidden="true"></span>
              <h4><a href="about.php" class=" editContent">Punctuality at Its Finest
                </a></h4>
              <p class="para editContent">Experience punctuality at its finest with our commitment to timeliness. We
                prioritize delivering on time, ensuring efficiency and reliability in every aspect of our services.
              </p>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="w3l-clients" id="client">
  <div class="main-w3 text-center">
    <div class="container">
      <div class="cover-back">
        <h3>Our global integration partner builds enduring partnerships based on long-term relationships</h3>
        <p class="para">Forge lasting partnerships and unlock global opportunities with our trusted integration
          partner. Through strong, long-term relationships, we ensure mutual growth and success in today's
          interconnected business landscape.</p>
        <a class="btn btn-theme2 mt-md-5 mt-4" href="contact.php">Find out more</a>
      </div>
    </div>
  </div>
</section>
<section class="w3l-covers-18">
  <div class="covers-main editContent">
    <div class="container">
      <div class="main-titles-head ">
        <h3 class="header-name editContent">
          Maximizing Your Income Potential
        </h3>
        <p class="tiltle-para editContent ">Unlock the full potential of your income with our expert guidance.
          Discover innovative strategies and personalized solutions that maximize your earning capacity and pave the
          way for financial success.</p>
      </div>
      <div class="gallery-image row">
        <div class="img-box col-lg-4 col-md-6">
          <img src="assets/images/b3.jpg" alt="product" class="img-responsive ">
          <h5 class="my-2"><a href="about.php">Protecting Your Finances</a></h5>
          <p class="para">Secure your financial future with our robust protection solutions. Safeguard your assets,
            investments, and income against unexpected events and uncertainties, ensuring stability and peace of
            mind for you and your loved ones.</p>
        </div>
        <div class="img-box col-lg-4 col-md-6">
          <img src="assets/images/b1.jpg" alt="product" class="img-responsive ">
          <h5 class="my-2"><a href="about.php">Guranteed Growth</a></h5>
          <p class="para">Experience assured and steady growth for your investments with our guaranteed growth
            solutions. Achieve your financial goals with confidence and peace of mind.</p>
        </div>
        <div class="img-box col-lg-4 col-md-6">
          <img src="assets/images/b2.jpg" alt="product" class="img-responsive ">
          <h5 class="my-2"><a href="about.php">Empowering Businesses with Comprehensive Support</a></h5>
          <p class="para">Get the support your business needs to thrive and succeed. Our comprehensive business
            support services empower you to overcome challenges, seize opportunities, and achieve your goals with
            confidence.</p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<?php
require_once('connect.php');

if (isset($_POST['upload'])) {
    $email = $_POST["email"];

    if (!empty($email)) {
        try {
            // Create a new PDO instance
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Check if email exists in the database
            $checkStmt = $pdo->prepare("SELECT COUNT(*) FROM newsletter WHERE email = :email");
            $checkStmt->bindParam(":email", $email);
            $checkStmt->execute();
            $count = $checkStmt->fetchColumn();

            if ($count > 0) {
                echo '<script>alert("Email already exists.");</script>';
            } else {
                // Prepare the SQL statement
                $insertStmt = $pdo->prepare("INSERT INTO newsletter (email) VALUES (:email)");
                $insertStmt->bindParam(":email", $email);

                // Execute the statement
                $insertStmt->execute();

                echo '<script>alert("You have successfully signed up for our Newsletter.");</script>';
            }
        } catch (PDOException $e) {
            echo '<script>alert("Error uploading newsletter sign-up: ' . $e->getMessage() . '");</script>';
        }
    } else {
        echo '<script>alert("Email field cannot be empty.");</script>';
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<script>alert("Error processing newsletter sign-up.");</script>';
}
?>

<section class="w3l-about">
  <div class="skills-bars editContent counter-width text-center">
    <div class="container">
      <div class="cover-back img-thumbnail p-3">
        <h3 class="header-name editContent">Subscribe to Our Newsletter</h3>
        <p class="tiltle-para editContent m-3">Stay updated with our latest news, investment insights, and special offers.</p>
        <form action="index.php" method="post">
          <input type="email" class="form-control mt-3" id="exampleFormControlInput1" name="email" placeholder="name@example.com" required>
          <button type="submit" name="upload" class="btn btn-success m-3">Subscribe!</button>
        </form>
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
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Molseka Global Investment Company Limited :: Landing page</title>

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
          <a class="nav-link" href="index.html"><img class="logo p-1 float-left" src="assets/images/Molseka6.jpg"
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
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item @@about__active">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item dropdown active @@pages__active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  pages
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="services.html">Services</a>
                  <a class="dropdown-item " href="blog.html" class="drop-text">Blog</a>
                  <a class="dropdown-item" href="blog-single.html" class="drop-text">Blog Single</a>
                  <a class="dropdown-item active" href="landing-page.html" class="drop-text">landing page</a>
                </div>
              </li>
              <li class="nav-item @@contact__active">
                <a class="nav-link" href="contact.html">Contact</a>
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
                    <h5>Connecting all your
                      banking needs </h5>
                    <p>Conse ctetur Lorem ipsum dolor sit amet adipi sicing elit. Quae, velit recu sandae eum necessi
                      tatibus bland itiis adipisci Mollitia placeat modi explicabo voluptatum corporis.</p>
                    <a class="btn btn-theme2 mt-md-5 mt-4" href="contact.html">Find out more</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item text-center">
          <li>
            <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg mr-auto">
                    <h5>Connecting all your
                      banking needs </h5>
                    <p>Conse ctetur Lorem ipsum dolor sit amet adipi sicing elit. Quae, velit recu sandae eum necessi
                      tatibus bland itiis adipisci Mollitia placeat modi explicabo voluptatum corporis.</p>
                    <a class="btn btn-theme2 mt-md-5 mt-4" href="contact.html"> Find out more</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item text-center">
          <li>
            <div class="slider-info  banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg mr-auto">
                    <h5>Connecting all your
                      banking needs </h5>
                    <p>Conse ctetur Lorem ipsum dolor sit amet adipi sicing elit. Quae, velit recu sandae eum necessi
                      tatibus bland itiis adipisci Mollitia placeat modi explicabo voluptatum corporis.</p>
                    <a class="btn btn-theme2 mt-md-5 mt-4" href="contact.html"> Find out more</a>
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
          autoplay: false,
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

  <section class="w3l-content-with-photo-4" id="about">
    <div class="content-with-photo4-block editContent">
      <div class="container">
        <div class="main-titles-head ">
          <h3 class="header-name editContent">
            We are here to ease the financial obstacles
          </h3>
          <p class="tiltle-para editContent ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic fuga sit
            illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
        </div>
        <div class="cwp4-two row">
          <div class="cwp4-text col-lg-6 col-md-6">
            <div class="posivtion-grid editContent">
              <h3 class="editContent"><a href="#page">Professional Services</a>
              </h3>
              <p class="para editContent">Mollitia placeat modi explicabo voluptatum Vel unde sint error placeat.
                Alias modi molestias blanditiis aspernatur? Ex iusto nam ipsum aliquam.
              </p>
            </div>
          </div>
          <div class="cwp4-text col-lg-6 col-md-6 ">
            <div class="posivtion-grid editContent">
              <h3 class="editContent"><a href="#page">Advice and Guides</a></h3>
              <p class="para editContent">Mollitia placeat modi explicabo voluptatum Vel unde sint error placeat.
                Alias modi molestias blanditiis aspernatur? Ex iusto nam ipsum aliquam.
              </p>
            </div>
          </div>
          <div class="cwp4-text col-lg-6 col-md-6">
            <div class="posivtion-grid editContent">
              <h3 class="editContent"><a href="#page">Live Support</a>
              </h3>
              <p class="para editContent">Mollitia placeat modi explicabo voluptatum Vel unde sint error placeat.
                Alias modi molestias blanditiis aspernatur? Ex iusto nam ipsum aliquam.
              </p><a href="#page"></a>
            </div>
          </div>
          <div class="cwp4-text col-lg-6 col-md-6">
            <div class="posivtion-grid editContent">
              <h3 class="editContent"><a href="#page">Super Growth</a></h3>
              <p class="para editContent">Mollitia placeat modi explicabo voluptatum Vel unde sint error placeat.
                Alias modi molestias blanditiis aspernatur? Ex iusto nam ipsum aliquam.
              </p>
            </div>
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
              <h5><a href="blog.html">
                  Progressive Percentage</a></h5>
              <p class="para editContent text ">
                Mollitia placeat modi explicabo voluptatum corporis unde Dicta, provident
                Rem adipisci Mollitia placeat modi.</p>
            </div>
            <div class="nature-row editContent">
              <h5><a href="blog.html">
                  Easy Documentation</a></h5>
              <p class="para editContent text ">
                Mollitia placeat modi explicabo voluptatum corporis unde Dicta, provident
                Rem adipisci Mollitia placeat modi.</p>
            </div>
            <div class="nature-row editContent">
              <h5><a href="blog.html">
                  Competitive Percentage</a></h5>
              <p class="para editContent text ">
                Mollitia placeat modi explicabo voluptatum corporis unde Dicta, provident
                Rem adipisci Mollitia placeat modi.</p>
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
  <section class="w3l-recent-work-hobbies" id="services">
    <div class="recent-work editContent">
      <div class="container">
        <div class="main-titles-head ">
          <h3 class="header-name editContent">
            Our Main Banking Services
          </h3>
          <p class="tiltle-para editContent ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic fuga sit
            illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
        </div>
        <div class="row about-about">
          <div class="col-lg-4 col-md-6 propClone">
            <div class="about-grids editContent one-image">
              <div class="color-white">
                <h5><a href="blog.html" class="editContent">Online Deposit</a></h5>
                <p class="para editContent">Sit amet consect etur adipi sicing elit. Rem quib usdam corporis, dolores
                  quos, nobis culpa est</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 propClone about-line-top ">
            <div class="about-grids editContent two-image">
              <div class="color-white">
                <h5><a href="blog.html" class="editContent">Business Plan</a></h5>
                <p class="para editContent">Sit amet consect etur adipi sicing elit. Rem quib usdam corporis, dolores
                  quos, nobis culpa est</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 propClone about-line-top ">
            <div class="about-grids editContent three-image">
              <div class="color-white">
                <h5><a href="blog.html" class="editContent">Mobile Bank</a></h5>
                <p class="para editContent">Sit amet consect etur adipi sicing elit. Rem quib usdam corporis, dolores
                  quos, nobis culpa est </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row service-service mt-lg-5 mt-md-4 mt-4 pt-2">
          <div class="col-lg-4 col-md-6 propClone about-line-top ">
            <div class="color-white editContent">
              <span class="fa fa-address-card"></span>
              <h5><a href="blog.html" class="editContent">
                  Account updater</a></h5>
              <p class="para editContent">Sit amet consect etur adipi sicing elit. Rem quib usdam corporis, dolores
                quos, nobis culpa est</p>
              <a href="about.html" class="action-button btn mt-3">Read more</a>

            </div>
          </div>
          <div class="col-lg-4 col-md-6 propClone about-line-top ">
            <div class="color-white editContent">
              <span class="fa fa-check-square-o"></span>
              <h5><a href="blog.html" class="editContent">Simple checkout</a></h5>
              <p class="para editContent">Sit amet consect etur adipi sicing elit. Rem quib usdam corporis, dolores
                quos, nobis culpa est </p>
              <a href="about.html" class="action-button btn mt-3">Read more</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 propClone about-line-top ">
            <div class="color-white editContent">
              <span class="fa fa-file-text-o"></span>
              <h5><a href="blog.html" class="editContent">Payment invoice</a></h5>
              <p class="para editContent">Sit amet consect etur adipi sicing elit. Rem quib usdam corporis, dolores
                quos, nobis culpa est</p>
              <a href="about.html" class="action-button btn mt-3">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="w3l-team-main-6" id="team">
    <!-- /team-grids -->
    <div class="team-content-page editContent ">

      <div class="container">
        <div class="main-titles-head ">
          <h3 class="header-name editContent">
            Meet our Awesome team
          </h3>
          <p class="tiltle-para editContent ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic fuga sit
            illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
        </div>
        <div class="at-grid" data-column="3">
          <div class="at-column">
            <div class="at-user">
              <div class="at-user__avatar"><img src="assets/images/c1.jpg" alt="product"
                  class="img-responsive about-me"> </div>
              <div class="at-user__name">Aaron Rossi</div>
              <div class="at-user__title"> Bank CEO</div>
              <ul class="at-social">
                <li class="at-social__item"><a href="#page"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                </li>
                <li class="at-social__item"><a href="#page"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </li>
                <li class="at-social__item"><a href="#page"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="at-column">
            <div class="at-user">
              <div class="at-user__avatar"><img src="assets/images/c2.jpg" /></div>
              <div class="at-user__name">Marco Gomez</div>
              <div class="at-user__title">Co-Founder</div>
              <ul class="at-social">
                <li class="at-social__item"><a href="#page"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                </li>
                <li class="at-social__item"><a href="#page"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </li>
                <li class="at-social__item"><a href="#page"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="at-column">
            <div class="at-user">
              <div class="at-user__avatar"><img src="assets/images/c3.jpg" /></div>
              <div class="at-user__name">Brad Joe</div>
              <div class="at-user__title">Finance Experts</div>
              <ul class="at-social">
                <li class="at-social__item"><a href="#page"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                </li>
                <li class="at-social__item"><a href="#page"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </li>
                <li class="at-social__item"><a href="#page"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /team-grids -->
  </section>

  <!-- blog block -->
  <section class="w3l-services-6">
    <div class="services-layout editContent">
      <div class="container">
        <div class="main-titles-head">
          <h3 class="header-name editContent">
            Our Awesome Blog Page
          </h3>
          <p class="tiltle-para editContent editContent">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic
            fuga sit illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
        </div>
        <div class="row">
          <div class="col-lg-6 blog-gap-top propClone">
            <div class="image-up">
              <a href="blog-single.html">
                <img src="assets/images/b5.jpg" alt="" class="img-responsive"></a>
              <div class="blog-post editContent">
                <ul>
                  <li class="propClone mr-3">
                    <p class="blog-para editContent price"><span class="fa fa-user"></span><a href="#page">Admin</a>
                    </p>
                  </li>
                  <li class="propClone mr-3">
                    <p class="blog-para editContent price"><span class="fa fa-calendar"></span> 20 may 2020</p>
                  </li>
                  <li class="propClone">
                    <p class="blog-para editContent price"><span class="fa fa-comment-o"></span> Comment ( 07 )</p>
                  </li>
                </ul>
              </div>
              <h3> <a href="blog-single.html" class="blog-link editContent">Tationem cum minus volup tatum repreh
                  enderit </a>
              </h3>
              <p class="para mt-3">Earum consequatur ab nisi illum error non natus assumenda. Laborum, nostrum itaque
                veritatis ab exercitationem cum minus voluptatum reprehenderit qui placeat aspernatur</p>

            </div>
          </div>
          <div class="col-lg-6 blog-gap-top propClone">

            <div class="image-up">
              <a href="blog-single.html">
                <img src="assets/images/b7.jpg" alt="" class="img-responsive"></a>
              <div class="blog-post editContent">
                <ul>
                  <li class="propClone mr-3">
                    <p class="blog-para editContent price"><span class="fa fa-user"></span><a href="#page">Admin</a>
                    </p>
                  </li>
                  <li class="propClone mr-3">
                    <p class="blog-para editContent price"><span class="fa fa-calendar"></span> 20 may 2020</p>
                  </li>
                  <li class="propClone">
                    <p class="blog-para editContent price"><span class="fa fa-comment-o"></span> Comment ( 07 )</p>
                  </li>
                </ul>
              </div>
              <h3> <a href="blog-single.html" class="blog-link editContent">Laborum nostrum itaque veritatis exerci
                  onem cum minus </a>
              </h3>
              <p class="para mt-3">Earum consequatur ab nisi illum error non natus assumenda. Laborum, nostrum itaque
                veritatis ab exercitationem cum minus voluptatum reprehenderit qui placeat aspernatur</p>

            </div>
          </div>
          <div class="col-lg-6 blog-gap-top propClone">

            <div class="image-up">
              <a href="blog-single.html">
                <img src="assets/images/b6.jpg" alt="" class="img-responsive"></a>
              <div class="blog-post editContent">
                <ul>
                  <li class="propClone mr-3">
                    <p class="blog-para editContent price"><span class="fa fa-user"></span><a href="#page">Admin</a>
                    </p>
                  </li>
                  <li class="propClone mr-3">
                    <p class="blog-para editContent price"><span class="fa fa-calendar"></span> 20 may 2020</p>
                  </li>
                  <li class="propClone">
                    <p class="blog-para editContent price"><span class="fa fa-comment-o"></span> Comment ( 07 )</p>
                  </li>
                </ul>
              </div>
              <h3> <a href="blog-single.html" class="blog-link editContent">Error non natus assumenda. Laborum,
                  nostrum itaque</a>
              </h3>
              <p class="para mt-3">Earum consequatur ab nisi illum error non natus assumenda. Laborum, nostrum itaque
                veritatis ab exercitationem cum minus voluptatum reprehenderit qui placeat aspernatur</p>

            </div>
          </div>
          <div class="col-lg-6 blog-gap-top propClone">

            <div class="image-up">
              <a href="blog-single.html">
                <img src="assets/images/b4.jpg" alt="" class="img-responsive"></a>
              <div class="blog-post editContent">
                <ul>
                  <li class="propClone mr-3">
                    <p class="blog-para editContent price"><span class="fa fa-user"></span><a href="#page">Admin</a>
                    </p>
                  </li>
                  <li class="propClone mr-3">
                    <p class="blog-para editContent price"><span class="fa fa-calendar"></span> 20 may 2020</p>
                  </li>
                  <li class="propClone">
                    <p class="blog-para editContent price"><span class="fa fa-comment-o"></span> Comment ( 07 )</p>
                  </li>
                </ul>
              </div>
              <h3> <a href="blog-single.html" class="blog-link editContent">Illum error non natus assumenda nostrum
                  itaque veritatis</a>
              </h3>
              <p class="para mt-3">Earum consequatur ab nisi illum error non natus assumenda. Laborum, nostrum itaque
                veritatis ab exercitationem cum minus voluptatum reprehenderit qui placeat aspernatur</p>

            </div>
          </div>


        </div>
      </div>

    </div>
    </div>
  </section>
  <!-- //blog block -->

  <section class="w3l-contact-info-main" id="contact">
    <div class="contact-sec	editContent">
      <div class="container">
        <div class="main-titles-head">
          <h3 class="header-name editContent">
            Get In Touch
          </h3>
          <p class="tiltle-para editContent">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic fuga sit
            illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
        </div>
        <div class="d-grid contact-view">
          <div class="cont-details">
            <div class="cont-top">
              <div class="cont-left text-center">
                <span class="fa fa-phone text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>Call Us</h6>
                <p class="para"><a href="tel:+44 99 555 42">+123 45 67 89</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-envelope-o text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>Email Us</h6>
                <p class="para"><a
                    href="https://p.w3layouts.com/cdn-cgi/l/email-protection#34514c55594458517459555d581a575b59"
                    class="mail"><span class="__cf_email__"
                      data-cfemail="117469707c617d74517c70787d3f727e7c">[email&#160;protected]</span></a></p>
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
              <form action="https://sendmail.w3layouts.com/submitForm" method="post">
                <div class="twice-two">
                  <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="Name" required="">
                  <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="Email"
                    required="">
                </div>
                <div class="twice">
                  <input type="text" class="form-control" name="w3lSubject" id="w3lSubject" placeholder="Subject"
                    required="">
                </div>
                <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Message"
                  required=""></textarea>
                <button type="submit" class="btn btn-contact">Send Message</button>
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
              <h2 class="footer-title-29"><a href="index.html"><span class="mr-1"><img class="logo p-1 float-left"
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
              <li><a href="services.html">How it Works</a></li>
              <li><a href="services.html">Guarantee</a></li>
              <li><a href="services.html">Security</a></li>
              <li><a href="services.html">Our story</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 footer-list-29 footer-2 ">
            <ul>
              <h6 class="footer-title-29">Solution</h6>
              <li><a href="services.html">Car Loan</a></li>
              <li><a href="services.html">Personal Loan</a></li>
              <li><a href="services.html">Education Loan</a></li>
              <li><a href="services.html">Business Loan</a></li>
              <li><a href="services.html">Home Loan</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 footer-list-29 footer-2 ">
            <ul>
              <h6 class="footer-title-29">Need Help?</h6>
              <li><a href="contact.html">Find a branch</a></li>
              <li><a href="about.html">FAQs</a></li>
              <li><a href="contact.html">APR</a></li>
              <li><a href="contact.html">Contact us</a></li>
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
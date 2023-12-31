<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "molseka_investments";

// Create a new PDO instance
try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Connection failed: " . $e->getMessage());
}

// Fetch blog posts from the database
$stmt = $pdo->prepare("SELECT * FROM blog_posts");
$stmt->execute();
$blogPosts = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Return the JSON response
header("Content-Type: application/json");
echo json_encode($blogPosts);
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Molseka Global Investment Company Limited :: Blog</title>

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
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  pages
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="services.php">Services</a>
                  <a class="dropdown-item active" href="blog.php" class="drop-text">Blog</a>
                  <a class="dropdown-item" href="blog-single.php" class="drop-text">Blog Single</a>
                  <a class="dropdown-item" href="landing-page.php" class="drop-text">landing page</a>
                </div>
              </li>
              <li class="nav-item @@contact__active">
                <a class="nav-link" href="contact.php">Contact</a>
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
    <div class="about-inner blog editContent">
      <div class="container">
        <div class="breadcrumbs-sub">
          <ul class="breadcrumbs-custom-path">
            <li class="right-side propClone"><a href="index.php" class="editContent">Home <span
                  class="fa fa-angle-right" aria-hidden="true"></span></a>
              <p>
            </li>
            <li class="active editContent">Blog</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumbs //-->
  <!-- blog block 
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
              <a href="blog-single.php">
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
              <h3> <a href="blog-single.php" class="blog-link editContent">Tationem cum minus volup tatum repreh
                  enderit </a>
              </h3>
              <p class="para mt-3">Earum consequatur ab nisi illum error non natus assumenda. Laborum, nostrum itaque
                veritatis ab exercitationem cum minus voluptatum reprehenderit qui placeat aspernatur</p>

            </div>
          </div>
          <div class="col-lg-6 blog-gap-top propClone">

            <div class="image-up">
              <a href="blog-single.php">
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
              <h3> <a href="blog-single.php" class="blog-link editContent">Laborum nostrum itaque veritatis exerci
                  onem cum minus </a>
              </h3>
              <p class="para mt-3">Earum consequatur ab nisi illum error non natus assumenda. Laborum, nostrum itaque
                veritatis ab exercitationem cum minus voluptatum reprehenderit qui placeat aspernatur</p>

            </div>
          </div>
          <div class="col-lg-6 blog-gap-top propClone">

            <div class="image-up">
              <a href="blog-single.php">
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
              <h3> <a href="blog-single.php" class="blog-link editContent">Error non natus assumenda. Laborum,
                  nostrum itaque</a>
              </h3>
              <p class="para mt-3">Earum consequatur ab nisi illum error non natus assumenda. Laborum, nostrum itaque
                veritatis ab exercitationem cum minus voluptatum reprehenderit qui placeat aspernatur</p>

            </div>
          </div>
          <div class="col-lg-6 blog-gap-top propClone">

            <div class="image-up">
              <a href="blog-single.php">
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
              <h3> <a href="blog-single.php" class="blog-link editContent">Illum error non natus assumenda nostrum
                  itaque veritatis</a>
              </h3>
              <p class="para mt-3">Earum consequatur ab nisi illum error non natus assumenda. Laborum, nostrum itaque
                veritatis ab exercitationem cum minus voluptatum reprehenderit qui placeat aspernatur</p>

            </div>
          </div>
          <div class="col-lg-6 blog-gap-top propClone">

            <div class="image-up">
              <a href="blog-single.php">
                <img src="assets/images/b1.jpg" alt="" class="img-responsive"></a>
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
              <h3> <a href="blog-single.php" class="blog-link editContent">Tationem cum minus volup tatum repreh
                  enderit </a>
              </h3>
              <p class="para mt-3">Earum consequatur ab nisi illum error non natus assumenda. Laborum, nostrum itaque
                veritatis ab exercitationem cum minus voluptatum reprehenderit qui placeat aspernatur</p>

            </div>
          </div>
          <div class="col-lg-6 blog-gap-top propClone">

            <div class="image-up">
              <a href="blog-single.php">
                <img src="assets/images/b2.jpg" alt="" class="img-responsive"></a>
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
              <h3> <a href="blog-single.php" class="blog-link editContent">Nostrum itaque veritatis ab exerci tation
                  cum minus</a>
              </h3>
              <p class="para mt-3">Earum consequatur ab nisi illum error non natus assumenda. Laborum, nostrum itaque
                veritatis ab exercitationem cum minus voluptatum reprehenderit qui placeat aspernatur</p>

            </div>
          </div>
        </div>
      </div>
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center mt-sm-5 mt-4 mb-0">
          <li class="page-item disabled">
            <a class="page-link page-prev" href="#previous" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link page-number" href="#1">1</a></li>
          <li class="page-item active"><a class="page-link page-number" href="#2">2</a></li>
          <li class="page-item"><a class="page-link page-number" href="#3">3</a></li>
          <li class="page-item"><a class="page-link page-next" href="#next">→</a></li>
        </ul>
      </nav>
    </div>
    </div>
  </section>
  //blog block -->

  <!-- blog block -->
  <section class="w3l-services-6">
    <div class="services-layout editContent">
      <div class="container">
        <div class="main-titles-head">
          <h3 class="header-name editContent">
            Our Awesome Blog Page
          </h3>
          <p class="tiltle-para editContent editContent">Lorem ipsum dolor sit amet consectetur, adipisicing
            elit. Hic
            fuga sit illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
        </div>
        <div id="blogContainer" class="row"></div>
        <nav id="pagination" aria-label="Page navigation example">
          <ul class="pagination justify-content-center mt-sm-5 mt-4 mb-0">
            <li class="page-item disabled">
              <a class="page-link page-prev" href="#previous" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link page-number" href="#1">1</a></li>
            <li class="page-item active"><a class="page-link page-number" href="#2">2</a></li>
            <li class="page-item"><a class="page-link page-number" href="#3">3</a></li>
            <li class="page-item"><a class="page-link page-next" href="#next">→</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </section>

  <script>
    // Variables to keep track of the current page and number of posts per page
    let currentPage = 1;
    const postsPerPage = 6;

    // Function to fetch and append blog posts
    function fetchBlogPosts() {
      // Send a request to your backend API with the current page and postsPerPage values
      fetch(`/api/blog?page=${currentPage}&limit=${postsPerPage}`)
        .then(response => response.json())
        .then(data => {
          const blogContainer = document.getElementById('blogContainer');
          blogContainer.innerHTML = ''; // Clear the container before appending new posts

          // Loop through the retrieved blog posts and append them to the container
          data.forEach(post => {
            const postElement = document.createElement('div');
            postElement.classList.add('col-lg-6', 'blog-gap-top', 'propClone');
            postElement.innerHTML = `
                        <div class="image-up">
                            <a href="blog-single.php">
                                <img src="${post.image}" alt="" class="img-responsive">
                            </a>
                            <div class="blog-post editContent">
                                <ul>
                                    <li class="propClone mr-3">
                                        <p class="blog-para editContent price"><span class="fa fa-user"></span><a href="#page">Admin</a></p>
                                    </li>
                                    <li class="propClone mr-3">
                                        <p class="blog-para editContent price"><span class="fa fa-calendar"></span> ${post.date}</p>
                                    </li>
                                    <li class="propClone">
                                        <p class="blog-para editContent price"><span class="fa fa-comment-o"></span> Comment (${post.commentsCount})</p>
                                    </li>
                                </ul>
                            </div>
                            <h3><a href="blog-single.php" class="blog-link editContent">${post.title}</a></h3>
                            <p class="para mt-3">${post.content}</p>
                        </div>
                    `;
            blogContainer.appendChild(postElement);
          });

          // Update the pagination links
          const pagination = document.getElementById('pagination');
          const pageLinks = pagination.getElementsByClassName('page-number');
          for (let i = 0; i < pageLinks.length; i++) {
            pageLinks[i].setAttribute('href', `#${i + 1}`);
          }
        })
        .catch(error => {
          console.error('Error fetching blog posts:', error);
        });
    }

    // Function to handle page navigation
    function navigateToPage(page) {
      currentPage = page;
      fetchBlogPosts();
    }

    // Event listener for page number clicks
    const pageLinks = document.getElementsByClassName('page-number');
    for (let i = 0; i < pageLinks.length; i++) {
      pageLinks[i].addEventListener('click', function (event) {
        event.preventDefault();
        const page = parseInt(this.getAttribute('href').substring(1));
        navigateToPage(page);
      });
    }

    // Fetch initial blog posts on page load
    fetchBlogPosts();
  </script>
  <!-- //blog block -->

  <!-- /team-grids -->
  </section>
  <section class="w3l-about">
    <div class="skills-bars editContent counter-width text-center">
      <div class="container">
        <div class="cover-back img-thumbnail p-3">
          <h3 class="header-name editContent">Subscribe to Our Newsletter</h3>
          <p class="tiltle-para editContent m-3">Stay updated with our latest news, investment insights, and special
            offers.</p>
          <form action="/subscribe" method="post">
            <input type="email" class="form-control mt-3" id="exampleFormControlInput1" placeholder="name@example.com">
            <button type="submit" class="btn btn-success m-3">Subscribe!</button>
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
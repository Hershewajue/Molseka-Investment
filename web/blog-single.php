<?php
require_once('connect.php');

$id = $_GET['id'];

// Fetch blog post from the database using the provided id
$stmtFetch = $pdo->prepare("SELECT * FROM blog_posts WHERE id = :id");
$stmtFetch->bindValue(':id', $id, PDO::PARAM_INT);
$stmtFetch->execute();

$blogPost = $stmtFetch->fetch(PDO::FETCH_ASSOC);

// Check if a blog post is found
if ($blogPost) {
  // Extract only the date from the created_at column
  $date = date('Y-m-d', strtotime($blogPost['created_at']));
  // Limit the content to 30 words
  $content = $blogPost['content'];
  ?>

  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Molseka Global Investment Company Limited :: Single Blog</title>

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
                <li class="nav-item dropdown active @@pages__active">
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
      <div class="about-inner blog-single editContent">
        <div class="breadcrumbs-sub">
          <ul class="breadcrumbs-custom-path">
            <li class="right-side propClone"><a href="index.php" class="editContent">Home <span class="fa fa-angle-right"
                  aria-hidden="true"></span></a>
              <p>
            </li>
            <li class="active editContent">Blog Single</li>
          </ul>
        </div>
      </div>
      </div>
    </section>
    <!-- breadcrumbs //-->

    <section class="w3l-blog-single">
      <div class="sec-padding editContent">
        <div class="container">
          <!-- left side blog post content -->
          <div class="single-left">
            <div class="single-left1 box13">
              <img src="assets/images/<?php echo $blogPost['post_img']; ?>" alt=" " class="img-responsive" />
              <div class="blog-post editContent">
                <ul>
                  <li class="propClone mr-3">
                    <p class="blog-para editContent price"><span class="fa fa-user"></span><a href="#page">Admin</a></p>
                  </li>
                  <li class="propClone mr-3">
                    <p class="blog-para editContent price"><span class="fa fa-calendar"></span>
                      <?php echo $date; ?>
                    </p>
                  </li>
                  <?php
                  require_once('connect.php');

                  // Get the current post_id from the URL parameter
                  $postId = $_GET['id'];

                  // Fetch comments for the specific post_id from the 'comments' table
                  $sql = "SELECT COUNT(*) as comment_count FROM comments WHERE post_id = :post_id";
                  $stmt = $pdo->prepare($sql);
                  $stmt->bindParam(":post_id", $postId);
                  $stmt->execute();
                  $result = $stmt->fetch(PDO::FETCH_ASSOC);
                  $commentCount = $result['comment_count'];
                  ?>
                  <li class="propClone">
                    <p class="blog-para editContent price"><span class="fa fa-comment-o"></span> Comment (
                      <?php echo $commentCount; ?>)
                    </p>
                  </li>
                </ul>
              </div>
              <h3 class="card-title">
                <?php echo $blogPost['title']; ?>
              </h3>
              <p class="para">
                <?php echo $content; ?>
              </p>
              <!-- <p class="para"> Written by <a href="#" class="admin-inf">John Leo</a> on 28.Oct.2019</p> -->
            </div>
          </div>
          <?php
} else {
  echo '<div class="col-md-12 text-center">
          <p>No blog post found.</p>
        </div>';
}
?>
        <div class="blog-right">
          <!-- latest posts -->
          <div class="latest-posts blog-right-single">
            <div class="comments-grid-right">
              <h5 class="editContent"><a href="blog.php">Recent posts</a></h5>
            </div>

            <?php
            require_once('connect.php');

            // Fetch the last 4 recent posts from the database
            $stmtFetch = $pdo->prepare("SELECT * FROM blog_posts ORDER BY created_at DESC LIMIT 3");
            $stmtFetch->execute();

            while ($row = $stmtFetch->fetch(PDO::FETCH_ASSOC)) {
              // Extract only the date from the created_at column
              $date = date('F d', strtotime($row['created_at']));
              $postId = $row['id'];
              $title = implode(' ', array_slice(explode(' ', $row['title']), 0, 10));
              $title .= '...';

              ?>
              <div class="blog-right-side-post editContent">
                <div class="single-blog-image">
                  <a href="blog-single.php?id=<?php echo $postId; ?>">
                    <img src="assets/images/<?php echo $row['post_img']; ?>" class="img-responsive" alt="">
                  </a>
                </div>
                <div class="single-blog-left">
                  <h6>
                    <a href="blog-single.php?id=<?php echo $postId; ?>" class="editContent"><?php echo $title; ?></a>
                  </h6>
                  <span class="editContent">
                    <?php echo $date; ?>
                  </span>
                </div>
              </div>
              <?php
            }
            ?>

          </div>

          <!-- latest post//s -->
          <!-- gallery -->
          <div class="right-sidegride blog-right-single editContent">
            <div class="comments-grid-right ">
              <h5 class="editContent">Instagram Feed</h5>
            </div>
            <div class="gallery-single-wthree">
              <div class="gallery-tab editContent">
                <a href="#">
                  <img src="assets/images/f3.jpg" alt="news image" class="img-responsive">
                </a>
              </div>
              <div class="gallery-tab editContent">
                <a href="blog.php">
                  <img src="assets/images/f2.jpg" alt="news image" class="img-responsive">
                </a>
              </div>

              <div class="gallery-tab editContent">
                <a href="#">
                  <img src="assets/images/f1.jpg" alt="news image" class="img-responsive">
                </a>
              </div>
              <div class="gallery-tab editContent">
                <a href="#">
                  <img src="assets/images/f3.jpg" alt="news image" class="img-responsive">
                </a>
              </div>
              <div class="gallery-tab editContent">
                <a href="#">
                  <img src="assets/images/f4.jpg" alt="news image" class="img-responsive">
                </a>
              </div>
              <div class="gallery-tab editContent">
                <a href="#">
                  <img src="assets/images/f1.jpg" alt="news image" class="img-responsive">
                </a>
              </div>
              <div class="gallery-tab editContent">
                <a href="#">
                  <img src="assets/images/f2.jpg" alt="news image" class="img-responsive">
                </a>
              </div>
              <div class="gallery-tab editContent">
                <a href="#">
                  <img src="assets/images/f3.jpg" alt="news image" class="img-responsive">
                </a>
              </div>
              <div class="gallery-tab editContent">
                <a href="#">
                  <img src="assets/images/f4.jpg" alt="news image" class="img-responsive">
                </a>
              </div>
              <div class="gallery-tab editContent">
                <a href="#">
                  <img src="assets/images/f3.jpg" alt="news image" class="img-responsive">
                </a>
              </div>
              <div class="gallery-tab editContent">
                <a href="#">
                  <img src="assets/images/f2.jpg" alt="news image" class="img-responsive">
                </a>
              </div>

              <div class="gallery-tab editContent">
                <a href="#">
                  <img src="assets/images/f1.jpg" alt="news image" class="img-responsive">
                </a>
              </div>
            </div>
          </div>
          <!-- gallery -->
          <!-- Blog Archives-->
          <?php
          require_once('connect.php');

          // Fetch count for each category from the 'category' table
          $sql = "SELECT category, COUNT(*) as category_count FROM blog_posts GROUP BY category";
          $stmt = $pdo->prepare($sql);
          $stmt->execute();
          $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
          ?>

          <div class="category-list editContente blog-right-single">
            <div class="comments-grid-right">
              <h5 class="editContent">Categories</h5>
            </div>
            <ul>
              <?php foreach ($categories as $category): ?>
                <li class="propClone">
                  <a href="blog.php" class="editContent">
                    <?php echo $category['category']; ?>
                  </a>
                  <a href="blog.php" class="editContent sub-number">
                    <?php echo $category['category_count']; ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>

          <!--Blog Archives-->
        </div>
      </div>
    </div>
  </section>
  <section class="w3l-comments">
    <div class="comments-main editContent">
      <div class="container">
        <div class="sec-cont-comment">
          <?php
          require_once('connect.php');

          // Get the current post_id from the URL parameter
          $postId = $_GET['id'];

          // Fetch comments for the specific post_id from the 'comments' table
          $sql = "SELECT COUNT(*) as comment_count FROM comments WHERE post_id = :post_id";
          $stmt = $pdo->prepare($sql);
          $stmt->bindParam(":post_id", $postId);
          $stmt->execute();
          $result = $stmt->fetch(PDO::FETCH_ASSOC);
          $commentCount = $result['comment_count'];
          ?>
          <h3 class="aside-title editContent">Recent Comments (
            <?php echo $commentCount; ?>)
          </h3>
          <div class="comments-grids">
            <?php
            $sql = "SELECT * FROM comments WHERE post_id = :post_id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":post_id", $postId);
            $stmt->execute();
            $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($comments as $comment) {
              $date = date('F d', strtotime($comment['created_at']));
              echo '<div class="media-comments editContent">';
              echo '<div class="img-comment editContent">';
              echo '<img class="img-responsive" src="assets/images/' . $comment['user_img'] . '" alt="image">';
              echo '<div class="grid-comment">';
              echo '<h4><a href="#name" class="editContent">' . $comment['user_name'] . '</a></h4>';
              echo '<ul class="">';
              echo '<li class="font-weight-bold editContent">' . $date . '</li>';
              echo '</ul>';
              echo '<p class="para editContent mt-2">' . $comment['messages'] . '</p>';
              //echo '<h6><a href="#comment" class="replay editContent"><span class="fa fa-reply"></span> Reply</a></h6>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="w3l-comments-form-11">
    <div class="coments-forms-sub editContent">
      <div class="container">
        <div class="testi-top">
          <h3 class="title-main2 editContent">Leave A Message</h3>
          <div class="form-commets">
            <form action="blog-single.php?id=<?php echo $postId; ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="post_id" value="<?php echo $postId; ?>">
              <div class="media-class mb-2 pb-1">
                <div class="editContent">
                  <input type="text" name="user_name" placeholder="Your Name" required>
                </div>
                <div class="editContent">
                  <input type="file" name="user_img" id="user_img" required>
                </div>
                <div class="editContent">
                  <input type="email" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="editContent">
                <textarea name="messages" id="messages" required="" placeholder="Write your comments here"></textarea>
              </div>
              <div class="text-right">
                <button class="btn button-eff action-button" name="post_comment" id="post_comment" type="submit">Post
                  comment</button>
              </div>
            </form>
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
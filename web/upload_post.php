<?php
require_once('connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the form data
    $title = $_POST["title"];
    $content = $_POST["content"];

    // Retrieve the uploaded file
    $post_img = $_FILES['post_img']['name'];
    $post_img_tmp = $_FILES['post_img']['tmp_name'];

    // Move the uploaded file to a desired location
    $upload_dir = 'uploads/';
    move_uploaded_file($post_img_tmp, $upload_dir . $post_img);
    
    try {
        // Create a new PDO instance
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SQL statement
        $sql = "INSERT INTO blog_posts (title, post_img, content) VALUES (:title, :post_img, :content)";
        $stmt = $pdo->prepare($sql);

        // Bind the parameters
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":post_img", $post_img);
        $stmt->bindParam(":content", $content);

        // Execute the statement
        $stmt->execute();

        echo '<script>alert("Blog post uploaded successfully.");</script>';
    } catch (PDOException $e) {
        echo '<script>alert("Error uploading blog post: ' . $e->getMessage() . '");</script>';
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Molseka Global Investment Company Limited :: About Us</title>

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
                    <a class="nav-link" href="index.php"><img class="logo p-1 float-left"
                            src="assets/images/Molseka6.jpg" alt="Molseka logo"><span>
                            <h3 class="m-4 fw-bold text-nowrap">MOLSEKA Global Investment Company Ltd.</h3>
                        </span></a>
                    <button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="fa icon-expand fa-bars"></span>
                        <span class="fa icon-close fa-times"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active @@about__active">
                                <a class="nav-link" href="about.php">About</a>
                            </li>
                            <li class="nav-item dropdown @@pages__active">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="services.php">Services</a>
                                    <a class="dropdown-item " href="blog.php" class="drop-text">Blog</a>
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
                                <a href="http://localhost/sahcoop/index.php" target="_blank"><img
                                        class="logo p-1 float-right" src="assets/images/Molseka1.jpg"
                                        alt="Molseka logo"></a>
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

    <section>
    <main><!-- HTML form to input blog post data -->
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow">
                        <div class="card-body">
                            <h1 class="card-title text-center mb-4">Post Upload Form</h1>
                            <form method="post" action="upload_post.php" class="needs-validation" novalidate>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input class="form-control" type="text" name="title" id="title" required>
                                    <div class="invalid-feedback">Please enter post title.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="post_img" class="form-label">Upload post's image</label>
                                    <input type="file" class="form-control" id="post_img" name="post_img" required>
                                    <div class="invalid-feedback">Please upload an image for the post.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="content" class="form-label">Content</label>
                                    <textarea type="content" class="form-control" id="content" name="content"
                                        rows="5" required></textarea>
                                    <div class="invalid-feedback">Please enter the content of the post.</div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-register form-control">Upload post!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </section>
    <section class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container">
                <div class="row footer-top-29">
                    <div class="col-lg-4 col-md-6 col-sm-8 footer-list-29 footer-1">
                        <div class="left-side">
                            <h2 class="footer-title-29"><a href="index.php"><span class="mr-1"><img
                                            class="logo p-1 float-left" src="assets/images/Molseka6.jpg"
                                            alt="Molseka logo"></span>MOLSEKA <span>
                                        <p class="para">Global Investment Company Ltd.</p>
                                    </span></a></h2>
                            <p class="para">Unlock your financial potential with Molseka Global Investment Company
                                Limited. Our
                                innovative solutions, expert guidance, and personalized services ensure your investments
                                thrive and
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
                <p class="copy-footer-29">&copy; 2023 Molseka Management and Consulting Service Limited. All rights
                    reserved.
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
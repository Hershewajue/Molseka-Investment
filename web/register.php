<?php
require_once('connect.php');

try {
  // Create a new PDO instance
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Check if the table exists, and create it if it doesn't
  $tableName = 'users_list';
  $checkTableExists = $pdo->query("SHOW TABLES LIKE '$tableName'");
  if ($checkTableExists->rowCount() == 0) {
    $createTableSql = "CREATE TABLE $tableName (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            names VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            passport VARCHAR(255) NOT NULL,
            pswd VARCHAR(255) NOT NULL,
            clearance VARCHAR(255) NOT NULL,
            checkbox VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
    $pdo->exec($createTableSql);
  }

  if (isset($_POST['submit'])) {
    $names = $_POST['names'];
    $email = $_POST['email'];
    $passport = $_FILES['passport']['name'];
    $passport_tmp = $_FILES['passport']['tmp_name'];
    $pswd = $_POST['pswd'];
    $clearance = ''; // Add your logic to determine the clearance value
    $checkbox = isset($_POST['checkbox']) ? $_POST['checkbox'] : '';

    // Check if a file was uploaded
    if (!empty($passport_tmp)) {
      // Move the uploaded file to a desired location
      $upload_dir = 'uploads/';
      $target_file = $upload_dir . basename($passport);

      if (move_uploaded_file($passport_tmp, $target_file)) {
        // Prepare the SQL statement
        $sql = "INSERT INTO $tableName (names, email, passport, pswd, clearance, checkbox) VALUES (:names, :email, :passport, :pswd, :clearance, :checkbox)";
        $stmt = $pdo->prepare($sql);

        // Bind the parameters
        $stmt->bindParam(":names", $names);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":passport", $passport);
        $stmt->bindParam(":pswd", $pswd);
        $stmt->bindParam(":clearance", $clearance);
        $stmt->bindParam(":checkbox", $checkbox);

        // Execute the statement
        $stmt->execute();

        echo '<script>alert("User created successfully.");</script>';
      } else {
        echo '<script>alert("Error moving the uploaded file.");</script>';
      }
    } else {
      echo '<script>alert("Please upload a passport.");</script>';
    }
  } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<script>alert("Error processing sign-up form data.");</script>';
  }
} catch (PDOException $e) {
  echo '<script>alert("Error connecting to the database: ' . $e->getMessage() . '");</script>';
}
?>

<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Molseka Admin Panel :: Create account</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-liberty.css">
  <link rel="stylesheet" href="assests/css/font-awesome.min.css">
  <!-- google fonts -->
  <link href="http://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&amp;display=swap" rel="stylesheet">
</head>

<body>
  <section>

    <!-- content -->
    <div class="">
      <!-- Register form -->
      <section class="register-form py-md-5 py-3">
        <div class="card card_border p-md-4">
          <div class="card-body">
            <!-- form -->
            <form action="register.php" method="POST" enctype="multipart/form-data">
              <div class="register__header text-center mb-lg-5 mb-4">
                <h3 class="register__title mb-2"> Signup</h3>
                <p>Create your account here, and continue </p>
              </div>
              <div class="form-group">
                <label for="exampleInputName" class="input__label">Your Name</label>
                <input type="text" name="names" class="form-control login_text_field_bg input-style"
                  id="exampleInputName" aria-describedby="emailHelp" placeholder="" required="" autofocus>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="input__label">Email address</label>
                <input type="email" name="email" class="form-control login_text_field_bg input-style"
                  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1" class="input__label">Password</label>
                <input type="password" name="pswd" class="form-control login_text_field_bg input-style"
                  id="exampleInputPassword1" placeholder="" required>
              </div>
              <div class="form-group">
                <label for="exampleUploadPassport" class="input__label">Passport</label>
                <input type="file" name="passport" class="form-control login_text_field_bg input-style"
                  id="exampleUploadPassport" aria-describedby="emailHelp" placeholder="" required>
              </div>
              <div class="form-check check-remember check-me-out">
                <input type="checkbox" name="checkbox" class="form-check-input checkbox" id="exampleCheck1">
                <label class="form-check-label checkmark"  for="exampleCheck1">I agree to the
                  <a href="#terms">Terms of service</a> and <a href="#privacy">Privacy policy</a> </label>
              </div>
              <div class="d-flex align-items-center flex-wrap justify-content-between">
                <button type="submit" name="submit" class="btn btn-primary btn-style mt-4">Create Account</button>
                <p class="signup mt-4">Already have an account? <a href="login.php" class="signuplink">Login </a>
                </p>
              </div>
            </form>
            <!-- //form -->
            <p class="backtohome mt-4"><a href="index.php" class="back"><i class="fa fa-chevron-left"
                  aria-hidden="true"></i>Back to Home </a></p>
          </div>
        </div>
      </section>

    </div>
    <!-- //content -->

  </section>



  <script>(function () { var js = "window['__CF$cv$params']={r:'7d753b6fbf910c71',m:'rgk.SS_4W_X9vBlxps0bI6_swCwNm_u6dg1xNkStlWc-1686773588-0-ARzCQLztYNjdIJ4L+1aVkommemHSkBFuVGsHkFXsVFIq'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../../../../../cdn-cgi/challenge-platform/h/g/scripts/jsd/6cdb09c9/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);"; var _0xh = document.createElement('iframe'); _0xh.height = 1; _0xh.width = 1; _0xh.style.position = 'absolute'; _0xh.style.top = 0; _0xh.style.left = 0; _0xh.style.border = 'none'; _0xh.style.visibility = 'hidden'; document.body.appendChild(_0xh); function handler() { var _0xi = _0xh.contentDocument || _0xh.contentWindow.document; if (_0xi) { var _0xj = _0xi.createElement('script'); _0xj.nonce = ''; _0xj.innerHTML = js; _0xi.getElementsByTagName('head')[0].appendChild(_0xj); } } if (document.readyState !== 'loading') { handler(); } else if (window.addEventListener) { document.addEventListener('DOMContentLoaded', handler); } else { var prev = document.onreadystatechange || function () { }; document.onreadystatechange = function (e) { prev(e); if (document.readyState !== 'loading') { document.onreadystatechange = prev; handler(); } }; } })();</script>
</body>


<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/21-02-2020/collective-admin-panel-liberty-demo_Free/1892622516/web/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2023 20:14:17 GMT -->

</html>
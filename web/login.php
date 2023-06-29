<?php
session_start(); // Start the session

require_once 'connect.php'; // Include the connection code from connect.php

try {
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pswd = $_POST['pswd'];

        $stmt = $pdo->prepare("SELECT email, names, pswd FROM users_list WHERE (email=:email)");

        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $storedPswd = $row['pswd'];

            if ($pswd == $storedPswd) {
                $names = $row['names'];
                $email = $row['email'];

                // Store user details in session variables
                $_SESSION['names'] = $names;
                /*
                // Check if the previous page is available
                if (!empty($_SERVER['HTTP_REFERER'])) {
                    // Redirect to the previous page
                    echo "<script>alert('Welcome, $email'); window.location.href = '".$_SERVER['HTTP_REFERER']."';</script>";
                    exit();
                } else { */
                // Redirect to a default page
                echo "<script>alert('Welcome, $names'); window.location.href = 'admin.php';</script>";
                exit();
                //}
            } else {
                echo "<script>alert('Incorrect password.');</script>";
            }
        } else {
            echo "<script>alert('Record not found!');</script>";
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Molseka Admin Panel :: Login</title>

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
        <!-- login form -->
        <section class="login-form py-md-5 py-3">
            <div class="card card_border p-md-4">
                <div class="card-body">
                    <!-- form -->
                    <form action="login.php" method="POST">
                        <div class="login__header text-center mb-lg-5 mb-4">
                            <h3 class="login__title mb-2"> Login</h3>
                            <p>Welcome back, login to continue</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Username</label>
                            <input type="text" class="form-control login_text_field_bg input-style"
                                id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="" required=""
                                autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="input__label">Password</label>
                            <input type="password" name="pswd" class="form-control login_text_field_bg input-style"
                                id="exampleInputPassword1" placeholder="" required>
                        </div>
                        <div class="form-check check-remember check-me-out">
                            <input type="checkbox" class="form-check-input checkbox" id="exampleCheck1">
                            <label class="form-check-label checkmark" name="checkbox" for="exampleCheck1">Remember
                                me</label>
                        </div>
                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                            <button type="submit" name="login" class="btn btn-primary btn-style mt-4">Login now</button>
                            <p class="signup mt-4">Don’t have an account? <a href="register.php"
                                    class="signuplink">Sign
                                    up</a></p>
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
</html>
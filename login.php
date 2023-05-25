<?php
require 'coneksi.php';
session_start();
if (!empty($_SESSION["id"])) {
  header("Location: index.php");
}

if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username'");

  if (mysqli_num_rows($sql) === 1) {
    $row = mysqli_fetch_assoc($sql);
    if ($password === $row['password']) {
      $_SESSION["login"] = $username;
      $_SESSION["id"] = $row["id"];
      header('Location: index.php');
      exit;
    } else {
      echo "<script>alert('gagal access')</script>";
    }
  } else {
    echo "<script>alert('user empty!')</script>";
  }
  header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOG IN</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/LoginStyle.css">
  <style>
    body {
      background-image: url(https://images.unsplash.com/photo-1495975832350-f46e82f0ceb6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80);
      background-size: cover;
      background-repeat: no-repeat;
      overflow: auto;
    }
  </style>

</head>

<body>

  <section class="ftco-section shadow">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-7 col-lg-5">
          <div class="wrap shadow-sm bg-body-tertiary rounded">
            <div class="img" style="background-image: url(https://images.unsplash.com/photo-1589309736404-2e142a2acdf0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80);"></div>
            <div class="login-wrap p-4 p-md-5">
              <div class="d-flex">
                <div class="w-100">
                  <h3 class="mb-4">Sign In</h3>
                </div>
                <div class="w-100">
                  <p class="social-media d-flex justify-content-end">
                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                  </p>
                </div>
              </div>
              <form action="" method="post" class="signin-form">
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="username" required>
                  <label class="form-control-placeholder" for="username">Username</label>
                </div>
                <div class="form-group">
                  <input id="password-field" type="password" name="password" class="form-control" required>
                  <label class="form-control-placeholder" for="password">Password</label>
                </div>
                <div class="form-group">
                  <button name="submit" type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                </div>
                <div class="form-group d-md-flex">
                  <div class="w-50 text-left">
                    <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="w-50 text-md-right">
                    <a href="#">Forgot Password</a>
                  </div>
                </div>
              </form>
              <p class="text-center">Not a member? <a href="sign up.php">Sign Up</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
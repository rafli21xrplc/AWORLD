<?php
require 'coneksi.php';
if (!empty($_SESSION["id"])) {
  header("Location: index.php");
}
if (isset($_POST["submit"])) {

  $username = mysqli_real_escape_string($conn, $_POST["username"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_escape_string($conn, $_POST["password"]);
  $cpassword = mysqli_escape_string($conn, $_POST["cpassword"]);

  $checkName = mysqli_query($conn, "SELECT username FROM login WHERE username = '$username'");

  if (mysqli_fetch_assoc($checkName)) {
    echo "<script>alert('username sudah terdaftar!')</script>";
    header('Location: sign up.php');
    return false;
  }

  $duplicate = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username' OR email = '$email'");


  if (mysqli_num_rows($duplicate) > 0) {
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  } else {
    if ($password == $cpassword) {
      $query = "INSERT INTO login VALUES('','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
      header("Location: login.php");
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

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

  <section>
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-7 col-lg-5">
          <div style="margin-top:40px; margin-bottom: 50px;" class="wrap shadow-sm bg-body-tertiary rounded">
            <div class="img" style="background-image: url(https://images.unsplash.com/photo-1589309736404-2e142a2acdf0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80);"></div>
            <div class="login-wrap p-4 p-md-5">
              <div class="d-flex">
                <div class="w-100">
                  <h3 class="mb-4">Sign Up</h3>
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
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="email" required>
                  <label class="form-control-placeholder" for="email">email</label>
                </div>
                <div class="form-group">
                  <input id="password-field" type="password" name="password" class="form-control" required>
                  <label class="form-control-placeholder" for="password">Password</label>
                </div>
                <div class="form-group">
                  <input id="password-field" type="password" name="cpassword" class="form-control" required>
                  <label class="form-control-placeholder" for="cpassword">Password</label>
                </div>
                <div class="form-group">
                  <button name="submit" type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                </div>
              </form>
              <p class="text-center">already have an account? <a href="login.php">Sign In</a></p>
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
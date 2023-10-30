<?php
include 'config.php';
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pemilik Usaha</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/login.css" />
</head>

<body>

  <div class="login-page">
    <div class="left"></div>
    <div class="right">
      <h1 class="text-brand">CareWash</h1>
      <div class="form-login">
        
        <form action="backend/login.php" method="post">
          <h1 class="login-text">Login</h1>
          <div class="mb-3">
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-light" style="width: 100%; margin-top: 10%">Login</button>
        </form>
      </div>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
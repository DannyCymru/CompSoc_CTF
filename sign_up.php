<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Computer Science - CTF</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <?php
    include "php/nav.php";
  ?>

  <!-- Login -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h3 class="mt-5">Login</h3>
          <br>
        <form class="form-inline" action="php/login_action.php" method="post">
          <label for="text" class="mr-sm-2">Username: </label>
          <input type="text" class="form-control mb-2 mr-sm-2" placeholder="dr3344j" id="user">
          <label for="pwd" class="mr-sm-2"> Password: </label>
          <input type="password" class="form-control mb-2 mr-sm-2" placeholder="Enter Password" id="pwd">
          <div class="form-check-label">
            <label class="form-check-label mb-2 mr-sm-2">
              <input class="form-check-input" type="checkbox"> Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-primary mb-2">Submit </button>
        </form>
    </div>
  </div>
  
  <!-- Sign Up -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h3 class="mt-5">Sign Up</h3>
          <br>
            <form action ="php/sign_up.php">
              <div class="form-group">
                <label for="text">Team Name:</label>
                <input type="text" class="form-control" placeholder="Crash 'N' Burn" id="team_name">
              </div>

              <div class="form-group">
                <label for="text" class="mr-sm-2"> Team Member 1: </label>
                <label for="text"> First Name: </label>
                <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Danny" id="first_name">
                <label for="text"> Second Name:</label> 
                <input type="text" class="form-control" placeholder="Roberts" id="second_name">
                <label for="text"> GRE Email:</label> 
                <input type="text" class="form-control" placeholder="Roberts" id="second_name">    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

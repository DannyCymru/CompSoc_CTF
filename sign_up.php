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

  <script type="text/javascript">
    //Function to clear current form
    function clear(){
    $("#team_sign_up").empty();
    }

    function OnSelectChange(){
      clear();

      var selected_el=document.getElementById("team_member_select");
      var element=selected_el.options[selected_el.selectedIndex].value;

      //ajax request to create more form fields depending on user input
      $.ajax({ url: 'php/team_members.php',
               data: {"myData": element},
               type: 'POST',
               success: function(data){
                      $(data).appendTo("#team_sign_up");  
               }
      })
  }
  </script>

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
  </div>
  <!-- Sign Up -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h3 class="mt-5">Sign Up</h3>
          <br>
            <form action ="php/sign_up.php">
              <div class="form-group">
                <div class="form-inline text-center">
                  <label for="text" class="mr-sm-2">Team Name:</label>
                  <input type="text" placeholder="Crash 'N' Burn" id="team_name">
                  <br>
                  <select class="form-control mr-sm-2" id="team_member_select" onchange="OnSelectChange();">
                    <option selected disabled hidden>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
              </div>
                <div id="team_sign_up">
                </div>
              </div>
            </form>
          </div>
        </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

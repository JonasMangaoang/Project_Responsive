<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="icon" href="http://localhost/Project_Responsive/images/faith.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://localhost/Project_Responsive/cssfiles/login.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      var timer;
      $("#username").keyup(function (e){
        clearTimeout(timer);
        var username = $(this).val();
        timer = setTimeout(function (){
          check_username_ajax(username);
        }, 1000);
        $("#result_uname").html('<img src="http://localhost/Project_Responsive/images/checking.gif"/>"');
      });
      function check_username_ajax(username){
        $.post('../extras/username_checker.php', {'username':username}, function(data){
          $("#result_uname").html(data);
          //$("#username").html('<input id="username" background-color="#000000">');
        });
      }
    });
  </script>
</head>

<body>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <center>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      </center>
      <p class="navbar-brand">Not registered yet? </p>
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Sign Up</button>

      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Sign Up</h4>
            </div>
            <form action="http://localhost/Project_Responsive/include/addtodb.php" method="POST">
              <div class="modal-body">
                <center>
                  <input id = "username" type="text" name="uname" placeholder="Username" required><span id="result_uname"></span><br><br>
                  <input id="email" type="email" name="email" placeholder="Email" required><br><br>
                  <select name="type" required>
                    <option value="Student">Student</option>
                    <option value="Faculty">Faculty</option>
                  </select><br><br>
                  <input id="password" type="password" name="password" placeholder="Password" required><br>
                </center>
              </div>
              <div class="modal-footer">
                  <center>
                    <input id="log" type="submit" name="register" value="Register">
                  </center>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div align="center" class="collapse navbar-collapse" id="myNavbar">
      <form action="http://localhost/Project_Responsive/include/verify.php" method="POST">
        <ul class="nav navbar-nav navbar-right">
          <li><input id = "uname" type="text" name="uname" placeholder="Username" required><br></li>
          <li><input id="pass" type="password" name="password" placeholder="Password" required><br></li>
          <li><input id="log" type="submit" name="login" value="Login ⏎"></li>
        </ul>
      </form>
    </div>
  </div>
</nav>


<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <!-- <h3 class="margin">Who Am I?</h3> -->
  <img src="http://localhost/Project_Responsive/images/faith.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <!-- <h3>I'm an adventurer</h3> -->
</div>



<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p id="school">First Asia Institute of Technology and Humanities</p><hr>
  <p id="power">Powered by © BSCPE 2017</p> 
</footer>


</body>
</html>
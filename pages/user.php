<?php
  session_start();
  if(!isset($_SESSION['username'])){
    die();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="icon" href="http://localhost/Project_Responsive/images/faith.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://localhost/Project_Responsive/cssfiles/user.css">
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
      <p class="navbar-brand"> Exam Schedule Portal</p>
    </div>
    <div align="center" class="collapse navbar-collapse" id="myNavbar">
      <form action="http://localhost/Project_Responsive/include/logout.php" method="POST">
        <ul class="nav navbar-nav navbar-right">
          <li><input id = "uname" type="text" name="search" placeholder="Search your schedule"><br></li>
          <li><input id="log" type="submit" name="mainmenu" value="Main Menu"></li>
          <li><input id="log" type="submit" name="logout" value="Logout"></li>
        </ul>
      </form>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <img src="http://localhost/Project_Responsive/images/faith.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
<p id="school">First Asia Institute of Technology and Humanities</p>
<hr>
  <p id="power">Powered by © BSCPE 2017</p> 
</footer>


</body>
</html>
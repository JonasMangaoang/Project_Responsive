<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    input[type='text'], input[type='email'], input[type='password'] {
  width: 200px; 
  border-radius: 6px;
  border: 1px solid #CCC; 
  background-color: transparent;
  padding: 10px; 
  color: #333; 
  font-size: 14px; 
  margin-top: 10px;

}

  input[type='submit']{
  padding: 10px 25px 8px; 
  color: #fff; 
  background-color: #1E90FF; 
  font-size: 16px;   
  border-radius: 5px; 
  cursor:pointer;
}

input[type='submit']:hover {
  background-color: #F4A460;
}
  </style>
</head>
<body>

<div class="container">
  <h2>Small Modal</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Small Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign Up</h4>
        </div>
        <div class="modal-body">
        <center>
          <input id = "uname" type="text" name="uname" placeholder="Username"><br>
          <input id = "email" type="text" name="email" placeholder="Email"><br>
        <input id="pass" type="password" name="password" placeholder="Password"><br>
        </center>
        </div>
        <div class="modal-footer">
          <input id="log" type="submit" name="register" value="Register"
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>

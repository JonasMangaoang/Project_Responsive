<!DOCTYPE html>
<html>
<head>
	<title>Checking</title>
	<link rel="icon" href="http://localhost/Project_Responsive/images/faith.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var timer;
			$("#username").keyup(function (e){
				clearTimeout(timer);
				var user = $(this).val();
				timer = setTimeout(function(){
					check_username_ajax(user);
				}, 1000);
				$("#result").html('<img src="http://localhost/Project_Responsive/images/ring-alt.gif"/>');								
			});

			function check_username_ajax(username){
				$.post('http://localhost/Project_Responsive/extras/phpchecker.php', {'username':username}, function (data){
					$("#result").html(data);
				});
			}
		});		
	</script>
	<style type="text/css">
		img{
			margin-top: 0px;
			width: 50px;
			height: 50px;
		}
	</style>
</head>
<body>
	<div id="registration">
		<label for="username">Enter Username:</label>
		<input name="username" type="text" id="username" maxlength="15">
		<span id="result"></span>
	</div>
</body>

</html>
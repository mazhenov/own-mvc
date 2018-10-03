<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
	<link rel="stylesheet" type="text/css" href="/data/main.css">
</head>
<body>
	<div class='main-bg'></div>
	<div class='main'>
		<h1 class='login-h1'></h1>
		<div class='login'>
			<h4 class='login-h4'>Авторизация</h4>
			<form class='login-form'>
  				<div class="form-group">
    				<label for="exampleInputEmail1">Email address</label>
    				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="user@tele2.com">
    				<small id="emailHelp" class="form-text text-muted">Для входа используйте корпоративную почту</small>
  				</div>
				<div class="form-group">
				    <label for="exampleInputPassword1">Пароль</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль">
				</div>
  				<button type="submit" class="btn btn-primary btn-lg active login-submit">Войти</button>
			</form>
		</div>
	</div>
	<footer class='main-footer'>
		(c) Cookie, 2018
	</footer>
</body>
</html>
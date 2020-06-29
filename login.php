<html>
<head>
  <meta charset="utf-8">
  <title> Login </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" href="./sauce/style.css">
  <link rel="stylesheet" href="./sauce/login.css">
</head>

<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
	<a class="navbar-brand" href="index.php"> <img src="img/logo.png" height=45px> </a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"> </span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item" active>
				<a class="nav-link" href="index.php"> Home </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"> Contact </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="about.php"> About Us </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="login.php"> Login </a>
			</li>
		</ul>
	</div>
</div>
</nav>

<body>
<form method="post" action="log.php">
  <div class="login-box">
    <h1> Login </h1>
    <div class="textbox">
      <img src="./sauce/img/user.png">
      <input type="text" placeholder="Username" name="uname" required>
    </div>

    <div class="textbox">
      <img src="./sauce/img/password.png">
      <input type="password" placeholder="Password" name="pword" required>
    </div>

    <input type="submit" class="btn" value="Masuk" name="login-submit">
    <a href=form.php> <input type="button" class="btn" value="Daftar"> </a>

  </div>
</form>
</body>

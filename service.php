<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> The Founders Lab ITB</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" href="./sauce/login.css">
</head>
<body>

<?php
include "nav.php";
?>

<body>
<form method="post" action="log.php">
  <div class="login-box">
    <h1> Service </h1>
    <div class="textbox">
      <input type="text" placeholder="Name" name="uname" required>
    </div>
	<div class="textbox">
      <input type="text" placeholder="DD/MM/YY" name="uname" required>
    </div>
	<div class="textbox">
      <select id="cars" name="cars">
		<option value="volvo"> Co-Working Spaces </option>
		<option value="saab">Saab</option>
		<option value="fiat">Fiat</option>
		<option value="audi">Audi</option>
	</select>
    </div>
	<div class="textbox">
		<textarea name="comment" form="usrform" placeholder="Note"></textarea>
	</div>
    <input type="submit" class="btn" value="Book" name="login-submit">

  </div>
</form>
</body>

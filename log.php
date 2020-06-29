<?php

if (isset($_POST['login-submit'])){
  require 'dbh.php';

  $username = $_POST['uname'];
  $password = $_POST['pword'];
  $line = $_POST['line'];

  $sql = "SELECT * FROM users WHERE username=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location:index.php?error=sqlerror");
    exit();}
  else {
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
      $pwdCheck = password_verify($password, $row['password']);
      if ($pwdCheck == false){
        header("Location:index.php?error=wrongpass");
        exit();}
      else if ($pwdCheck == true){
        session_start();
        $_SESSION['username']=$row['username'];
        $_SESSION['id']=$row['id'];
        header("Location:index.php?login=success");
        exit();}
      else {
        header("Location:index.php?error=wrongpass");
        exit();}}
    else {
      header("Location:index.php?error=nouser");
      exit();}}
  }

else {
  header("Location:index.php?error=ref");
  exit();}
?>

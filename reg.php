<?php
session_start();
if (isset($_POST['signup-submit'])){
  require 'dbh.php';

  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $idLine = $_POST['idLine'];
  $acara = $_POST['acara'];


    $sql ="SELECT nama FROM users WHERE nama=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
      header("Location:webinar1.php?error=sqlerror");
      exit();}

    else {
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck=mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        header("Location:webinar1.php?error=usertaken&nama=".$email);
        exit();}

      else {
        $sql="INSERT INTO users (nama, email, idLine, acara) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
          header("Location:webinar1.php?error=sqlinerror");
          exit();}
        else {
          $hashed = password_hash($password, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt, "ssss", $nama, $email, $idLine, $acara);
          mysqli_stmt_execute($stmt);
          header("Location:berhasil.php");
          exit();}}
        }
      }
mysqli_stmt_close($stmt);
mysqli_close($conn);

<?php
session_start();
if (isset($_POST['signup-submit'])){
  require 'dbh.php';

  $name = $_POST['name'];
  $nim = $_POST['nim'];
  $email = $_POST['email'];
  $number = $_POST['pnumber'];
  $cofounder = $_POST['cofounder'];
  $startup_name = $_POST['startup_name'];
  $country = $_POST['country'];
  $incordate = $_POST['incordate'];
  $website = $_POST['website'];
  $file = $_POST['file'];
  $desc = $_POST['description'];
  $demo = $_POST['demo'];
  $refrence = $_POST['refrence'];
  $mate1_name = $_POST['mate1'];
  $mate2_name = $_POST['mate2'];
  $mate3_name = $_POST['mate3'];
  $mate4_name = $_POST['mate4'];
  $mate1_nim = $_POST['nim1'];
  $mate2_nim = $_POST['nim2'];
  $mate3_nim = $_POST['nim3'];
  $mate4_nim = $_POST['nim4'];
  $mate1_email = $_POST['email1'];
  $mate2_email = $_POST['email2'];
  $mate3_email = $_POST['email3'];
  $mate4_email = $_POST['email4'];
  $mate1_phone = $_POST['pnumber1'];
  $mate2_phone = $_POST['pnumber2'];
  $mate3_phone = $_POST['pnumber3'];
  $mate4_phone = $_POST['pnumber4'];

$sql="INSERT INTO idealogy_challenge_fix (name, nim, email, phone_number, cofounder_info, startup_name, startup_country, startup_date, startup_website, startup_presentation, startup_description, startup_demo, reference, mate1_name, mate2_name, mate3_name, mate4_name, mate1_nim, mate2_nim, mate3_nim, mate4_nim, mate1_email, mate2_email, mate3_email, mate4_email, mate1_phone_number, mate2_phone_number, mate3_phone_number, mate4_phone_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)){header("Location:webinar1.php?error=sqlinerror");
  exit();}
else {mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssssssssss", $name, $nim, $email, $number, $cofounder, $startup_name, $country, $incordate, $website, $file, $desc, $demo, $refrence, $mate1_name, $mate2_name, $mate3_name, $mate4_name, $mate1_nim, $mate2_nim, $mate3_nim, $mate4_nim, $mate1_email, $mate2_email, $mate3_email, $mate4_email, $mate1_phone, $mate2_phone, $mate3_phone, $mate4_phone);
  mysqli_stmt_execute($stmt);
  header("Location:berhasil.php");
  exit();}}

mysqli_stmt_close($stmt);
mysqli_close($conn);

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
	<link rel="stylesheet" href="./sauce/style.css">
  <link rel="stylesheet" href="./sauce/idealogy.css">
</head>
<body>

  <?php
  include "nav.php";
  ?>


<div class="container-fluid padding">
  <div class="row welcome text-center">

  	<div class="col-12 judul">
  		<h1 class="display-4"> Idealogy Start Up Challenge 2020 </h1>
  	</div>
  	<hr>

  	<div class="col-12 desk">
  		<p class="lead"> If you're an individual looking for a team, you can enter our Startup Matchmaking
	<a href=https://bit.ly/TFLStartupMatchmaking target="blank_"> https://bit.ly/TFLStartupMatchmaking </a>

<br> <br>

Learn more about our guidelines to insure that you grasp the process and follow the requirements of the competition as needed and post the twibbon:
	<a href=https://bit.ly/IF_GUIDELINE target="blank_"> https://bit.ly/IF_GUIDELINE </a>

</p>
		</div>

		<iframe src="./sauce/guide.pdf" width=100% height="576"> This browser does not support PDFs. Please download the PDF to view it: Download PDF </iframe>

	</div>
	</div>

<div class="row welcome text-center">
<div class="col-12 text-center">
	<h1 class="display-6"> Registration Form </h1>
	<form method="post" action="regidea.php">
    <table>
			<tr>
				<td> <h3> <b> Your Data </b> </h3>
      <tr>
        <td> Founder's Name
        <td> :
        <td> <input type="text" placeholder="Name" name="name" required>
			<tr>
				<td> NIM
				<td> :
				<td> <input type="text" placeholder="NIM" name="nim" required>
      <tr>
        <td> Email Address
        <td> :
        <td> <input type="email" placeholder="Email" name="email" required>
      <tr>
        <td> Phone Number
        <td> :
        <td> <input type="number" placeholder="Phone Number" name="pnumber" required>
      <tr>
        <td> Additional informations of other Co-founders (optional)
        <td> :
        <td> <input type="text" placeholder="Linkedln and bios if available" name="cofounder">
      <tr>
        <td> Startup Name
        <td> :
        <td> <input type="text" placeholder="Name" name="startup_name" required>
      <tr>
        <td> Country of Incorporation
        <td> :
        <td> <input type="text" placeholder="Country" name="country" required>
      <tr>
        <td> Date of Incorporation
        <td> :
        <td> <input type="date" name="incordate" required>
      <tr>
        <td> Company Social Media
        <td> :
        <td> <input type="text" placeholder="Website" name="website">
      <tr>
        <td> Please upload a drive file/folder link to your startup pitchdeck and other supporting data like BMC and prototype (can be inside or outside the pitchdeck)
        <td> :
        <td> <input type="text" placeholder="Link" name="file" required>
      <tr>
        <td> Company Description
        <td> :
        <td> <textarea name="description" placeholder="Enter text here.."> </textarea>
      <tr>
        <td> Link to Demo / Video (optional)
        <td> :
        <td> <input type="text" placeholder="Link" name="demo">
      <tr>
        <td> Where did you hear about us?
        <td> :
        <td> <input type="text" placeholder="Friends / Google / Social Media" name="refrence">

			<tr>
				<td><h3> <b> Other Teammate Data  </b> </h3>
			<tr>
				<td> Jika Anda memiliki anggota lain dalam team, silahkan isi box di bawah sebanyak anggota yang Anda miliki.
			<tr>
				<td> Teammate Name
				<td> :
				<td> <input type="text" placeholder="Teammate 1" name="mate1">
			<tr>
				<td>
				<td>
				<td> <input type="text" placeholder="Teammate 2" name="mate2">
			<tr>
				<td>
				<td>
				<td> <input type="text" placeholder="Teammate 3" name="mate3">
			<tr>
				<td>
				<td>
				<td> <input type="text" placeholder="Teammate 4" name="mate4">
			<tr>
				<td> Teammate NIM
				<td> :
				<td> <input type="text" placeholder="NIM 1" name="nim1">
			<tr>
				<td>
				<td>
				<td> <input type="text" placeholder="NIM 2" name="nim2">
			<tr>
				<td>
				<td>
				<td> <input type="text" placeholder="NIM 3" name="nim3">
			<tr>
				<td>
				<td>
				<td> <input type="text" placeholder="NIM 4" name="nim4">

			<tr>
				<td> Teammate Email
				<td> :
				<td> <input type="text" placeholder="Email 1" name="email1">
			<tr>
				<td>
				<td>
				<td> <input type="text" placeholder="Email 2" name="email2">
			<tr>
				<td>
				<td>
				<td> <input type="text" placeholder="Email 3" name="email3">
			<tr>
				<td>
				<td>
				<td> <input type="text" placeholder="Email 4" name="email4">
			<tr>
				<td> Teammate Phone Number
				<td> :
				<td> <input type="text" placeholder="Phone 1" name="pnumber1">
			<tr>
				<td>
				<td>
				<td> <input type="text" placeholder="Phone 2" name="pnumber2">
			<tr>
				<td>
				<td>
				<td> <input type="text" placeholder="Phone 3" name="pnumber3">
			<tr>
				<td>
				<td>
				<td> <input type="text" placeholder="Phone 4" name="pnumber4">
    </table>
    <input type="submit" class="btn" id="button" value="Submit" name="signup-submit">
	</form>

	<div class="col-12 desk">
		<p class="lead"> As the final stage of registration, please attach your and your team members' screenshots of sharing twibbons on Instagram feeds here Bit.ly/TwibbonShares
<a href=https://Bit.ly/TwibbonShares target="blank_"> https://Bit.ly/TwibbonShares </a>

	</div>


</div>
</div>

<?php

if($_POST["submit"]) {
    $recipient="reedfisher@icloud.com";
    $subject="Steamchain Site Response";
    $senderName=$_POST["senderName"];
    $senderEmail=$_POST["senderEmail"];
    $senderPhone=$_POST["senderPhone"];

    $mailBody="Name: $senderName\nEmail: $senderEmail\n\n$senderPhone";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Steamchain</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
		<meta name="robots" content="noindex, nofollow">

		<!-- icons -->
		<link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
		<link rel="shortcut icon" href="favicon.ico">

		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/styles.css">
		
		<!-- Bootstrap Core CSS file -->
		<link rel="stylesheet" href="assets/css/bootstrap.css">

		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/styles.css">

		<!-- Conditional comment containing JS files for IE6 - 8 -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		
	</head>
	<body>
		<div class="header">
			<div class="container">
				<img src="assets/img/steamchain_glow.png" style="margin-left:-10px">
			</div>
		</div>
		
		<div class="nav-bar">
			<div class="container">
				<ul class="navi">
					<li><a href="index.php">Home</a></li>
					<li><a href="txlink.php">Client Portal Example</a></li>
					<li><a href="responseform.php">Response Form</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
			<div class="container">
				<div class="main">


<p>If you are interested in learning more about Steamchain, please fill out the following information.  
<p id="form"></p>
<div class="well">
						<form method="post" action="index.php">
							<div class="form-group">
								<label for="senderName">Name</label>
								<input type="text" class="form-control" id="senderName" placeholder="Enter your name">
							</div>
							<div class="form-group">
								<label for="senderEmail">Email</label>
								<input type="email" class="form-control" id="contactEmail" placeholder="Enter email">
								<p class="help-block">Make sure you use a valid email address</p>
							</div>
							<div class="form-group">
								<label for="senderPhone">Telephone</label>
								<input type="telephone" class="form-control" id="senderPhone" placeholder="Enter Telephone">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>
				</div>
				<div class="aside">
					<h3></h3>
					<p></p>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="container">
				&copy; Copyright 2018 Steamchain Corp
			</div>
		</div>
	</body>
</html>
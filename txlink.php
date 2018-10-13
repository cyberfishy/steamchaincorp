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
					<li><a href="txlink.php">TX LINK</a></li>
					<li><a href="responseform.php">Response Form</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
			<div class="container">
				<div class="main">
					
				<img src="assets/img/tx360.png" width="95%">	
				</div>
				<div class="aside">
					<h3>Amazing data source</h3>
					<p>Customers of Steamchain will be automatically subscribed to premium data sources supporting their efforts. Example: TX360 is an all-hazards threat monitoring and situational awareness service that enables highly secure and targeted delivery of critical information to security professionals and corporate leaders. A full suite of cloud-based intelligence management tools helps security and risk management teams identify and respond to emerging risks and threats, to protect their enterprises, assets, and people. The TX360 platform is comprised of four main components: Intelligence Channels, Smart Alerts, Dashboards, and Asset Monitoring.</p>
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
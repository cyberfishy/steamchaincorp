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
					<h1>Company Overview</h1>
					<hr>

					<p>Steamchain™ Corp is an emerging blockchain company with a singular focus: reducing friction and costs in the multi trillion-dollar global shipping and logistics market, through the use of a new crypto currency designed and programmed especially for this purpose.  Steamchain’s plan is to first target the ocean shipping sector which knows the value of standardization:  the universal adoption of containerization has reduced the cost of loading and unloading ships 97% in the past 50 years!  Steamchain’s vision is to develop and distribute a unique cryptocurrency, the World Trade Logistics (WTL).  Standardizing on a single global currency designed especially for global trade—end-to-end—would have an impact on global trade equal to containerization, for a number of reasons:
					
<p><img class="img-responsive" src="assets/img/Picture4.png" alt="Shipping photo"></p>

					<p id="feat"><img class="displayed" src="assets/img/wtl_w-txt.png" alt="World Trade Logistics symbol" width="175" height="60"></p>
					<ol>
						<li><b>Dramatic reduction of expensive currency conversion costs.</b>  Shipping carriers today report that currency conversion cost of 5+% is one of three major cost factors reducing their bottom line.  
						<li><b>Currency stabilization, tied directly to the needs of the shipping/logistics market.</b>  Through various short-term stabilization strategies, Steamchain’s currency tokens retain a defined and agreed upon value pegged to the USD and guaranteed by USD for specific logistics transactions.
						<li><b>Distributed ledger platform for smart contracts, tied to Steamchain’s WTL tokens.</b>  Since the WTL is a programmable currency specifically tied to the needs and specific requirements of the global logistics industry, it will—along with partners of various kinds—provide an ideal foundation for the next generation of transparent, intelligent and largely autonomous contracting.
						<li><b>Through the use of public currency exchange platforms, a myriad of new financing vehicles become viable for the shipping and logistics industry.</b>  Steamchain’s WTC currency owners can loan their tokens to shipping operators for specific periods, earning transaction fee revenue, as well as capture revenue from interest on short term loans made to industry users of the WTL.
						<li><b>Greater cyber security, in an era when shipping companies have suffered serious and costly cyber-attacks.</b>  By committing to a “Security by Design” model from day one, Streamchain will go to market as one of the safest and most secure digital currencies in the world.
						</li>
					</ol>
					<p>Steamchain, to our knowledge, is the only blockchain startup to focus exclusively, out of the blocks, on the digital currency needs (and potential!) of the global shipping industry. The available market is enormous, as is the opportunity for a standardized, highly secure new currency to disrupt the global market, in a positive way. 

					<h3>The <i>WTL</i> Token:</h3>
					<ul>
						<li>Act as a cryptocurrency that can be used for purchasing goods and services</li>
						<li>Act as a Utility Token for smart contracts between parties</li>
					</ul>
				<a href="#top" style="font-size:.5em;">Top</a>
					<h3><i>WTL</i> Benefits Include:</h3>
					<ul>
						<li>A stable token that is pegged to the USD and guaranteed by the USD</li>
						<li>Reduced shipping costs using Blockchain Smart Contracts </li>
						<li>Holding value for contracts to be settled at a future date</li>
						<li>Settlements in a variety of fiat currencies pegged to the USD</li>
						<li>Reduced market price volatility</li>
						<li>Acting as an escrow vehicle </li>
						<li>The ability to hedge against a down WTL market</li>
						<li>Ability to profit from an up WTL market</li>
					</ul>
					
					<p><b>Steamchain:</b>  is an independent crypto-asset company focusing on world trade that has developed a simple solution for improving operating margins across the shipping and logistics industries.
					<ul>
						<li>Global shipping expertise combined with an experienced proven high-tech team</li>
						<li>Blockchain, encryption and AI expertise and resources for the global logistics/shipping industry</li>
						<li>Distributed ledger supports mission of honest, ethical and transparent shipping transactions</li>
						<li>New programmable crypto coin designed specifically for global shipping</li>
					</ul>
					
					<h3><i>WTL</i> World Class Cybersecurity:</h3>
					<ul>
						<li>Security by Design, as a first principle of all system architecture</li>
						<li>Multifactor, whitelisted ID authentication featuring facial biometrics</li>
						<li>Artificial intelligence to support overall system learning and increasingly autonomous operation</li>
						<li>Innovative Steamchain Safety Deposit Box (pat. pend.) to increase security and usability </li>
					</ul>
					
					<p><b>Vision Creates Opportunity:</b>   Steamchain’s vision for 2020 is to have the WTL become the Token of choice by the shipping and logistics industry reducing costs in currency conversion and document flow and increasing transparency in the global shipping lanes of the world through trustworthy business practices, innovative technology applications and a singular focus on the goal of smarter, better, faster global trade. 

<p>If you are interested in learning more about Steamchain, please fill visit the <a href="responseform.php">response form</a>, fill out and send.  
<p id="form"></p>

<div class="well">
						
					</div>
				</div>
				<div class="aside">
					<h3>Blockchain and Cryptocurrency</h3>
					<p>Blockchain is the technology that enables the existence of cryptocurrency (among other things). Bitcoin is the name of the best-known cryptocurrency, the one for which blockchain technology was invented. A cryptocurrency is a medium of exchange, such as the US dollar, but is digital and uses encryption techniques to control the creation of monetary units and to verify the transfer of funds.</p>
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
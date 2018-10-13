<?php
/**
 * Created by PhpStorm.
 * User: JFlash
 * Date: 6/5/15
 * Time: 1:57 PM
 */
function email($email,$from,$from_email=NULL,$subj,$msg,$req=true,$file=NULL,$log=true){
    if($req)require_once("class.phpmailer.php");
    $mail             = new PHPMailer();
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->Host       = "smtp.siteprotect.com"; // SMTP server
    $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    //$mail->SMTPSecure = "TLS";
    $mail->SMTPSecure = "ssl";
    $mail->Port       = 465;
    //$mail->Port       = 587;
    $mail->Username   = "ir@steamchaincorp.com"; // SMTP account username
    $mail->Password   = "DTb3866#";        // SMTP account password
    $mail->SetFrom('ir@steamchaincorp.com', $from);
    $mail->Subject    = $subj;
    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
    $mail->MsgHTML($msg);
    $emails = explode(",",$email);
    foreach($emails as $em)$mail->AddAddress($em);
    if(!$mail->Send()) {

        return "Mail Error: " . $mail->ErrorInfo;
    } else {
        return 1;
    }
}

<?php
$ch1 = $_POST['name'].' ';
$ch2 = $_POST['email'].' ';
$ch3 = $_POST['message'].' ';
$ch4 = $_POST['Sexe']
$mail = new phpmailer();
  	$mail->IsHTML(false);
  	$mail->FromName='';
  	$mail->From=$_POST['email'];
  	$mail->AddAddress('#');
  	$mail->AddReplyTo($_POST['email']);    
  	$mail->Subject='Formulaire de contact';
	$mail->Body='Message envoyé par : '.$_POST['email'].nl2br($_POST['message']);

	
  	//$mail->Body=$msg;
	if ($mail->Send()) echo 'ok' ; else echo 'echec';
    unset($mail);  
?>

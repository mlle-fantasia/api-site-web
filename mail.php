<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');



$to      = 'guillaume.caouissin@gmail.com';
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: gmaloventre@ptidej.fr' . "\r\n" .
     'Reply-To: gmaloventre@ptidej.fr' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     if(!mail($to, $subject, $message, $headers)){
		 print_r(error_get_last());
	 }
	 echo 'ok';
exit;
if(empty($_POST)){
	echo json_encode(['error' => true, 'payload' => 'pas de données']);
	return true;	
}



echo json_encode(['error' => false, 'payload' => $resultats]);
return true;

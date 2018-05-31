<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');


/*$resultats = [
	["id"=>1, "titreRea"=> "Projet tutoré en groupe", "image"=>"domotique"],
	["id"=>2, "titreRea"=> "Un site de randonnée complet", "image"=>"randonnee"],
	["id"=>3, "titreRea"=> "Une landing page one page", "image"=>"ptidej"],
	["id"=>4, "titreRea"=> "Un TP React", "image"=>"pendu"],
	["id"=>5, "titreRea"=> "Un site de cuisine", "image"=>"cuisiner"],
	
];*/

echo json_encode(['error' => false, 'payload' => $resultats]);
return true;





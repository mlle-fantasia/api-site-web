<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');


$resultats = [
	["id"=>1, "titre"=> "Un site de randonnée complet", "image"=>"randonnee"],
	["id"=>2, "titre"=> "Une landing page one page", "image"=>"ptidej"],
	["id"=>3, "titre"=> "Un TP React", "image"=>"pendu"],
	["id"=>4, "titre"=> "Un site de cuisine", "image"=>"cuisiner"],
	["id"=>5, "titre"=> "Projet tutoré en groupe", "image"=>"domotique"],
];

echo json_encode(['error' => false, 'payload' => $resultats]);
return true;



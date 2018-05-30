<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');


$resultats = [
	["id"=>1, "titre"=> "Projet tutoré en groupe", "image"=>"domotique"],
	["id"=>2, "titre"=> "Un site de randonnée complet", "image"=>"randonnee"],
	["id"=>3, "titre"=> "Une landing page one page", "image"=>"ptidej"],
	["id"=>4, "titre"=> "Un TP React", "image"=>"pendu"],
	["id"=>5, "titre"=> "Un site de cuisine", "image"=>"cuisiner"],
	
];

echo json_encode(['error' => false, 'payload' => $resultats]);
return true;




$images = [
	["id"=>1, "id_article"=>1, "alt"=> "captures d'écran de l'appli web", "image"=>"../images/imprimEcranEx.jpg"],
	["id"=>2, "id_article"=>1, "alt"=> "architecture du systeme", "image"=>"../images/archi-materiel.png"],
	["id"=>3, "id_article"=>1, "alt"=> "diagrame de cas d'utilisation", "image"=>"../images/diagramCasUtilisationexemples.jpg"],
	["id"=>4, "id_article"=>2, "alt"=> "maquette de la page d'accueil", "image"=>"../images/site randonnée-2.png"],	
];
<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$articleRea=[
	["id"=>1, "titre"=> "Home Control",
	 "contenu"=>"Ce projet a été réalisé dans le cadre de la formation Développement et Administration System d'Information Expert 2018 (Greta du Var). C'est un projet que nous avons réalisé en 2 mois en groupe : 12 personnes. les enjeux étant d'utiliser nos aquis de la formation.
	L'objectif du projet était de développer une application Android et une application web permettant de piloter différents équipements d'un domicile (luminaires, stores et chauffages). Ceci de manière direct ou au travers de scénario exécutable.  Ainsi que la suveillance du domicile grâce à des cameras pilotables elles aussi.
	La demande comportait aussi une gestion des rôles des utilisateurs qui n'ont pas les mêmes droits d'acces à l'application."],
	["id"=>2, "titre"=> "Randonnée",
	 "contenu"=>"1 présentation
					1.1 Contexte
	Lorsque j'ai commencé mon apprentissage du développement j'ai suivi des cours sur internet mais il me falait un support sur lequel m'entrainer j'ai donc voulu créer un  site internet. le theme je l'ai choisi par affinité. j'ai essayé de le faire le plus complet possible pour y inclure toutes mes connaissances.
	Ce site n'est pas en ligne, il n'est pas teminé.
"],
];

echo json_encode(['error' => false, 'payload' => $articleRea]);
return true;
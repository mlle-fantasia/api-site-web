<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');


$articleRea=[
	["id"=>1, "image"=>"domotique", "titre"=> "Home Control",
	 "contenu"=>"Ce projet a été réalisé dans le cadre de la formation Développement et Administration System d'Information Expert 2018 (Greta du Var). C'est un projet que nous avons réalisé en 2 mois en groupe : 12 personnes. les enjeux étant d'utiliser nos aquis de la formation.
	L'objectif du projet était de développer une application Android et une application web permettant de piloter différents équipements d'un domicile (luminaires, stores et chauffages). Ceci de manière direct ou au travers de scénario exécutable.  Ainsi que la suveillance du domicile grâce à des cameras pilotables elles aussi.
	La demande comportait aussi une gestion des rôles des utilisateurs qui n'ont pas les mêmes droits d'acces à l'application."],
	["id"=>2, "titre"=> "Un site de randonnée","image"=>"randonnee",
	 "contenu"=>"1 présentation\r
					1.1 Contexte\r
	Lorsque j'ai commencé mon apprentissage du développement j'ai suivi des cours sur internet mais il me falait un support sur lequel m'entrainer j'ai donc voulu créer un  site internet. le theme je l'ai choisi par affinité. j'ai essayé de le faire le plus complet possible pour y inclure toutes mes connaissances.
	Ce site n'est pas en ligne, il n'est pas teminé.
	"],
	["id"=>3, "titre"=> "Ptitdej.fr", "image"=>"ptidej", "contenu"=>"Article en cours d'écriture"],
	["id"=>4, "titre"=> "Un TP React", "image"=>"pendu","contenu"=>"Article en cours d'écriture"],
	["id"=>5, "titre"=> "Quoicuisiner.fr", "image"=>"cuisiner", "contenu"=>"Article en cours d'écriture"],
];


if(!empty($_GET['id'])){
    foreach($articleRea as $article){
        if($article['id'] != $_GET['id']){
            continue;
        }
       
        echo json_encode(['error' => false, 'payloadArticle' => $article]);
        return true;
    }
    echo json_encode(['error' => true, 'payloadArticle' => "pas d'article"]);
        return true;
}

 echo json_encode(['error' => false, 'payloadArticle' => $articleRea]);
        return true;
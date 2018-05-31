<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$listeImage = [];

$images = [
    ["id"=>1, "id_article"=>1, "alt"=> "captures d'écran de l'appli web", "image"=>"images/imprimEcranEx.jpg"],
    ["id"=>2, "id_article"=>1, "alt"=> "architecture du systeme", "image"=>"images/archi-materiel.png"],
    ["id"=>3, "id_article"=>1, "alt"=> "diagrame de cas d'utilisation", "image"=>"images/diagramCasUtilisationexemples.jpg"],
    ["id"=>4, "id_article"=>2, "alt"=> "maquette de la page d'accueil", "image"=>"images/site randonnée-2.png"],
];

if(!empty($_GET['id'])){
    foreach($images as $image){
        if($image['id_article'] == $_GET['id']){
            array_push($listeImage, $image);
            continue;
        }

        echo json_encode(['error' => false, 'payloadImages' => $listeImage]);
        return true;
    }

    echo json_encode(['error' => true, 'payloadImages' => "pas de photos"]);
    return true;
}

echo json_encode(['error' => false, 'payloadArticle' => $articleRea]);
return true;
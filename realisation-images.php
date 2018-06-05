<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$listeImage = [];

$images = [
    ["src"=>"images/imprimEcranEx.jpg"],
    [ "src"=>"images/archi-materiel.png"],
    [ "src"=>"images/diagramCasUtilisationexemples.jpg"],
    [ "src"=>"images/site randonnée-2.png"],
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
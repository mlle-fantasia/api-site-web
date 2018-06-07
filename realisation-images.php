<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$listeImage = [];

$images = [
    ["id" => 1, "id-article" => 1, "alt"=>"capture d'écran de la page choix de la Camera",                "src"=>"/images/pageChoixCamera.jpg",   "width"=> 4,          "height"=> 7],
    ["id" => 2, "id-article" => 1, "alt"=>"capture d'écran de la page camera",                            "src"=>"/images/pageCamera.jpg",         "width"=> 4,         "height"=> 7],
    ["id" => 3, "id-article" => 1, "alt"=>"capture d'écran de la page mozaïque des Cameras",              "src"=>"/images/pageMosaique.jpg",        "width"=> 4,            "height"=> 7],
    ["id" => 4, "id-article" => 1, "alt"=>"capture d'écran de la page choix de la Pièce",                 "src"=>"/images/PagePilotageEquipementChoixPiece.jpg","width"=> 4, "height"=> 7],
    ["id" => 5, "id-article" => 1, "alt"=>"capture d'écran de la page pilotage direct de la maison",      "src"=>"/images/PagePilotageEquipementParPiece.jpg","width"=> 4, "height"=> 7],
    ["id" => 6, "id-article" => 2, "alt"=>"maquette de la page d'accueil",                                 "src"=>"/images/site randonnée-2.png","width"=> 4, "height"=> 20],
];

if(!empty($_GET['id'])){
    foreach($images as $ligne){
        if((int)$ligne['id-article'] !== (int)$_GET['id']){
            continue;
        }else if((int)$ligne['id-article'] === (int)$_GET['id']){
            $listeImage[]= $ligne;
            continue;
        }
    }
    echo json_encode(['error' => false, 'payloadImages' => $listeImage]);
    return true;

//    echo json_encode(['error' => true, 'payloadImages' => "pas de photos"]);
//    return true;
}

echo json_encode(['error' => false, 'payloadImages' => $listeImage]);
return true;
<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$listeImage = [];

$images = [
    ["id" => 1, "id-article" => 1, "alt"=>"liste des fonctionnalités",                             "src"=>"/images/trello.png","width"=> 4, "height"=> 7,"caption" => "liste des fonctionnalités"],
    ["id" => 2, "id-article" => 1, "alt"=>"architecture materiel du logiciel",                       "src"=>"/images/archi-materiel.png","width"=> 4, "height"=> 7,"caption" => "architecture materiel du logiciel"],
    ["id" => 3, "id-article" => 1, "alt"=>"exemples de diagrammes de cas d'utilisation",             "src"=>"/images/diagramCasUtilisationexemples.jpg","width"=> 4, "height"=> 7,"caption" => "exemples de diagrammes de cas d'utilisation"],
    ["id" => 4, "id-article" => 1, "alt"=>"capture d'écran de la page choix de la Camera",          "src"=>"/images/pageChoixCamera.jpg",   "width"=> 4,          "height"=> 7, "caption" => "capture d'écran de la page choix de la Camera"],
    ["id" => 5, "id-article" => 1, "alt"=>"capture d'écran de la page camera",                      "src"=>"/images/pageCamera.jpg",         "width"=> 4,         "height"=> 8,"caption" => "capture d'écran de la page camera"],
    ["id" => 6, "id-article" => 1, "alt"=>"capture d'écran de la page mozaïque des Cameras",         "src"=>"/images/pageMosaique.jpg",        "width"=> 4,            "height"=> 8,"caption" => "capture d'écran de la page mozaïque des Cameras"],
    ["id" => 7, "id-article" => 1, "alt"=>"capture d'écran de la page choix de la Pièce",            "src"=>"/images/PagePilotageEquipementChoixPiece.jpg","width"=> 4, "height"=> 5,"caption" => "capture d'écran de la page choix de la Pièce"],
    ["id" => 8, "id-article" => 1, "alt"=>"capture d'écran de la page pilotage direct de la maison", "src"=>"/images/PagePilotageEquipementParPiece.jpg","width"=> 4, "height"=> 5,"caption" => "capture d'écran de la page pilotage direct de la maison"],
    ["id" => 9, "id-article" => 2, "alt"=>"maquette de la page d'accueil",                           "src"=>"/images/site-randonnée-22.png","width"=> 4, "height"=> 7,"caption" => "maquette de la page d'accueil"],
    ["id" => 10, "id-article" => 2, "alt"=>"modèle conceptuel des données",                           "src"=>"/images/mcd-rando2.png","width"=> 4, "height"=> 7,"caption" => "modèle conceptuel des données"],


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
    /*echo json_encode(['error' => false, 'payloadImages' => $listeImage]);
    return true;*/

//    echo json_encode(['error' => true, 'payloadImages' => "pas de photos"]);
//    return true;
}

echo json_encode(['error' => false, 'payloadImages' => $listeImage]);
return true;


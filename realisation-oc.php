<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$articleP1 = <<<EOF
<h4>Résumé de l'énoncé</h4>
<p>Il faut intéger un site wordpress pour une agence immobilière d'une station de montagne.
Cette agence souhaite pouvoir mettre à jour son site régulièrement toute seule.<br/>
Le site doit contenir :<br/>
- Une page pour les chalets à vendre<br/>
- Une page pour les chalets à louer<br/>
- Une page de contact<br/>
en terme de design, elle souhaite un design "clair, épuré, qui respire la ligne luxe de l'agence".
</p>
<h4>Le thème utilisé</h4>
<p>J'ai utilisé le thème Oceanwp, c'est un thème complé, qui offre de nombreuses possibilités de réglage. Je commence à bien le connaître. </p>
<h4>Les plugins utilisés</h4>
<h5>Les plugins généraux</h5>
<p>- Elementor<br/>
Cette extension est un builder de page, une manière différente de personnaliser les pages. Il offre de nombreuses possibilités 
en fonction du thème sélectionné. Il est simple à prendre en main grâce au glisser-déposer et une vision direct des changements.<br/>
- WP Form<br/>
Pour la création de formulaire de contact.<br/>
- Yoast SEO<br/>
Ce plugin gère les metas données des pages, pour le référencement. j'installe ce plugin dans tous mes projets wordpress.</p>
<h5>Les plugins particuliés</h5>
<p>- Gtranslate<br/>
je suis parti du principe que l'agence pouvez avoir des client étrangés donc j'ai ajouté ce plugin de traduction qui simple et efficace.<br/>
- recent-posts-widget-extended<br/>
recent-posts-widget-extended est un pugin qui affiche les derniers articles.  
Je l'ai utilisé sur la page d'accueil, sur la page de chalets à vendre et sur la page de chalets à louer.
j’ai copié ce plugin et je l’ai modifié pour qu’il réponde exactement à ce que je voulais afficher en terme de design et en terme de contenu.<br/>
. j’ai personalisé le style directement dans le plugin.<br/>
. j’ai modifié le html pour pouvoir utilisé les flex de bootsptrap. <br/>
. j’ai ajouté un compteur pour pouvoir différencier l’affichage de chaque chalet (la photo à droite ou à gauche)<br/>
. j’ai ajouté un champ dans le formulaire du plugin pour que l'utilisateur puisse choisir d'afficher la catégirie des articles (ici chalet à louer ou à vendre)<br/>
- Nivo Slider<br/>
Je cherchais un plugin très simple pour la création de caroussel. Celui-ci offre les fonctionnalités minimuns et il est responsive et il possède 4 ou 5 thèmes au choix, 
par chance, un de ceux-la corespondait au design souhaité sur ce site.<br/>
- Duplicate posts<br/>
Ce plugin de duplication de posts permet de créer des articles sans devoir recréer toute la mise en page avec elementor à chaque fois ! <br/>
- Podamibe Simple Footer Widget Area<br/>
Ce plugin m'a permis de personnaliser le footer et de l'adapter ainsi parfaitement au design du site.
</p>
EOF;
$articleP2 = <<<EOF
EOF;

$articleProjet = [
    [
        "id" => 1,
        "titre" => "Projet 1 - Wordpress",
        "Langages" => "Wordpress",
        "article" => $articleP1,
        "lien" => "http://p1.oc-marinafront.fr/",
    ],

];
if (!empty($_GET['id'])) {
    foreach ($articleProjet as $projet) {
        if ((int)$projet['id'] !== (int)$_GET['id']) {
            continue;
        }

        echo json_encode(['error' => false, 'payload' => $projet]);
        return true;
    }
    echo json_encode(['error' => true, 'payload' => "pas de projet"]);
    return true;
}

echo json_encode(['error' => false, 'payload' => $articleProjet]);
return true;


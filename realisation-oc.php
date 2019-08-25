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
<p>J'ai utilisé le thème Oceanwp, c'est un thème complet, qui offre de nombreuses possibilités de réglage. Je commence à bien le connaître. </p>
<h4>Les plugins utilisés</h4>
<h5>Les plugins généraux</h5>
<p>- Elementor<br/>
Cette extension est un builder de page, une manière différente de personnaliser les pages. Il offre de nombreuses possibilités 
en fonction du thème sélectionné. Il est simple à prendre en main grâce au glisser-déposer et une vision directe des changements.<br/>
- WP Form<br/>
Pour la création de formulaire de contact.<br/>
- Yoast SEO<br/>
Ce plugin gère les metas données des pages, pour le référencement. j'installe ce plugin dans tous mes projets wordpress.</p>
<h5>Les plugins particuliers</h5>
<p>- Gtranslate<br/>
je suis partie du principe que l'agence pouvait avoir des clients étrangers donc j'ai ajouté ce plugin de traduction qui est simple et efficace.<br/>
- recent-posts-widget-extended<br/>
recent-posts-widget-extended est un pugin qui affiche les derniers articles.  
Je l'ai utilisé sur la page d'accueil, sur la page de chalets à vendre et sur la page de chalets à louer.
j’ai copié ce plugin et je l’ai modifié pour qu’il réponde exactement à ce que je voulais afficher en terme de design et en terme de contenu.<br/>
. j’ai personnalisé le style directement dans le plugin.<br/>
. j’ai modifié le html pour pouvoir utiliser les flex de bootsptrap. <br/>
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
<h4>Résumé de l'énoncé</h4>
<p>Pour son futur festival de films de plein air, le client souhaite communiquer sur les films au programmes et sur l'actualité du festival .<br/>
le projet consiste à : <br/>
- définir une solution technique pour le client <br/>
- réaliser le cahier des charges <br/>
- réaliser les maquettes <br/>
- réaliser et l'intégration du site.<br/>
</p>
EOF;
$articleP3 = <<<EOF
<h4>Résumé de l'énoncé</h4>
<p>Chaque jour, le client élabore 2 plats et 2 desserts à son QG.
Ces plats sont conditionnés à froid puis transmis à des livreurs à domicile qui «maraudent» ensuite dans les rues, à vélo en attendant une livraison.
Dès qu’un client a commandé, l’un des livreurs (qui possède déjà les plats dans un sac) est missionné pour livrer en moins de 20 minutes.
Une fois la commande passée, le client a accès à une page lui indiquant si un livreur a pris sa commande et le temps estimé avant livraison.
<br/>
le projet consiste à concevoir la base de données et les diagrammes UML : <br/>
- Diagrammes de cas d’utilisation<br/>
- Diagrammes de séquence<br/>
- Diagrammes de classes<br/>
- Base de données<br/></p>
<h4>Les Diagrammes</h4>
<h5>Diagrammes de cas d’utilisation</h5>
<div class="row">
    <div class="col-md-4">
        <img  src="/upload/images/oc/package.png" alt="">
    </div>
    <div class="col-md-4">
        <img src="/upload/images/oc/casconexion.png" alt="">
    </div>
    <div class="col-md-4">
        <img  src="/upload/images/oc/cascommande.png" alt="">
    </div>
        <div class="col-md-4">
        <img  src="/upload/images/oc/casajoutplat.png" alt="">
    </div>
        <div class="col-md-4">
        <img  src="/upload/images/oc/caslivraison.png" alt="">
    </div>
</div>
<h5>Diagrammes de séquence</h5>
<div class="row">
    <div class="col-md-4">
        <img  src="/upload/images/oc/ajoutdunplat.png" alt="">
    </div>
    <div class="col-md-4">
        <img src="/upload/images/oc/sequencelivraison.png" alt="">
    </div>
    <div class="col-md-4">
        <img  src="/upload/images/oc/créationcommande.png" alt="">
    </div>
</div>
<h5>Diagrammes de classes</h5>
<div class="row">
    <div class="col-md-12">
        <img  src="/upload/images/oc/classes.png" alt="">
    </div>
</div>
<h5>Diagrammes MCD</h5>
<div class="row">
    <div class="col-md-12">
        <img  src="/upload/images/oc/mcd.png" alt="">
    </div>
</div>
EOF;
$articleP5 = <<<EOF
<h4>Résumé de l'énoncé</h4>
<p>L’objectif et de créer une générateur de citation aléatoire avec JavaScript. 
- Les citations sont générées aléatoirement à chaque appel du programme JavaScript : une par une pour l’étape 1 et entre 1 et 5 pour l’étape 2.
- Chaque citation est la combinaison d’au moins 3 morceaux de phrases (à vous de préparer ces morceaux de phrase)
- A défaut d’être intelligible, la phrase doit être cohérente (pas de point d’exclamation au milieu d’une phrase)
- Létape 2 doit proposerde générer de sortes de citations différentes
</p>
<h4>La structure du projet</h4>
<p>le projet se compose de deux parties : <br/>
- l’API (nodejs  express)<br/>
- la partie front-end (html css js/jquery bootstrap)<br/>
j’ai séparé la partie front-end de la partie back-end afin de simplifier le développement et d’alléger la partie front-end.
l’api possède les dictionnaires et envoie au front-end seulement les morceaux de phrase choisis aléatoirement et le front-end s’occupe seulement de l’affichage de la phrase.
</p>
<h4>L'API</h4>
<h5>le dictionnaire</h5>
<p>c’est un fichier json : un tableau d’objets. chaque objet possède différents attributs.<br/>
 <code>[<br/>
    {«mot»: «loup», «genre»:»1»,»pluriel»:»0», «type»: «sujet» },<br/>
    {«mot»: «dans une forêt lointaine», «type»: «lieu»},<br/>
    {«mot»: «mangea», «type»: «verbe», «suite»:»objet»},<br/>
    {«mot»: «une pomme»,»genre»:»2»,»pluriel»:»0», «type»: «objet», «suite»:»adjectif» }<br/>
]<br/>
</code>
les attributs indispansablent sont le mot et le type. les attributs genre et pluriel permettent d’accorder la phrase. l’attribut suite permet de spécifier quel type de mot doit suivre </p>
<h5>le fichier app.js</h5>
<p>l’api utilise les cors pour permettre l’accès du front-end à l’api: <br/>

<code>app.use(cors({origin: ‘*’}));</code>
 <br/>
‘*’ permet à tout le monde d’accéder à cette api<br/>

premièrement, le fichier app intègre le dictionnaire puis crée différentes constante qui filtre le dictionnaire en fonction du type.<br/>

<code>var histoire1 = require(«./histoire1.json»);<br/>
const tabsujet =  histoire1.filter((objet)=>{<br/>
   return objet.type === «sujet»;<br/>
});<br/>
const tablieu =  histoire1.filter((objet)=>{<br/>
   return objet.type === «lieu»;<br/>
});<br/>
</code>
C’est dans ces tableaux que vont être piochés les morceaux de phrase.<br/>

ensuite, la route : <br/>
<code>
app.get(‘/histoire/:index’, function (req, res) {<br/>
let phrase = [];<br/>
…<br/>
res.send(phrase);<br/>
}<br/>
</code>
C’est cette route qui va être appelée par le front-end.<br/>
l’index dans l’url de la route permet de préciser le numéro de la phrase.
en fonction de l'index l’api va aller piocher différents mots.<br/>

La phrase renvoyée est un tableau comprenant les objets piochés. 
</p>
EOF;

$articleProjet = [
    [
        "id" => 1,
        "titre" => "Projet 1 - Wordpress",
        "Langages" => "Wordpress",
        "article" => $articleP1,
        "lien" => "http://p1.oc-marinafront.fr/",
    ],
    [
        "id" => 2,
        "titre" => "Projet 2 - html, css, bootstrap",
        "Langages" => "html, css, bootstrap",
        "article" => $articleP2,
        "lien" => "http://p3.oc-marinafront.fr/",
    ],
    [
        "id" => 3,
        "titre" => "Projet 3 - uml",
        "Langages" => "html, css, bootstrap",
        "article" => $articleP3,
    ],
    [
        "id" => 4,
        "titre" => "Projet 4 - html, css, javascript, jquery",
        "Langages" => "html, css, javascript, jquery",
        "article" => $articleP5,
        "lien" => "http://p5.oc-marinafront.fr/",
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


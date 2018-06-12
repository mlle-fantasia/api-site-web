<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
$auteur = '<br/>auteur : Marina Front<br/>';
$contenuHomeControl = <<<EOF
    <h3>1 Présentation du projet</h3>
	<p>Ce projet a été réalisé dans le cadre de la formation Développement et Administration Système d'Information Expert 2018 (Greta du Var). C'est un projet que nous avons réalisé en 2 mois en 
	groupe (12 personnes). les enjeux étant d'utiliser nos acquis de la formation. <br/>
	L'objectif du projet était de développer une application Androïd et une application Web permettant de piloter différents équipements d'un domicile (luminaires, stores et chauffages). Ceci de 
	manière directe ou au travers de scénarios exécutables.  Ainsi que la surveillance du domicile grâce à des cameras pilotables elles aussi.<br/>
	La demande comportait aussi une gestion des rôles des utilisateurs qui n'ont pas les mêmes droits d'accès à l'application.<br/>
	Ce projet était ambitieux et assurait assez de travail pour une équipe de 12 personnes. Nous nous sommes donc réparti le travail en formant des équipes.Dans cet article, je vous parlerai des
	 tâches auxquelles j'ai participé.</p>
 <h3>2 déroulement du projet </h3>
	<h4>2.1 Specifications</h4>
	<p>Après avoir défini le nom, le logo et la charte graphique grâce à un brainstorming, nous avons défini les fonctionnalités au format user story cela nous a permis, dans un premier temps, de
	 nous mettre d'accord sur le sujet et de définir les fonctionnalités à développer  par ordre d'importance (code couleur).</p>
	 <p><strong>Voir image 1 de la galerie d'images ci-contre</strong></p>
	<h4>2.2 Architecture</h4>
	<p>Exceptés les équipements, chaque rectangle est une entité physique, le modem permet de connecter les différents appareils entre eux. Les équipements sont simulés dans le 
	simulateur domotique.</p>
	<p><strong>Voir image 2 de la galerie d'images ci-contre</strong></p>
	<h4>2.3 Diagrames UML</h4>
	<p>Les diagrammes des cas d’utilisation permettent de visualiser l’interaction entre les différents acteurs et le système. Les acteurs humains qui ont des droits différents et les acteurs 
	non-humains : le serveur, la BDD et le simulateur. </p>
	<p><strong>Voir exemples : image 3 de la galerie d'images ci-contre</strong></p>
	<h4>2.5 l'intégration</h4>
<p>A partir des maquettes réalisées sur Photoshop, nous avons intégré les différentes pages du site. Nous étions  trois sur l'intégration Web, nous 
avons utilisé HTML CSS Bootstrap et jQuery .</p>
	<h4>2.6 La programation</h4>
	<p>Pour faire communiquer l'application et le simulateur, nous  sommes passés par un serveur java. Nous avons tout d'abord créer le serveur, puis les classes associées.<br/>
	Explication du système : Sur la page pilotage direct des équipements de la maison, lorsque l'on clique sur un équipement, JavaScript récupère l'identifiant de l'équipement et le 
	transmet grâce à Ajax à des classes qui s'occupent d'ouvrir une nouvelle socket client, de transformer l'information en json, et de l'envoyer au serveur java.<br/>
	De là, le serveur récupère l'information, la reformate correctement et l'envoie au simulateur.</p>
 <h3>Conclusion </h3>
	<p>En terme d’expérience, grâce à ce projet, j'ai pu avoir une vision du développement d’un projet du début jusqu'à la livraison et découvrir les avantages et les limites du travail en 
	équipe.<br/>
	Grâce au respect de la methode agile nous avons livré un projet basic mais fonctionnel qui mairiterait d'être approfondi par le développement de fonctionnalités supplémentaires.</p>
EOF;
$contenuRando = <<<EOF
   <h3>1 Présentation</h3>
<h4>1.1 Contexte</h4>
	<p>Lorsque j'ai commencé mon apprentissage du développement j'ai suivi des cours sur Internet et il me fallait un support concret pour m'entraîner j'ai donc créé un site Internet. J'ai essayé de 
	le faire le plus complet possible pour y inclure toutes mes connaissances. J'ai choisi le thème par affinité : un site de randonnées<br/>
    Le site n'est pas en ligne, il n'est pas terminé.</p>
<h4>1.2 Objectifs</h4>
	<p>Créer un site complet qui inclut :<br/>
- un article sur chaque randonnée avec description, photos et parcours GPS téléchargable ainsi que des commentaires,<br/>
- un formulaire de recherche de randonnée par proximité, distance du parcours, dévivelé, difficulté, durée ou localisation.<br/>
- un blog contenant des articles (conseils, tests de matériel...) et des commentaires sur chaque article<br/>
- un espace qui liste les clubs de randonnées. Et pour chacun un descriptif et un moyen de s'inscrire.<br/>
- une boutique en ligne d'articles de randonnée<br/>
- une possibilité de soumettre de nouveaux articles soit un article sur une randonnée soit un article pour le blog. Ceci grâce à un formulaire.<br/>
- des espaces membres avec un chat.</p>
<h3>2 Le design</h3>
<h4>2.1 Theme général</h4>
	<p>j'ai réalisé plusieurs maquettes sur Photoshop avant de sélectionner un design assez sobre. Un fond blanc, des lignes vertes soulignent les titres et délimitent les différentes parties d'une 
	page. Les couleurs principales sont le blanc, le vert (deux teintes différentes) et le beige (deux teintes différentes).</p>
<h4>2.2 La page d'accueil</h4>
	<p>La page d'accueil est assez riche. Elle se compose : <br/> 
	- d'une barre de navigation tout en haut, <br/>
	- d'un carrousel qui prend toute la largeur de l'écran et qui fait défiler les derniers articles 
	du blog ou les dernières randonnées postées avec de belles images pour plonger le public dans un univers. Chaque image du carrousel contient un bouton CTA.<br/> 
	- Sous le carrousel se trouve une barre 
	de recherche rapide, de randonnées, en fonction de votre localisation. (pour faire une recherche à partir d'autres critères, il faut aller dans "rechercher une randonnée").<br/> 
	- de neuf randonnées triées par difficultés (les dernières mises en ligne près de chez vous).<br/>
	- Après viennent deux modules de recherche, en partenariat avec des sites de voyages : "trouver un refuge" et "trouver un séjour".<br/> 
	 - Enfin le pied de page se compose d'un formulaire d'inscription à la newsletter. Très simple, seule l'adresse mail est à renseigner. Puis quelques liens vers le
	  site ou d'autres sites utiles à des randonneurs.</p>
<h3>3 Architecture </h3>
<p>Pour un premier projet, je n'ai pas utilisé la programmation orientée objet. J'ai un fichier php par page du site qui inclut le fichier fonction.php et le fichier bdd.php. Ce dernier génère la 
connexion à la base de données. j'ai égalemnt des fichiers php pour des morceaux de page que j'utilise plusieurs fois dans le site.</p>
<h3>4 Base de données</h3>
	<p>C'est avec ce site que j'ai découvert les bases de données et le language SQL. En effet il faut stocker tous les articles de randonnée mais aussi les articles de blog, les clubs de rando, les
	 membres du site, les commentaires...  <br/>
	Grâce à Wamp, la base de données que j'ai utilisée est MySql  et pour y accéder, j'utilise HeidiSQL. </p>
<h4>4.1 Quelques exemples de requêtes expliquées</h4>
<h5>Page d'accueil, trier les randonnées par difficulté :</h5>
<img src="/upload/images/fonctionRandoParDifficulté.jpg" alt="fonction trie des rando Par Difficulté"/>
<h5>Explications :</h5>
<p>-la fonction prend en paramètre la connexion à la base de données, une difficulté (facile, moyenne ou difficile : dans la bdd, chaque randonnée possède une colonne difficulté) 
et un nombre d'élément qui est égal à 3.
- j'applique la requête : sélectionner l'image et le "alt" dans la table photos_rando et tout dans la table randonnée_article<br/>
- je fais une jointure entre les tables randonnée_article et photos_rando avec comme condition de jointure : id de l'article de la randonnée (dans randonnée_article) égal l'id de la photo (dans 
photos_rando).
- Ensuite, parmi les photos dont l'id correspond on ne veut que celle où la colonne est_principale égale 1<br/> 
- et on ne veut que les randonnées dont la difficulté est égale à la variable difficulté 
passée en paramètre.<br/>
- et on ne veut sélectionner que trois randonnées<br/>
- et enfin on retourne le tableau de toutes les lignes récupérées.</p>
<h5>Page blog, on veut afficher les articles sur le même thème à la fin de chaque article :</h5>
<img src="/upload/images/fonctionArticleMemeTheme.jpg" alt="fonction trie des rando Par Difficulté"/>
<h5>- Explications : </h5>
<p>Ceci est une requête imbriquée.<br/>
- la fonction prend en paramètre la connexion à la base de données et l'id de l'article en cours.<br/>
- dans les parenthèses les plus au centre de la requête, on sélectionne le ou les thèmes de l'article en cours.<br/>
- dans les premières parenthèses, on sélectionne l'id des articles qui ont pour thème celui (ou ceux) récupéré dans les parenthèses du centre sauf l'id de l'article en cours.<br/>
puisqu'il est possible qu'un article apparaisse plusieurs fois s'il a plusieurs thèmes en commun, on group by l'id des articles et on compte le nombre de ligne pour chaque id.<br/>
de là on récupère une table qu'on appellera t qui contient deux colonnes : l'id des articles récupérés et le nombre de ligne.<br/>
- on fait une jointure entre cette table t et la table qui contient tous les articles et on récupère les titres des articles<br/>
- puis on les range dans l'ordre : en premier ceux qui ont dans la colonne nombre un chiffre plus important (c'est-à-dire ceux qui ont le plus de thèmes en commun)<br/>
- puis on affiche en premier ceux qui ont un id plus élevé (c'est-à-dire ceux qui sont parus en dernier)<br/>
- et enfin on en affiche que quatre maximums.</p>

EOF;
$contenuPendu = <<<EOF
<p>Ce projet est un TP que j'ai réalisé pour le cours sur Réact Sur OpenClassroom</p>
<h3>Extrait des consignes du TP : </h3>
<p>"- L’affichage comprend deux parties : le masque de la devinette, et une série de boutons d'essai, à raison d’un par lettre. Par exemple, deux rangées de 13.<br/>
- Le masque utilise un _underscore_ ( _ ) pour toute lettre de la devinette qui n’a pas encore été révélé.<br/>
- Pour simplifier la saisie et l’exploitation des lettres, on cantonnera les devinettes et les boutons à l'alphabet latin majuscule, sans signes diacritiques (accents, cédilles, etc.). Donc 26 lettres
 de A à Z.<br/>
- Les lettres déjà essayées doivent être signalées visuellement (par exemple, grisées). Il n'est pas obligatoire d'interdire une nouvelle tentative dessus, c'est comme vous voulez.<br/>
- Une fois le texte deviné, la liste des boutons de lettres est remplacée par un seul bouton qui permet de redémarrer une partie… sans avoir à recharger la page !<br/>
Afin de vous permettre de vous concentrer sur React, nous vous donnons une petite fonction utile qui construit le masque affiché à partir du texte à deviner et de la série des lettres déjà testées. "</p>
<h3>Le code</h3>
<h4>les composants</h4>
	<p>le projet se compose donc de deux composants : <br/>
- un composant pour les boutons des lettres de l'alphabet dont les props sont : une lettre (récupérée dans un tableau), un état (par défaut ou grisé), un index (qui constituera la clé) et une 
fonction onClick.<br/>
- et un composant pour le nombre d'essais. </p>
<h4>App.js</h4>
	<p>App.js possède un "state" (état local) composé de :<br/> 
le mot à deviner (qui est généré dès l'ouverture de la page), un tableau de lettres déjà cliquées (vide au départ), le nombre d'essais (0 au 
	départ) et un état "gagné" qui est faux au départ. <br/>
à chaque fois que le joueur clique sur une lettre la fonction "onClick" est appelée :<br/>
- elle met à jour le nombre d'essais dans l'état local, celui-ci est incrémenté,<br/>
- la lettre est ajoutée au tableau de lettres déjà cliquées,<br/>
- le tableau est transmis à la fonction qui s'occupe d'afficher le masque du mot,<br/>
- et enfin elle teste si le masque du mot est égal au mot, si oui elle met à jour la variable "gagné" à vrai. </p>
<h4>Le rendu : </h4>
	<p>si la variable "gagné" est à faux, on map les boutons des lettres de l'alphabet sinon, on affiche un bouton "redémarrer". Lorsqu'il est cliqué, cela appelle une fonction qui remet l'état 
	local à son état d'origine (tableau vide, nombre d'essais à 0, nouveau mot généré...).<br/>
	pour le rendu des boutons des lettres déjà cliquées, la fonction "getEtat" est appelée. Celle-ci vérifie si la lettre est dans le tableau de lettres déjà cliquées grâce à la fonction "indexOf". 
	selon si c'est oui ou non, l'apparence du bouton est modifiée grâce à une classe css.</p>
EOF;
$contenuVide = <<<EOF
<h4>Article en cours d'écriture</h4>
EOF;


$articleRea = [
    ["id" => 1, "titre" => "Home Control",           "image" => "domotique",  "contenu" => $contenuHomeControl],
    ["id" => 2, "titre" => "Un site de randonnée",   "image" => "randonnee", "contenu" => $contenuRando],
//    ["id" => 3, "titre" => "Ptitdej.fr",             "image" => "ptidej",    "contenu" => $contenuVide],
    ["id" => 4, "titre" => "Pendu",                  "image" => "pendu",     "contenu" => $contenuPendu],
//    ["id" => 5, "titre" => "Quoicuisiner.fr",        "image" => "cuisiner",  "contenu" => $contenuVide],
];


if (!empty($_GET['id'])) {
    foreach ($articleRea as $article) {
        if ((int)$article['id'] !== (int)$_GET['id']) {
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
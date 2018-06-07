<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
$auteur = '<br/>auteur : Marina Front<br/>';
$contenuHomeControl = <<<EOF
    <h3>1 presentation du projet</h3>
	<p>Ce projet a été réalisé dans le cadre de la formation Développement et Administration System d'Information Expert 2018 (Greta du Var). C'est un projet que nous avons réalisé en 2 mois en groupe
	 : 12 personnes. les enjeux étant d'utiliser nos aquis de la formation. <br/>
	L'objectif du projet était de développer une application Android et une application web permettant de piloter différents équipements d'un domicile (luminaires, stores et chauffages). Ceci de 
	manière direct ou au travers de scénario exécutable.  Ainsi que la suveillance du domicile grâce à des cameras pilotables elles aussi.<br/>
	La demande comportait aussi une gestion des rôles des utilisateurs qui n'ont pas les mêmes droits d'acces à l'application.<br/>
	Ce projet était ambitieux et avancait assez de travaille pour une équipe de 12 personnes. nous nous sommes donc répartis les taches en formant des équipes. Je vais parlerai dans cet article de
	 ce à quoi j'ai participé.</p>
 <h3>2 déroulement du projet </h3>
	<h4>2.1 Specifications</h4>
	<p>Après avoir défini le nom, le logo et la charte graphique grâce à un brainstorming, nous avons définis les fonctionnalités au format user story cela nous a permis, dans un premier temps, de
	 nous mettre d'accord sur le sujet et de définir les fonctionnalités à développer  par ordre d'importance (code couleur).</p>
	 <img src="/upload/images/trello.png" alt="capture d'écran trello qui liste les fonctionnalités définies"/>
	<h4>2.2 Architecture</h4>
	<p>Exceptés les équipements, chaque rectangle est une entité physique, le modem permet de connecter les différents appareils entre eux. Les équipements sont simulés virtuellement dans le 
	simulateur domotique.</p>
	<img src="/upload/images/archi-materiel.png" alt="schemas de l'architecture du logiciel"/>
	<h4>2.3 Diagrames UML</h4>
	<p>Les diagrammes des cas d’utilisation permettent de visualiser l’interaction entre les différents acteurs et le système. Les acteurs humains qui ont des droits différents et les acteurs 
	non-humains : le serveur, la BDD et le simulateur. ici trois exemples parmis les huit diagrames réalisés.</p>
	<img src="/upload/images/diagramCasUtilisationexemples.jpg" alt="quelques exemples de diagrammes de cas d'utilisation"/>
	<h4>2.5 l'intégration</h4>
<p>à partir des maquettes réalisées sur photoshop, nous avons intégré les différentes page du site. Ici, quatre captures d'écran de l'application web. Nous étions  trois sur l'intégration web, nous 
avons utilisé HTML CSS Bootstrap et jQuery .</p>
	<h4>2.6 La programation</h4>
	<p>Pour faire communiquer l'application et le simulateur, nous  sommes passer par un serveur java. Nous avons tout d'abord créer le serveur, puis les classes associées.<br/>
	Explication du systeme : Sur la page équipement direct de la maison, lorsque l'on clique sur un équipement, le JavaScript récupère l'identifiant de l'équipement et le transmet grâce à Ajax à des 
	classes qui s'occupent d'ouvrir une nouvelles socket client, de transformer l'information en json, et de l'envoyer au serveur java.<br/>
	De là, le serveur récupère l'information, la reformate correctement et l'envoie au simulateur.</p>
 <h3>Conclusion </h3>
	<p>En terme d’expérience, grâce à ce projet, j'ai pu avoir une vision du développement d’un projet du début à la livraison et découvrir les avantages et les inconvénients du travail en équipe.<br/>
	Grâce au respect de la methode agile nous avons livré un projet basic mais fonctionnel qui mairiterait d'être approfondi par le développement de fonctionnalités supplémentaires.</p>
EOF;
$contenuHomeRando = <<<EOF
   <h3>1 présentation</h3>
<h4>1.1 Contexte</h4>
	<p>Lorsque j'ai commencé mon apprentissage du développement j'ai suivi des cours sur Internet mais, il me fallait un support sur lequel m'entraîner j'ai donc voulu créer un site Internet. Le 
	thème je l'ai choisi par affinité. J'ai essayé de le faire le plus complet possible pour y inclure toutes mes connaissances.<br/>
    Ce site n'est pas en ligne, il n'est pas terminé.</p>
<h4>1.2 Objectifs</h4>
	<p>Créer un site de randonnées complet qui inclut :<br/>
- un article sur chaque randonnée avec description, photos et parcours GPS téléchargable ainsi que des commentaires,<br/>
- un formulaire de recherche de randonnée par tant de km autour de chez vous, par difficulté, par durée ou par localisation.<br/>
- un blog contenant des articles (conseils, test de matériel...) et des commentaires sur chaque article<br/>
- un espace qui liste les clubs de randonnées. Et pour chacun un descriptif et un moyen de s'inscrire.<br/>
- une boutique en ligne d'articles de randonnée<br/>
- une possibilité de soumettre de nouveaux articles soit un article sur une randonnée soit un article pour le blog. Ceci grâce à un formulaire.<br/>
- des espaces membres avec un chat.</p>
<h3>2 Le design</h3>
<h4>2.1 Theme général</h4>
	<p>j'ai réalisé plusieurs maquettes sur photoshop avant de sélectionner un design assez sobre. Un fond blanc, des lignes vertes soulignent les titres et délimitent les différentes parties d'une 
	page. Les couleurs principales sont le blanc, le vert (deux tentes différentes) et le beige (deux tentes différentes).</p>
<h4>2.2 La page d'accueil</h4>
	<p>La page d'accueil est assez variée, elle se compose d'une barre de navigation tout en haut, puis un carrousel qui prend toute la largeur de l'écran et qui fait défiler les derniers articles 
	du blog ou les dernières randonnées postées avec de belles images pour plonger le public dans un univers. Chaque image du carrousel contient un bouton CTA. Sous le carrousel se trouve une barre 
	de recherche rapide, de randonnée, en fonction de votre localisation. (pour faire une recherche à partir d'autres critères, il faut aller dans "rechercher une randonnée").<br/> 
	Puis la page d'accueil présente neuf randonnées triées par difficultés (les dernières mises en ligne près de chez vous).<br/>
	Après viennent deux modules de recherche, en partenariat avec des sites de voyages : "trouver un refuge" et "trouver un séjour".<br/> 
	 Enfin le footer se compose d'un formulaire d'inscription à la newsletter. Très simple, seulement l'adresse mail est à renseigner. Puis quelques liens vers le
	  site ou d'autres sites utiles à des randonneurs.</p>
<h3>3 Architecture </h3>
<p>Pour un premier projet, je n'ai pas utilisé la programmation orientée objet. J'ai une page .php par page du site qui include la page fonction.php et la page bdd.php</p>
<h3>4 Base de données</h3>
	<p>C'est avec ce site que j'ai découvert les bases de données et le language SQL. En effet il faut stocker tous les articles de randonnée mais aussi les articles de blog, les clubs de rando, les
	 membre du site, les commentaires...  <br/>
	Grâce à wamp, la base de données que j'ai utilisée est MySql  et pour y accéder, j'utilise HeidiSQL. </p>
<h4>4.1 Quelques exemples de requêtes expliquées</h4>
<p>- Page d'accueil, trier les randonnées par difficulté :</p>

EOF;
$contenuHomePendu = <<<EOF
<p>Ce projet est un TP que j'ai réalisé pour le cours sur Réact Sur OpenClassroom</p>
<h3>Extrait des consigne du TP : </h3>
<p>"- L’affichage comprend deux parties : le masque de la devinette, et une série de boutons d'essai, à raison d’un par lettre. Par exemple, deux rangées de 13.<br/>
- Le masque utilise un _underscore_ ( _ ) pour toute lettre de la devinette qui n’a pas encore été révélé.<br/>
- Pour simplifier la saisie et l’exploitation des lettres, on cantonnera les devinettes et les boutons à l'alphabet latin majuscule, sans signes diacritiques (accents, cédilles, etc.). Donc 26 lettres
 de A à Z.<br/>
- Les lettres déjà essayées doivent être signalées visuellement (par exemple, grisées). Il n'est pas obligatoire d'interdire une nouvelle tentative dessus, c'est comme vous voulez.<br/>
- Une fois le texte deviné, la liste des boutons de lettres est remplacée par un seul bouton qui permet de redémarrer une partie… sans avoir à recharger la page !<br/>
Afin de vous permettre de vous concentrer sur React, nous vous donnons une petite fonction utile qui construit le masque affiché à partir du texte à deviner et de la série des lettres déjà testées. "</p>
<h3>Code</h3>
<h4>les composants</h4>
	<p>le projet se compose donc de deux composants : <br/>
- un composant pour les boutons des lettres de l'alphabet dont les props sont : une lettre (récupérée dans un tableau), un état (par défaut ou grisé), un index (qui constituera la key) et un onClick
.<br/>
- et un composant pour le nombre d'essai. </p>
<h4>App.js</h4>
	<p>App.js possède un "state" (état local) composé de :<br/> 
le mot à deviner (qui est généré dès l'ouverture de la page), un tableau de lettres deja cliquées (vide au départ), le nombre d'essai (0 au 
	départ) et un état "gagné" qui est faut au départ. <br/>
a chaque fois que le joueur clique sur une lettre la fonction "onClick" est appelée :<br/>
- elle met à jour le nombre d'essai dans l'état local, celui-ci est incrémenté,<br/>
- la lettre est ajoutée au tableau de lettres déjà cliquées,<br/>
- le tableau est transmis à la fonction qui s'occupe d'afficher le masque du mot,<br/>
- et enfin elle teste si le masque du mot est égale au mot, si oui elle met à jour la variable gagne à vrai. </p>
<h4>Le rendu : </h4>
	<p>si la variable "gagné" est à faut, on map les boutons des lettres de l'alphabet sinon, on affiche un boutton "redémarer". Lorsqu'il est cliqué, cela appelle une fonction qui remet l'état 
	local à son état d'origine (tableau vide, nombre d'essais à 0, nouveau mot généré...).<br/>
	pour le rendu des boutons des lettres déjà cliquées, la fonction "getEtat" est appelée. Celle-ci vérifie si la lettre est dans le tableau de lettres déjà cliquées grâce à la fonction "indexOf". 
	selon si c'est oui ou non, l'apparence du bouton est modifié grâce à une classe css.</p>
EOF;
$contenuVide = <<<EOF
<h4>Article en cours d'écriture</h4>
EOF;


$articleRea = [
    ["id" => 1, "titre" => "Home Control",           "image" => "domotique",  "contenu" => $contenuHomeControl],
    ["id" => 2, "titre" => "Un site de randonnée",   "image" => "randonnee", "contenu" => $contenuHomeRando],
    ["id" => 3, "titre" => "Ptitdej.fr",             "image" => "ptidej",    "contenu" => $contenuVide],
    ["id" => 4, "titre" => "Pendu",                  "image" => "pendu",     "contenu" => $contenuHomePendu],
    ["id" => 5, "titre" => "Quoicuisiner.fr",        "image" => "cuisiner",  "contenu" => $contenuVide],
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
<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
$auteur = '<br/>auteur : Marina Front<br/>';
$contenuHomeControl = <<<EOF
    <h3>Présentation du projet</h3>
	<p>Ce projet a été réalisé dans le cadre de la formation Développement et Administration Système d'Information Expert 2018 (Greta du Var). C'est un projet que nous avons réalisé en 2 mois en 
	groupe (12 personnes). Les enjeux étant d'utiliser nos acquis de la formation. <br/>
	L'objectif du projet était de développer une application Androïd et une application Web permettant de piloter différents équipements d'un domicile (luminaires, stores et chauffages). Ceci de 
	manière directe ou au travers de scénarios exécutables.  Ainsi que la surveillance du domicile grâce à des cameras pilotables elles aussi.<br/>
	La demande comportait aussi une gestion des rôles des utilisateurs qui n'ont pas les mêmes droits d'accès à l'application.<br/>
	Ce projet était ambitieux et assurait assez de travail pour une équipe de 12 personnes. Nous nous sommes donc réparti le travail en formant des équipes. Dans cet article, je vous parlerai des
	 tâches auxquelles j'ai participé.</p>
 <h3>Déroulement du projet </h3>
	<h4>Spécifications</h4>
	<p>Après avoir défini le nom, le logo et la charte graphique grâce à un brainstorming, nous avons défini les fonctionnalités au format user story cela nous a permis, dans un premier temps, de
	 nous mettre d'accord sur le sujet et de définir les fonctionnalités à développer  par ordre d'importance (code couleur).</p>
	 <h6>Voir image 1 de la galerie d'images ci-contre</h6>
	<h4>Architecture</h4>
	<p>Exceptés les équipements, chaque rectangle est une entité physique, le modem permet de connecter les différents appareils entre eux. Les équipements sont simulés dans le 
	simulateur domotique.</p>
	<p><strong>Voir image 2 de la galerie d'images ci-contre</strong></p>
	<h4>Diagrammes UML</h4>
	<p>Les diagrammes des cas d’utilisations permettent de visualiser l’interaction entre les différents acteurs et le système. Les acteurs humains qui ont des droits différents et les acteurs 
	non-humains : le serveur, la BDD et le simulateur. </p>
	<p><strong>Voir exemples : image 3 de la galerie d'images ci-contre</strong></p>
	<h4>L'intégration</h4>
<p>A partir des maquettes réalisées sur Photoshop, nous avons intégré les différentes pages du site. Nous étions  trois sur l'intégration Web, nous 
avons utilisé HTML CSS Bootstrap et jQuery .</p>
	<h4>La programation</h4>
	<p>Pour faire communiquer l'application et le simulateur, nous  sommes passés par un serveur java. Nous avons tout d'abord créer le serveur, puis les classes associées.<br/>
	Explication du système : Sur la page pilotage direct des équipements de la maison, lorsque l'on clique sur un équipement, JavaScript récupère l'identifiant de l'équipement et le 
	transmet via une requête Ajax à des classes qui s'occupent d'ouvrir une nouvelle socket client, de transformer l'information en json, et de l'envoyer au serveur java.<br/>
	De là, le serveur récupère l'information, la formate correctement et l'envoie au simulateur.</p>
 <h3>Conclusion </h3>
	<p>En terme d’expérience, grâce à ce projet, j'ai pu avoir une vision du développement d’un projet du début jusqu'à la livraison et découvrir les avantages et les limites du travail en 
	équipe.<br/>
	Grâce au respect de la méthode agile nous avons livré un projet basique mais fonctionnel qui mériterait d'être approfondi par le développement de fonctionnalités supplémentaires.</p>
EOF;
$contenuRando = <<<EOF
   <h3>Présentation</h3>
<h4>Contexte</h4>
	<p>Lorsque j'ai commencé mon apprentissage du développement j'ai suivi des cours sur Internet et il me fallait un support concret pour m'entraîner j'ai donc créé un site Internet. J'ai essayé de 
	le faire le plus complet possible pour y inclure toutes mes connaissances. J'ai choisi le thème par affinité : un site de randonnées<br/>
    Le site n'est pas en ligne, il n'est pas terminé. Objectif à court terme : le refaire sous symfony.</p>
<h4>Objectifs</h4>
	<p>Créer un site complet qui inclut :<br/>
- un article sur chaque randonnée avec description, photos et parcours GPS téléchargeable ainsi que des commentaires,<br/>
- un formulaire de recherche de randonnée par proximité, distance du parcours, dévivelé, difficulté, durée ou localisation.<br/>
- un blog contenant des articles (conseils, tests de matériel...) avec des commentaires.<br/>
- un espace qui liste les clubs de randonnées. Et pour chacun un descriptif et un moyen de s'inscrire.<br/>
- une boutique en ligne de produits liés à la randonnée<br/>
- une possibilité de soumettre de nouveaux articles soit un article sur une randonnée soit un article pour le blog. Ceci grâce à un formulaire.<br/>
- des espaces membres avec un chat.</p>
<h3>Le design</h3>
<h4>Thème général</h4>
	<p>J'ai réalisé plusieurs maquettes sur Photoshop avant de sélectionner un design assez sobre. Un fond blanc, des lignes vertes soulignent les titres et délimitent les différentes parties d'une 
	page. Les couleurs principales sont le blanc, le vert (deux teintes différentes) et le beige (deux teintes différentes).</p>
<h4>La page d'accueil</h4>
	<p>La page d'accueil est assez riche. Elle se compose : <br/> 
	- d'une barre de navigation tout en haut, <br/>
	- d'un carrousel qui prend toute la largeur de l'écran et qui fait défiler les derniers articles 
	du blog ou les dernières randonnées postées avec de belles images pour plonger le public dans un univers et l'inciter à se rendre sur le détail de l'article. Chaque image du carrousel contient un 
	bouton CTA (Call to Action).<br/> 
	- Sous le carrousel se trouve une barre 
	de recherche rapide, de randonnées, en fonction de votre localisation. (pour faire une recherche à partir d'autres critères, il faut aller dans "rechercher une randonnée").<br/> 
	- de neuf randonnées triées par difficultés (les dernières mises en ligne près de chez vous).<br/>
	- Après viennent deux modules de recherche, en partenariat avec des sites de voyages : "trouver un refuge" et "trouver un séjour".<br/> 
	 - Enfin le pied de page se compose d'un formulaire d'inscription à la newsletter. Très simple, seule l'adresse mail est à renseigner. Puis quelques liens utiles.</p>
<h3>Architecture </h3>
<p>Pour un premier projet, je n'ai pas utilisé la programmation orientée objet. J'ai un fichier php par page du site qui inclut le fichier fonction.php et le fichier bdd.php. Ce dernier génère la 
connexion à la base de données. j'ai également des fichiers php pour des morceaux de page que j'utilise plusieurs fois dans le site.</p>
<h3>Base de données</h3>
	<p>C'est avec ce site que j'ai découvert les bases de données et le language SQL. En effet il faut stocker tous les articles de randonnées mais aussi les articles de blog, les clubs de randonnées,
	 les
	 membres du site, les commentaires...  <br/>
	Grâce à Wamp, la base de données que j'ai utilisée est MySql  et pour y accéder, j'utilise HeidiSQL. </p>
<h4>Explications de quelques requêtes</h4>
<h5>Page d'accueil, fonction qui trie et affiche les randonnées par difficulté :</h5>
<img src="/upload/images/fonctionRandoParDifficulté.jpg" alt="fonction trie des rando Par Difficulté"/>
<h5>Explications :</h5>
<p>- La fonction prend en paramètre la connexion à la base de données, une difficulté (facile, moyenne ou difficile : dans la bdd, chaque randonnée possède une colonne difficulté) 
et un nombre d'élément qui est égal à 3.<br/>
- j'applique la requête : sélectionner l'image et le "alt" dans la table photos_rando et tout dans la table randonnee_article<br/>
- Afin de récupérer une photo de chaque randonnée, je fais une jointure entre les tables randonnee_article et photos_rando avec comme condition de jointure : id de l'article de la randonnée (dans 
randonnee_article) égal l'id de la photo (dans photos_rando).<br/>
- ensuite, parmi les photos dont l'id correspond on ne veut que celle où la colonne est_principale égale 1<br/> 
- et on ne veut que les randonnées dont la difficulté est égale à la variable difficulté 
passée en paramètre.<br/>
- et on ne veut sélectionner que trois randonnées<br/>
- enfin on retourne le tableau de toutes les lignes récupérées.</p>
<h5>Page blog, fonction qui affiche les titres des articles sur le même thème à la fin de chaque article :</h5>
<img src="/upload/images/fonctionArticleMemeTheme.jpg" alt="fonction trie des rando Par Difficulté"/>
<h5>Explications : </h5>
<p>Ceci est une requête imbriquée.<br/>
- La fonction prend en paramètre la connexion à la base de données et l'id de l'article en cours.<br/>
- Dans les parenthèses les plus au centre de la requête, on sélectionne le ou les thèmes de l'article en cours.<br/>
- Dans les premières parenthèses, on sélectionne l'id des articles qui ont pour thème celui (ou ceux) récupéré dans les parenthèses du centre sauf l'id de l'article en cours.<br/>
- Puisqu'il est possible qu'un article apparaisse plusieurs fois s'il a plusieurs thèmes en commun, on group by l'id des articles et on compte le nombre de ligne pour chaque id.<br/>
- On alias cette sous requête t pour qu'elle fonctionne comme une table, elle contient deux colonnes : l'id des articles récupérés et le nombre de thème en comnun.<br/>
- Puis on fait une jointure entre t et la table qui contient tous les articles pour récupèrer les titres des articles dont l'id correspond à ceux trouvés dans la sous requête.<br/>
- Ensuite, on les range dans l'ordre : en premier ceux qui ont dans la colonne nombre un chiffre plus important (c'est-à-dire ceux qui ont le plus de thèmes en commun).<br/>
- Puis on affiche en premier ceux qui ont un id plus élevé (ce qui correspond généralement à une date de parution plus récente, mais il serait plus juste de remplacer ce tri par id, par un tri par 
date).<br/>
- Enfin on affiche que quatre titres maximums.</p>
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
- Un composant pour les boutons des lettres de l'alphabet dont les props sont : une lettre (récupérée dans un tableau), un état (par défaut ou grisé), un index (qui constituera la clé) et une 
fonction onClick.<br/>
- Et un composant pour le nombre d'essais. </p>
<h4>App.js</h4>
	<p>App.js possède un "state" (état local) composé de :<br/> 
le mot à deviner (qui est généré dès l'ouverture de la page), un tableau de lettres déjà cliquées (vide au départ), le nombre d'essais (0 au 
	départ) et un état "gagné" qui est faux au départ. <br/>
à chaque fois que le joueur clique sur une lettre la fonction "onClick" est appelée :<br/>
- Elle met à jour le nombre d'essais dans l'état local, celui-ci est incrémenté,<br/>
- la lettre est ajoutée au tableau de lettres déjà cliquées,<br/>
- le tableau est transmis à la fonction qui s'occupe d'afficher le masque du mot<br/>
- et enfin elle teste si le masque du mot est égal au mot, si oui elle met à jour la variable "gagné" à vrai. </p>
<h4>Le rendu : </h4>
	<p>Si la variable "gagné" est à faux, on map les boutons des lettres de l'alphabet sinon, on affiche un bouton "redémarrer". Lorsqu'il est cliqué, cela appelle une fonction qui remet l'état 
	local à son état d'origine (tableau vide, nombre d'essais à 0, nouveau mot généré...).<br/>
	Pour le rendu des boutons des lettres déjà cliquées, la fonction "getEtat" est appelée. Celle-ci vérifie si la lettre est dans le tableau de lettres déjà cliquées grâce à la fonction "indexOf". 
	Selon si c'est oui ou non, l'apparence du bouton est modifiée grâce à une classe css.</p>
EOF;
$contenuVide = <<<EOF
<h4>Article en cours d'écriture</h4>
EOF;
$contenuSitePerso = <<<EOF
<h3>Introduction</h3>
<h4>Contexte</h4>
	<p>J'ai créé ce site après ma formation Développement et Administration Systèmes d'Information Expert afin de trouver un emploi. Ce site me présente et explique mes réalisations. Je l'ai réalisé 
	en ReactJs.</p>
<h4>Pourquoi ReactJs ?</h4>
	<p>React était déjà très populaire parmi les projets open-source et il l'est devenu encore plus lorsque Facebook, son créateur, a été contraint de changer sa licence  et de passer React sous 
	licence MIT.  Ceci sous la pression des utilisateurs de la librairie. Ainsi les développeurs peuvent l'utiliser sans risque. De nombres entreprises l'utilisent et elle apparait sur de nombreuses 
	offres d'emploi. <br/>
	C'est pour cela que je l'ai choisi pour ce site. Bien qu'un site vitrine ne présente pas une grande interaction avec les visiteurs, je voulais surtout apprendre à l'utiliser et montrer que je suis
	 capable d'apprendre un langage sur demande. </p>
<h3>Le design</h3>
<p>Je voulais un design simple, efficace et rapide à réaliser, le but étant de passer plus de temps à l'apprentissage de react qu'a peaufiner le design du site et ainsi de trouver un travail 
rapidement. <br/>
Les couleurs sont celles que j'avais choisies pour mon auto-entreprise : Mlle Fantasia. Le vert turquoise est une couleur encore à la mode et qui connote de l'univers du numérique. L'image de fond
 sur la page d'accueil (pour les écrans de plus de 768 pixels) à une vocation humoristique. Cet effet est rendu par le contraste entre ce que l'on voit et ce que l'on lit.</p> 
<h3>La technique</h3>
<h4>Le routage</h4>
<p>J'utilisais au départ une fonction onClick sur chaque lien qui affichait le composant demandé. C'était une solution temporaire pour tester le site avant de me pencher sur le routage. Pour le 
routage, j'ai installé "react-router-dom" et "react-router-hash-link" ("react-router-hash-link" est utile pour gérer les "#" dans l'url.  Ces derniers servent à nous amèner, à chaque fois, en haut
 de la page) .<br/>
Je vais décrire ici le composant "route",le premier composant de l'application qui s'occupe d'initier les différentes routes. Sa fonction render se présente comme ceci : <br/>
 <img src="/upload/images/Capture4.PNG" alt="code du composant route"/>
<h5>Explications :</h5><br/> 
<p>J'ai créé le tableau LIENS qui liste toutes les routes possibles, quelles soit stricte (comme la première ligne) ou dynamique (comme la troisième ligne : ".realisations/:id" où l'"id" est une 
variable qui correspond à un article en particulier). Ce tableau me permet également de générer le menu de navigation.<br/> 
A partir de ce tableau, je dois donc extraire les noms à afficher dans la barre de navigation. Dans celle-ci je veux faire apparaitre seulement "cv", "réalisations" et "contact". J'ai donc créé un 
autre tableau (appelé liensNavigation) qui filtre le premier. En effet, la fonction filter fait un tri dans un tableau et ne retourne que les lignes qui nous intéressent. Ici celles où l'option link 
égal true.<br/>
J'ai ensuite créé un tableau de routes qui permettra d'appeler le composant de la page demandée. Ici j'ai utilisé la fonction map. En effet, à la différence de filter, map ne trie pas le tableau, 
elle utilise chaque ligne.<br/>
La ligne route signifie que lorsque le path element.route (exemple : "/cv") apparait dans l'url, le composant element.component est appelé et rendu dans le navigateur (exemple : pour l'url "/cv",
 c'est le composent "cvPage" qui est appelé et rendu).<br/>
Ces tableaux sont passés en props au composant App lorsque celui-ci est appelé. C'est App qui s'occupera du rendu des pages. J'expliquerai plus tard le composant "Provider".<br/>
Le composant "route" sert simplement à modifier le rendu de la page en fonction de l'url, maintenant, il faut quelque chose qui va modifier l'url à chaque clic d'un lien. Pour cela j' ai utilisé 
hashLink (Link). Pour chaque lien, je défini ce qui doit s'afficher dans l'url. <br/>
Lorsqu'un id est mentionné dans l'url, le composant "réalisations" effectue une requête à l'api afin de récupérer l'article correspondant et l'afficher.</p>
<h4>L'API</h4>
<p>Pour ce site, j'ai créé une API en php  qui s'occupe de retourner les réalisations et les articles demandés :  <br/>
- Lorsque la page réalisation est demandée, l'api retourne le tableau de toutes les réalisations et la page affiche le titre et l'image principale.<br/> 
- Lorsqu'une réalisation est demandée, le composant demande à l'api de lui renvoyer l'article correspondant à l'id passé dans l'url.<br/>
Pour le moment, les articles sont écrits directement dans le fichier php, en attendant de les mettre dans une base de données. Prochainement, l'api sera renplacée par une version écrite sous Symfony.
 La transition sera invisible pour le site front-end.</p>
EOF;
$contenuPtitDej = <<<EOF
<h3>Le concept</h3>
<p>l'idée de ce site est de mettre en relation les entreprises qui souhaitent organiser un petit-déjeuner de travail et les organisateurs d'évènements ou les boulangeries. En effet, organiser ce genre
 d'évènement est intéressant mais, peut prendre du temps. </p>
<h3>La technique</h3>
<p>PtitDej.fr est une landing page au format one-page. J'ai réalisé ce site en html, css et bootstrap pour l'intégration, php et sql pour sauvegarder les renseignements des entreprises dans une 
base de données.</p>
<h3>Le design</h3>
	<h4>Qu'est ce qu'une landing page et une one-page?</h4>
<p>Une landing page est une page/un site web qui vise un objectif unique. Elles sont souvent utilisées en marketing pour réaliser une campagne et promouvoir un service ou un produit spécifique. 
Elles sont couplées avec des boutons Call-To-Action (CTA) permettant de vendre / récupérer des informations pour vendre le produit/le service ultérieurement. <br/>
Les landing pages sont souvent des sites one page afin de ne pas égarer le prospect et d'optimiser son taux de conversion (le rapport entre le nombre de clients obtenus et le nombre total de 
visiteurs). Les sites one pages sont des pages découpées en différentes sections, l'une à la suite de l'autre, accessibles en scrollant (vers le bas ou sur le côté).</p>
	<h4>Ptitdej.fr </h4>
<p>Ce site vise à obtenir des contacts afin de vendre un service.<br/>
 Il cible les professionnels qui veulent organiser un petit-déjeuner mais aussi les prestataires de petit-déjeuner (tels que les organisateurs d'événements, les boulangeries...). Le site doit être 
 clair et concis : <br/>
- Première partie : présentation du concept sur une belle image de fond qui aide l'utilisateur à se mettre en situation. On y  trouve aussi les deux boutons CTA (Call-To-Action) pour lesquels le site
 a été conçu. <br/>
- La partie suivante présente les avantages d'utiliser le site de manière très rapide. Lire les titres suffi à être convaincu.<br/>
- Le bandeau suivant est un rappel du bouton cta pour les entreprises.<br/>
- Ensuite vient une partie qui explique de manière plus précise la démarche du site.<br/>
- Le bandeau suivant est un rappel du bouton cta pour les prestaitaires.<br/>
- Puis on trouve les commentaires des utilisateurs précedents qui assurent de la notoriété du site et rasurent les prospects.<br/>
- Enfin le footer comporte quelques liens.<br/>
En ce qui concerne le design général : le site est propre, sur un fond blanc et rapide à lire et à comprendre. Les couleurs sont des couleurs chaudes qui donnent faim et les images de café et de thé
 sont également là pour donner envie.</p>
	<h4>Les boutons CTA </h4>
<p>Le but d’un bouton  CTA, ou call-to-action,  est d’inciter les visiteurs à effectuer une action précise par le clic du bouton. Cela peut être "s'inscrire", "réserver", "commander"...<br/>
L'optimisation des boutons CTA est un élément clé pour augmenter le taux de conversion. Les boutons doivent être très visibles, attractifs, ils doivent donner, au visiteur, l'envie de cliquer. 
La taille, la couleur, la police, la forme, le texte et l'emplacement sont importants.<br/>
Il est conseillé d'A/B tester les boutons CTA afin de trouver quelle couleur, quel texte, quelle forme... remporte de plus de clic. Le principe est de réaliser différentes versions du site en 
optimisant un point à la fois. Ensuite, on proposer une version à la moitié des visiteurs et l'autre version à l'autre moitié des visiteurs. A partir de là, on verra quel site a un meilleur taux de 
conversion Les boutons CTA de petitdej amènent sur une page de formulaire. Le formulaire est différent pour les entreprises et les prestataires. Ils doivent renseigner leur identité et soit leur 
demande de petit-déjeuner (pour les entreprises) soit leurs offres de petit-déjeuner (pour les prestataires).</p>
EOF;
$articleRea = [
    ["id" => 6, "titre" => "Site personnel",         "image" => "sitePerso",     "contenu" => $contenuSitePerso],
    ["id" => 1, "titre" => "Home Control",           "image" => "domotique",  "contenu" => $contenuHomeControl],
    ["id" => 2, "titre" => "Un site de randonnée",   "image" => "randonnee", "contenu" => $contenuRando],
    ["id" => 3, "titre" => "Ptitdej.fr",             "image" => "ptidej",    "contenu" => $contenuPtitDej],
    ["id" => 4, "titre" => "Pendu",                  "image" => "pendu",     "contenu" => $contenuPendu , "lien" => "https://github.com/mlle-fantasia/pendu", "lienNom" => "Dépôt du jeu sur Github"],
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
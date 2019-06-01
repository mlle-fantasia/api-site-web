<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
$auteur = '<br/>auteur : Marina Front<br/>';
$resumeHomeControl = <<<EOF
Ce projet a été réalisé, en groupe, dans le cadre de la formation Développement et Administration Système d'Information Expert 2018.
L'objectif du projet était de développer une application Androïd et une application Web permettant de piloter différents équipements d'un domicile.
EOF;
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
$resumeRando = <<<EOF
Site de randonnées réalisé avec php, sql, html, css et bootstrap support de ma formation autodidact.
EOF;
$contenuRando = <<<EOF
   <h3>Présentation</h3>
<h4>Contexte</h4>
	<p>Lorsque j'ai commencé mon apprentissage du développement j'ai suivi des cours sur Internet et il me fallait un support concret pour m'entraîner j'ai donc créé un site Internet. J'ai essayé de 
	le faire le plus complet possible pour y inclure toutes mes connaissances. J'ai choisi le thème par affinité : un site de randonnées<br/>
    Le site n'est pas en ligne, il n'est pas terminé. Objectif à court terme : le migrer sous symfony.</p>
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
connexion à la base de données. j'ai également des fichiers php pour des morceaux de page que j'utilise plusieurs fois dans le site. Dans le fichier fonction.php, se trouvent les fonctions de 
validation des données et les fonctions d'enregistrement et de récupération des données en BDD.</p>
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
$resumePendu = <<<EOF
Deux applications du jeu du pendu. L'une en reactJs, l'autre en Angular 6. Dans cet article, j'explique quelques points techniques et je compare l'utilisation des deux technologies.
EOF;
$contenuPendu = <<<EOF
<h3>Contexte</h3>
<p>Lorsque j'ai commencé à chercher un travail dans le développement (2018) j'ai remarqué que des connaissances dans les frameworks ReactJs ou Angular étaient souvent demandées. Puis en me
 renseignant sur les deux frameworks , j'ai appris que React avait une courbe d'apprentissage plus rapide. Je me suis donc attaquée au cours de OpenClassroom sur React. A la fin du cours, il est
  proposé de réaliser un jeu du pendu en travail pratique. <br/><br/>
Après avoir réalisé ce jeu, je me suis dit qu'il serait intéressant de reproduire le même avec le framework Angular et de comparer les deux. L'article présent en est le résultat. </p>
<h3>Extrait des consignes du TP : </h3>
<p>"- L’affichage comprend deux parties : le masque de la devinette, et une série de boutons d'essai, à raison d’un par lettre. Par exemple, deux rangées de 13.<br/>
- Le masque utilise un _underscore_ ( _ ) pour toute lettre de la devinette qui n’a pas encore été révélé.<br/>
- Pour simplifier la saisie et l’exploitation des lettres, on cantonnera les devinettes et les boutons à l'alphabet latin majuscule, sans signes diacritiques (accents, cédilles, etc.). Donc 26 lettres
 de A à Z.</p>
- Les lettres déjà essayées doivent être signalées visuellement (par exemple, grisées). Il n'est pas obligatoire d'interdire une nouvelle tentative dessus, c'est comme vous voulez.<br/>
- Une fois le texte deviné, la liste des boutons de lettres est remplacée par un seul bouton qui permet de redémarrer une partie… sans avoir à recharger la page !<br/>
Afin de vous permettre de vous concentrer sur React, nous vous donnons une petite fonction utile qui construit le masque affiché à partir du texte à deviner et de la série des lettres déjà testées. "</p>
<h3>Comparaison des applications</h3>
<h4>Api-Dictionnaire</h4>
<p>A la version 1 du pendu React, le dictionnaire se composait d'une vingtaine de mots dans un tableau qui se trouvait directement dans une constante du composant App. Ceci limitait grandement le jeu, je me 
suis donc mise en quête d'un dictionnaire sur internet. Mais je ne pouvais pas copier tout un dictionnaire dans mon composant. <br/><br/>
Ainsi la version 2 possédait un dictionnaire un peu plus conséquent dans un fichier à part. Et pour l'utilisait il me suffisait de l'importer dans mon composant en faisant : 
<br/><code>import dictionnaire from './dictionnaire.json'</code>.<br/> Le problème avec cette solution c’est que l’application forçait l’utilisateur à télécharger le fichier plus ou moins volumineux pour en extraire un mot.<br/><br/>
Quand est venu l'idée de faire un deuxième pendu en Angular, je me suis rapidement dit qu'il me faudrait un dictionnaire commun, accessible depuis les deux applications. C'est la version actuelle, la 3ème.
 Après avoir trouvé un dictionnaire complet sur internet et l'avoir reformâter en json, j'ai cherché comment créer une petite api. J'ai installé une api avec node js et express.
 <a href="https://expressjs.com/fr/" target="_blank">https://expressjs.com/fr/</a> et <a href="https://www.frugalprototype.com/developpez-propre-api-node-js-express/" target="_blank">https://www.frugalprototype.com/developpez-propre-api-node-js-express/</a> . 
 Cette api renvoie un mot choisit au hasard au format json ce qui permet de faire transiter uniquement un mot à l’utilisateur. Ainsi, cela accélère l’application et préserve la bande passante de l’utilisateur.
</p>
<h4>Les composants</h4>
<p>React et Angular sont des Frameworks qui fonctionnent à base de composants. Les composants sont des éléments de la page indépendants et autonomes. Chaque composant a sa structure, son style et son comportement propre.<br/> <br/>
J'ai remarqué qu’Angular entraine plus de restriction dans l'architecture d'un projet. En générant un composant avec Angular CLI, Cela crée un dossier avec 4 fichiers pour le composant : un html, un css, un typeScript,
 et un pour les tests. Le composant, décrit dans le fichier typeScript, est une classe. React, quant à lui, permet plus de liberté. Par exemple un composant n'est pas forcément une classe mais peut être juste une constante.<br/> <br/>
Pour le pendu React , je n'avais jamais testé auparavant l'architecture en composant pour un projet. J'ai donc suivi gentiment le cours. Résultat, la majeur partie du code applicatif se trouve dans le composant parent 
App et je n'ai que deux autres composants très simples.<br/><br/>
Pour le pendu Angular, j'ai eu plus de facilité de compréhension générale (Grace à ma connaissance de React ). C'est pour cela qu'il possèdait plus de composants et que le code était plus découpé. Ensuite j'ai retravaillé sur le pendu React pour le découper davantage.
</p>
<h4>Le rendu </h4>
<p>Pour le rendu, React utilise la syntaxe JSX qui a été créée spécialement pour lui alors qu'Angular utilise du HTML. Bien que JSX ressemble au HTML, il y a quelques différences à apprendre si on veut utiliser React.
 Je ne vais pas les énumérer ici, ce n'est pas l'objectif de cet article. <br/><br/>
La raison principale pour laquelle je préfère Angular pour le rendu, c'est que le HTML qui gère l'affichage est séparé de la logique métier. En effet, le premier se trouve dans le fichier HTML (sans surprise) et 
la deuxième se trouve le fichier TypeScript (.ts). Cela facilite grandement la lecture du code, selon moi. Pour communiquer entre ces deux fichiers, il existe les méthodes d'interpolation et de property binding 
 (depuis le .ts vers le .html) et le two-way binding (dans les deux sens).<br/><br/>
A la différence, en React, la structure de la page décrite en JSX se trouve dans le fichier .js morcelée au milieu du code métier. Cela rend la lisibilité de la structure difficile. Le Pendu est une application 
encore assez simple, je ne sais pas ce que ça peut donner dans une application beaucoup plus complexe.</p>
<h5>Rendu dynamique</h5>
<p>Pour rendre ses pages dynamiques une fois qu'elles sont présentes dans le DOM, React utilise l'état local. Celui-ci est décrit dans la variable state. Chaque composant possède son propre état local.
 A chaque modification de cet état, React "rerender" la page. Ce qui met à jour la page ou un élément de celle-ci sans changer de page. Je trouve ce principe d'état local très pratique et facile à appréhender.<br/><br/>
Angular procède, en fait, de la même manière. Ce sont les variables du composant qui définisse sont état du moment et lorsque, qu'une variable change, Angular met à jour la page de la même manière que React.
</p>
<h4>Problèmes rencontrés et solutions</h4>
<h5>Les observables d'angular</h5>
<p>Dans l'application Angular, j'ai eu du mal à appréhender le système des observables de Rxjs. c'est une notion très importante car elle permet de faire communiquer les composants entre eux. J'ai fait beaucoup 
de recherche sur internet et de test avant de choisir une méthode qui me convient. En effet il existe différentes méthodes pour utiliser les observables. Ici, j'ai utilisé BehaviorSubject 
<a href="https://pillar-soft.com/2018/07/02/behavior-subjects-in-angular-6/" target="_blank">https://pillar-soft.com/2018/07/02/behavior-subjects-in-angular-6/</a> .<br/> 
<span class="h6">Petite explication :</span> les observables se composent d'un observable (l'observé) et d'un observateur. Lorsque l'observable (l'observé) émet une information, l'observateur l'intercepte
 et peut effectuer ce pourquoi il est prévu. <br/>
<span class="h6">Architecture de l'application : </span><br/>
<img id="imgArchiPendu" src="/upload/images/archiPenduA.PNG" alt="exemple architecture Appli pendu"/><br/>
<span class="h6">Objectif :</span> Lorsque la partie est finie, le composant « mot » doit en informer le composant « lettres ». Pour cela, il pourrait lui faire passer une variable. Et en fonction de cette variable,
le composant "lettres" affiche soit les composants « lettre » soit le composant « redemmarer ».<br/>
<span class="h6">Implémentation :</span> Dans MessageService, j'ai crée un nouveau "BehaviorSubject" défini par défaut à « false », c'est l'observable (l'observé) :
 <div class="code">partieFinieOuiOuNon = new BehaviorSubject(false); </div>
 puis, toujours dans le service, j'ai créé une fonction : <br/>
 <div class="code">communicationFinDePartie(partieFinie) {<br/>
  <div class="alinea">this.partieFinieOuiOuNon.next(partieFinie);</div>
}<br/></div>
Le composant Lettres est l'observateur, il doit observer le "BehaviorSubject" du service pour être au courant de chaque changement et mettre à jour sa propre variable partieFinie. Cela ce fait dans le constructeur du 
composant comme ceci :
 <div class="code">constructor(private messageService: MessageService) {<br/>
  <div class="alinea">this.messageService.partieFinieOuiOuNon.subscribe((partieFinie) => {</div>
  <div class="alineaD">this.partieFinie = partieFinie;</div>
  <div class="alinea">});</div>
}<br/></div>
Ainsi, dans mon composant mot, lorsque la partie est finie, la variable <code>partieFinie</code> est mise à "true" et la fonction <code>communicationFinDePartie()</code> est appelée afin de transmettre la nouvelle valeur de la variable
 au service (l'observable). Puis le composant lettres observe le changement, met à jour sa propre variable et la transmet à son template qui va afficher le bon composant. 
</p>
<h5>Les promesses</h5>
<p>Que ce soit avec Angular ou avec React j'ai eu du mal à mettre en pratique le principe de promesse. Pour Importer le dictionnaire depuis l’extérieur de l'application, il fallait que l'application attende de récupérer
 un mot avant de se lancer. En effet, que ce soit avec React ou Angular, toute les fonctions sont asyncrones. Alors comment faire lorsque l'application a besoin d'attendre une information pour fonctionner ?
  Il faut utiliser des promesses.<br/>
Pour Angular, j'ai créé un service qui s'occupe exclusivement de la requête du mot et le composant Mot fait appel à lui dans la fonction ngOnInit() (celle-ci est appelée à l’initialisation du composant) pour mettre 
à jour sa variable mot. Le problème était que le mot arrivait trop tard et le reste du code engendrait des erreurs.<br/><br/>
Après quelques recherches, j'ai trouvé une solution dans la méthode then() qui renvoie une promesse et qui exécute des callbacks lorsque la promesse est complète. <br/><br/>
Pour React, je me suis dit que j'allais faire un composant parent qui s'occuperait d'aller chercher le mot , de mettre à jour son état local puis de le passer à son composant enfant. Pour cela j'ai mis ma requête
 axios dans la fonction componentWillMount (fonction du cycle de vie). Mais j'ai compris après que ceci ne fonctionnait pas car le composant parent passait son état local avant que ma requête ne soit terminée.<br/><br/> 
Petite précision sur axios : c'est un module externe qu'il faut importer dans le projet, il permet de faire des requêtes HTTP en utilisant le principe de promesse 
<a href="https://www.npmjs.com/package/axios" target="bank">(https://www.npmjs.com/package/axios)</a> .<br/><br/>
Finalement, J'ai utilisé le principe de async / await dans une fonction de mon composant App : 
<div class="code">async getDictionnaire(){<br/>
  <div class="alinea">const {mot} = this.state;</div>
  <div class="alinea">const response = await axios.get(API);</div>
  <div class="alinea">let Mot = response.data.mot;</div>
  <div class="alinea">this.setState({mot: Mot});</div>
}<br/></div>
Le principe de async / await est une nouvelle syntaxe plus simple pour écrire des promesses. Ces mot clés rendent la fonction syncrone. Ainsi, l'exécution du script est stopé au niveau du "await" jusqu'a ce que le 
requête soit complète et que la constante "response" soit remplie.
</p>
<h3>Conclusion</h3>
<p>Selon moi, React est plus facile à comprendre et à mettre en place au début car il est plus permissif, mais cela peut devenir un inconvénient sur des applications volumineuses où le manque de rigueur peut 
favoriser un code compliqué à relire. Mais cette application était pour ma première en React et ma première avec une architecture en composent donc  je pense que je n'ai pas utilisé tout le potentiel de React.
 Cela fera l'objet d'une prochaine refactorisation.<br/><br/>
A la différence, Angular est plus strict, ce qui favorise la lisibilité et donc la maintenance. J'ai rencontrer plus de difficultés lors de l'apprentissage d'Angular mais ceci est peut être du au fait que je
 suis allé plus loin dans le principe de composant.
</p>
EOF;
$contenuVide = <<<EOF
<h4>Article en cours d'écriture</h4>
EOF;
$resumeSitePerso = <<<EOF
Site sur lequel vous êtes en train de naviguer. Il me présente et présente quelques une de mes réalisations. Site réalisé avec ReactJS. L'article suivant parle du design du site et décrit quelques points techniques.
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
Je vais décrire ici le composant "route", le premier composant de l'application qui s'occupe d'initier les différentes routes. Sa fonction render se présente comme ceci : <br/>
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
$resumePtitDej = <<<EOF
PtitDej.fr est une landing page au format one-page. J'ai réalisé ce site en html, css, bootstrap, php et sql.l'idée de ce site est de mettre en relation les entreprises qui souhaitent organiser un 
petit-déjeuner de travail et les organisateurs d'évènements ou les boulangeries.
EOF;
$contenuPtitDej = <<<EOF
<h3>Le concept</h3>
<p>l'idée de ce site est de mettre en relation les entreprises qui souhaitent organiser un petit-déjeuner de travail et les organisateurs d'évènements ou les boulangeries. En effet, organiser ce genre
 d'évènement est intéressant mais, peut prendre du temps. </p>
<h3>La technique</h3>
<p>PtitDej.fr est une landing page au format one-page. J'ai réalisé ce site en html, css et bootstrap pour l'intégration, php et sql pour sauvegarder les renseignements des entreprises dans une 
base de données. Je suis actuellement en train de migrer ptitdej sous Symfony.</p>
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
$resumeVoyagesCroises = <<<EOF
Un blog de recits de voyages réalisé avec wordpress en utilisant un thème existant. L'article suivant décrit les plugins que j'ai utilisés.
EOF;
$contenuVoyagesCroises = <<<EOF
<h3>Contexte</h3>
<p>Les commanditaires du projet ont exprimé les besoins suivants : <br/>
- Pouvoir diffuser leurs différentes expériences de voyages<br/>
- Créer une communauté qui peut suivre leurs aventures<br/>
- Que la communauté puisse partager des avis et des expériences<br/>
La solution proposée a été de créer un site wordPress avec blog commentaire et liens vers les réseaux sociaux. Il n'y avait pas d'existant, j'ai donc créé la charte graphique et le logo.
</p>
<h3>WordPress - les plugins utilisés : </h3>
<h4>Elementor</h4>
<p>Cette extension est un builder de page, une manière différente de personnaliser les pages. Il offre de nombreuses 
possibilités en fonction du thème sélectionné. Il est simple à prendre en main grâce au glisser-déposer et une vision 
direct des changements.</p>
<h4>Central Color Palette</h4>
<p>	Ce plugin permet de définir des couleurs dans le tableau de bord. Celles-ci seront, ensuite, accessibles depuis la page "personnaliser". Cela évite de rechercher le code de la couleur à
 chaque fois que l'on en a besoin. Ce plugin est accessible dans l'onglet réglage du tableau de bord.</p>
<h4>Simple Masonry Layout</h4>
<p>	j'ai utilisé ce plugin pour mettre en page les derniers posts sur la page d'accueil. Cela m'a permis de placer les posts en trois colonnes. En effet les widgets existants dans wordpress 
ou les autres plugins gérant les derniers posts placent les posts les uns sous les autres. Cela ne me convenait pas. Avec ce plugin j'ai créé plusieurs pages de 3 posts. Les réglages des paramètres 
de ce plugin sont accessibles dans l'onglet réglage du tableau de bord. Les posts doivent
   être importés sur la page souhaitée grâce à un code court.</p>
<h4>Photo Gallery</h4>
<p>	Ce plugin permet de créer facilement des galeries d'images. Les fonctionnalités gratuites sont basiques. En accédant à la version payante on peut modifier la mise en page de la galerie. Après avoir
 sélectionné les images de la galerie dans l'onglet spécial du plugin, il faut l'ajouter dans l'article en ajoutant un bloc appelé "Photo Gallery" et en sélectionnant la galerie souhaitée.</p>
<h4>Smart Slider 3</h4>
<p>	J'ai apprécié utiliser ce plugin pour créer le carrousel de la page d'accueil. Le carrousel se configure, indépendemment du site, dans le tableau de bord, puis il faut l'importer dans la page 
souhaitée avec un code court. Il est très complet, responsive et assez facile d'utilisation. On peut ajouter de nombreux éléments, les déplacer facilement grâce au glisser-déposer. Le système de composition
 "canvas" permet de placer les éléments n'importe où sur le slide alors que le système "content" permet de respecter une grille. On peut également modifier la composition pour les formats téléphone et tablette.</p>
<h4>Yoast SEO</h4>
<p>	 Ce plugin est très pratique pour le référencement. Il offre la possibilité pour chaque page de modifier les meta données.</p>
<h4>All-in-One WP Migration</h4>
<p>	J'ai utilisé ce plugin pour exporter mon thème réalisé en local et l'importer dans un wordpress vierge installer un prod.</p>
<h3>Conclusion</h3>
<p>	Une fois que la première prise en main est faite, il est très facile de créer des sites internet avec Wordpress. Le plus contraignant est de devoir, pour chaque spécificité du site, chercher le plugin qui 
répondra au besoin. Le deuxième inconvéniént est que les différents réglages possibles de l'apparence du site sont déterminés par le thème choisi. C'est à dire que suivant le thème choisi, on sera plus ou
 moins libre de modifier l'apparence du site. Cela signifie que le choix du thème est primordial.</p>
EOF;

$contenuamc = <<<EOF
<h3>Le context</h3>
<p>La demande du client : mettre en ligne les talbleaux réalisés. <br/>
la solution technique : Après avoir réalisé Voyages Croisés en intégrant un thème existant, j'ai voulu essayer de créer un thème. j'ai suivi les tutos de Lionel Gibaudan qui sont clairs et bien construits. 
Je l'en remercie. 
</p>
EOF;
$resumeamc = <<<EOF
AMC Peinture est un blog réalisé avec wordpress. Pour ce blog j'ai créer le thème. Vous y découvrirez les peintures au couteau d'Anne-Marie Corsi.
EOF;
$contenuOC = <<<EOF
<h3>Contexte</h3>
<p>J'ai choisi de suivre cette formation car elle me permettra, à la fois, d'obtenir un diplôme reconnu Bac+3/4 et de gagner de l'expérience grâce au parcours en alternance. 
Maintenant, je suis entre 3 et 4 jours par semaine en entreprise et entre 1 et 2 jour(s) par semaine en formation à distance. 
La formation OpenClassroom se compose en une série de Projets à réalisés à l'aide des cours en libre accès sur le site et un tuteur qui nous suit chaque semaine. 
Le lien vers la description exhaustive du parcours se trouve sur la droite de cet écran.
</p>
<h3>Les projets</h3>

EOF;
$resumeOC = <<<EOF
Depuis le moi d'avril 2019, je suis la formation Développeur d'application Frontend avec OpenClassroom. Vous pourrez voir ici, les projets réalisés dans ce cadre.
EOF;
$articleRea = [
    [
        "id" => 8,
        "titre" => "Formation OpenClassroom",
        "Langages" => "Wordpress, html, css, js, uml, gestion de projet",
        "image" => "oc",
        "contenu" => $contenuOC,
        "resume" => $resumeOC,
        "liens" => [
            ["lien" => "https://openclassrooms.com/fr/paths/60-developpeur-dapplication-frontend", "lienNom" => "Description du parcours"],
            ["lien" => "http://p1.oc-marinafront.fr/", "lienNom" => "Projet 1"],
        ] ,
    ],
    [
        "id" => 6,
        "titre" => "Site personnel",
        "Langages" => "React.js",
        "image" => "sitePerso",
        "contenu" => $contenuSitePerso,
        "resume" => $resumeSitePerso
    ],
    [
        "id" => 1,
        "titre" => "Home Control",
        "Langages" => "html/css/bootstrap/java/php/js/jquery",
        "image" => "domotique",
        "contenu" => $contenuHomeControl,
        "resume" => $resumeHomeControl
    ],
    [
        "id" => 4,
        "titre" => "Pendu",
        "Langages" => "React.js VS Angular6",
        "image" => "pendu",     "contenu" => $contenuPendu ,
        "resume" => $resumePendu,
        "liens" => [
            ["lien" => "https://github.com/mlle-fantasia/pendu-react", "lienNom" => "Dépôt Github pendu React"],
            ["lien" => "https://github.com/mlle-fantasia/pendu-angular", "lienNom" => "Dépôt Github pendu Angular"],
            ["lien" => "http://localhost:3000/pendus#top", "lienNom" => "Le jeu"],
        ] ,
        "site" =>"https://www.marinafront.fr/pendus#top",
        "target"=>"_blank"
    ],
    [
        "id" => 9,
        "titre" => "AMC Peinture",
        "Langages" => "WordPress",
        "image" => "amc",     "contenu" => $contenuamc ,
        "resume" => $resumeamc,
        "liens" => [
            ["lien" => "https://amc.mademoiselle-fantasia.fr/", "lienNom" => "AMC Peinture"],
            ["lien" => "https://www.youtube.com/channel/UCXZ0uLdZ_1d3KaAUjpYzjjA/videos", "lienNom" => "Les tutos de Lionel Gibaudan"],
        ] ,
        "site" =>"https://amc.mademoiselle-fantasia.fr/",
        "target"=>"_blank"
    ],
    [
        "id" => 7,
        "titre" => "Voyages croisés",
        "Langages" => "WordPress",
        "image" => "voyagesCroises",     "contenu" => $contenuVoyagesCroises ,
        "resume" => $resumeVoyagesCroises,
        "liens" => [
            ["lien" => "https://www.voyagescroises.com", "lienNom" => "voyages croisés"],
        ] ,
        "site" =>"https://www.voyagescroises.com",
        "target"=>"_blank"
    ],
    [
        "id" => 2,
        "titre" => "Un site de randonnée",
        "Langages" => "html/css/bootstrap/php",
        "image" => "randonnee", "contenu" => $contenuRando,
        "resume" => $resumeRando
    ],
    [
        "id" => 3,
        "titre" => "Ptitdej.fr",
        "Langages" => "html/css/bootstrap/php",
        "image" => "ptidej",    "contenu" => $contenuPtitDej,
        "resume" => $resumePtitDej,
        "lien" => "https://github.com/mlle-fantasia/ptitdej.fr", "lienNom" => "Dépôt du site sur Github"],

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
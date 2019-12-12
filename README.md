# Quizzy API
​
Par : Guillaume HANOTEL, Arnaud LAFON, Rémi MAFAT, Simon TOULOUZE
​
## Prérequis
​
- MySQL ou MariaDB
- PHP 7.2
- Redis 3+
- Node 6.0+
- make
​
## Installation
​
1- Créer manuellement une base de données MySQL ou MariaDB dans votre SGBD que nous nommerez 'quizzy'
​
2- Créez un ficher d'environnement en copiant celui de l'exemple 
​
```
cp .env.example .env
```
​
3- Renseignez dans le fichier .env vos identifiants de base de donnée
​
```
DB_DATABASE=quizzy
DB_USERNAME=yourdbuser
DB_PASSWORD=yourdbpassword
```
​
4- Installez l'application avec 
​
```
make install
```
​
*Cette commande aura pour effet d'éxecuter :*
​
```
php artisan key:generate
php artisan migrate 
php artisan passport:install
```
​
5- Lancer le serveur local
​
```
make serve
```
​
6- Lancer la file d'attente des Jobs
​
```
php artisan queue:listen
```
​
7- Lancer le serveur de WebSocket
​
```
laravel-echo-server start
```
​
​
​
## Architecture de l'application Laravel
​
**/app** :  
​
 - **/Console** : Là où se trouvent les commandes custom que l'on peut lancer en CLI.
   Ici il y a 2 commandes : 
​
   - FetchTracks : Tape sur l'API de Deezer pour enregistrer les genres/artistes/tracks en BDD
   - FetchTracksPopularity : Scrape une page de recherche Youtube pour récupérer le nombre de vue en fonction d'un titre
​
- **/Events** : Les différents évènements qui seront déclenché par l'application et retransmis au front
  en websocket. (Cf Partie 'Principe du Broadcast d'Event via WebSocket')
​
- **/Exceptions** : Là où sont défini les Exceptions custom. Aucun Changement.
​
- **/Http**
​
  - **/Controllers** : Là où l'on défini les controllers de l'application.   
​
    Le dossier **/Auth** contient
    les controllers d'authentification par défaut de Laravel qui ici ne sont pas utilisés.  
    Dans le dossier **/Api**, on retrouve nos controllers utilisés par l'application.
​
  - **/Middleware** : Pas de changement
​
  - **/Transformers** : Classes servant à ne retourner qu'une partie des modèles en réponse HTTP.
​
- **/Jobs** : Ce sont des actions peuvent être mis dans une file d'attente et choisir de les éxecuter après un certain temps.
​
  - OpenQuizzListening : Lorsque les clients demandent une nouvelle musique, ce sont tous les clients de la room qui font cette requête. Il ne faut en prendre qu'un seul en compte. Pour celà, nous avons un champ is_listening pour un quizz pour savoir si il doit ou non prendre une nouvelle requête en compte.
​
    Lors que l'application reçoit la 1ère requête, il bloque l'écoute aux autres et déclenchent ce job qui s'éxecutera dans 1sec et qui réouvrira le quizz à l'écoute le temps que les autres requête soient annulés.
​
  - LaunchStartQuizzEvent : Ce Job sert à lancer l'Event de 'StartQuizz' avec un délai d'une 1sec. En effet, sans ce délai, lorsque l'utilisateur rejoint une room, l'event part avant que le client ait eu le temps de s'initialiser.
​
- **/Libraries** : Dossier custom pour inclure de la logique un peu séparé du reste de  l'application.
​
  - DeezerFetcher : Classe servant à taper sur l'API de Deezer et enregistrer tous les Genres / Artistes / Tracks en base de données.
  - MusicPopularityFetcher : Comme nous récupérons environ 47 000 musiques avec Deezer, il y a de tout et surtout des musiques complètement inconnus qui ne seraient pas très pertinente à mettre dans le quizz (grand public). Pour remédier à cela, il fallait trouver la "popularité" des musiques pour pouvoir effectuer un filtre dessus. Nous avons choisi pour chacune des musiques de scraper la page de recherche Youtube en passant en paramètres l'artiste et le nom de la musique. Cela nous permet de récupérer le nombre de vue du 1er résultat trouvé. 
​
- **/Models** : Ce sont les modèles de l'application gérés par Eloquent (ORM de Laravel) 
​
- **/Providers** : Classes servant à enregistrer certains services. Pas de changement
​
- **/Services** : Dossier custom contenant la logique métier de l'application avec :
​
  - QuizzService
  - TrackService
  - StatService
​
**/bootstrap** : Sert à démarrer l'application : Pas de changement
​
**/config** : Tous les fichiers de configuration de l'app.
​
**/database** : 
​
- **/factories** : Définition de template de modèle pour les Seeder. Pas de changement.
- **/migrations** : Définition de la base de données via des fichiers de migrations.
- **/seeds** : Une fois que l'API de Deezer a été parcouru, des seeders sont générés grâce au package [orangehill](https://github.com/orangehill)/**[iseed](https://github.com/orangehill/iseed)** qui permet de créer un seed à partir de la base de données. Cela permet dans l'étape de développement de pouvoir garnir la base de données sans avoir à taper sur l'API Deezer à chaque fois.
​
**/public** : Dossier exposé lorsque que l'application fonctionne en mode 'web' (et non API). Pas de changement.
​
**/resources** : Dossier contenant le tous les fichiers concernant le front lorsque que l'application fonctionne en mode 'web'. Pas de changement.
​
**/routes** : 
​
- api.php : Routes de l'API
- web.php : Routes en mode 'web'
- channels : C'est un callback qui lorsqu'un utilisateur tente de se connecter à un channel privé, de l'autoriser ou non à accéder au channel. Nous nous servons pour ajouter un utilisateur qui arrive sur une room à l'ajouter à la liste des participants d'un quizz.
​
**/storage** : Dossier avec le cache, les logs, etc... Pas de changement.
​
**/tests** : Dossier des tests. Pas de changement (oops).
​
**/vendor** : Dossier des dépendances PHP
​
**.env** : Fichier des variables d'environnement.
​
​
​
​
### Principe du Broadcast d'Event via WebSocket :
​
Dans Laravel, on peut définir des Events. Ce sont des classes qui peuvent 
prendre en paramètre n'importe quoi. Ces paramètres sont enregistrés en tant que 
propriété dans la classe concernée. 
​
Exemple : UserLoggedEvent -> event qui sera déclenché quand un user 
se connecte, et peut prendre en paramètre cet utilisateur.
​
Pour émettre cet évènement au moment de la connexion, on fait comme suit :
event(new UserLoggedEvent($user))
​
Normalement dans Laravel, les Events s'utilise avec des 'Listeners'
Ce sont des classes qui écoutent l'émission d'évènements auquels ils 
sont 'abonnés'. Un Listener possède une méthode handle($event) qui prend
en paramètre l'event qui a été émis. À partir de cet event, on peut retrouver 
le user qui a été enregistré en tant que propriété et faire l'opération que l'on
souhaite.
​
Mais ici on ne va pas utiliser les listeners. On veut que nos events soient 
émis au client et Laravel ne sait pas ça faire tout seul. 
(quoiqu'il existe des packages qui le permettent https://docs.beyondco.de/laravel-websockets/) 
​
Il lui faut un serveur de Websocket qui puisse envoyer les events au client.
Pour cela Laravel propose 2 solutions : 
​
- Soit on utilise un service tiers nommé Pusher qui prend en charge la
  transmission des events en websocket.
​
- Soit on utilise un serveur de Websocket Socket.IO avec Redis. Redis est une BDD
  en mémoire qui a la possibilité de gérer un système de
  'publication' / 'subscription'. 
  On va publier des évènements sur Redis, et avec le serveur de websocket on va
  souscrire à ces évènements, les recevoir et les envoyer aux clients.
​
​
​
### Rejoindre un quizz
​
Pour rejoindre un quiz il suffit de se connecter au channel 'quizz-' + genreId 
​
---
​
#### ***GET*** /api/quizz/{id}/askTrack
​
Récupere une track aléatoire en fonction du genre du quizz puis lance l'event QuizzSongInitEvent
​
---
​
https://github.com/mpociot/laravel-apidoc-generator

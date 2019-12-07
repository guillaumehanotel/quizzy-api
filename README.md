# Quizzy API

Par : Guillaume HANOTEL, Arnaud LAFON, Rémi MAFAT, Simon TOULOUZE

## Prérequis

- MySQL ou MariaDB
- PHP 7.2
- Redis 3+
- Node 6.0+
- make

## Installation

1- Créer manuellement une base de données MySQL ou MariaDB dans votre SGBD que nous nommerez 'quizzy'

2- Créez un ficher d'environnement en copiant celui de l'exemple 
```
cp .env.example .env
```
3- Renseignez dans le fichier .env vos identifiants de base de donnée
```
DB_DATABASE=quizzy
DB_USERNAME=yourdbuser
DB_PASSWORD=yourdbpassword
``` 
4- Installez l'application avec 
```
make install
```
Cette commande aura pour effet d'éxecuter :
```
php artisan key:generate
php artisan migrate 
php artisan passport:install
```

5- Lancer le serveur local
```
make serve
```

## Architecture de application Laravel

**/app** :  

 - **/Console** : Là où se trouvent les commandes custom que l'on peut lancer en CLI.
 Ici il y a 2 commandes : 
    - FetchTracks : Tape sur l'API de Deezer pour enregistrer les genres/artistes/tracks en BDD
    - FetchTracksPopularity : Scrape une page de recherche Youtube pour récupérer le nombre de vue en fonction d'un titre

- **/Events** : Les différents évènements qui seront déclenché par l'application et retransmis au front
en websocket. (Cf Partie 'Principe du Broadcast d'Event via WebSocket')

- **/Exceptions** : Là où sont défini les Exceptions custom. Aucun Changement.

- **/Http**

    - **/Controllers** : Là où l'on défini les controllers de l'application.   
    
        Le dossier **/Auth** contient
        les controllers d'authentification par défaut de Laravel qui ici ne sont pas utilisés.  
        Dans le dossier **/Api**, on retrouve nos controllers utilisés par l'application.
    
    - **/Middleware** : 

### Principe du Broadcast d'Event via WebSocket :

Dans Laravel, on peut définir des Events. Ce sont des classes qui peuvent 
prendre en paramètre n'importe quoi. Ces paramètres sont enregistrés en tant que 
propriété dans la classe concernée. 

Exemple : UserLoggedEvent -> event qui sera déclenché quand un user 
se connecte, et peut prendre en paramètre cet utilisateur.

Pour émettre cet évènement au moment de la connexion, on fait comme suit :
event(new UserLoggedEvent($user))

Normalement dans Laravel, les Events s'utilise avec des 'Listeners'
Ce sont des classes qui écoutent l'émission d'évènements auquels ils 
sont 'abonnés'. Un Listener possède une méthode handle($event) qui prend
en paramètre l'event qui a été émis. À partir de cet event, on peut retrouver 
le user qui a été enregistré en tant que propriété et faire l'opération que l'on
souhaite.
 
Mais ici on ne va pas utiliser les listeners. On veut que nos events soient 
émis au client et Laravel ne sait pas ça faire tout seul. 
(quoiqu'il existe des packages qui le permettent https://docs.beyondco.de/laravel-websockets/) 

Il lui faut un serveur de Websocket qui puisse envoyer les events au client.
Pour cela Laravel propose 2 solutions : 

- Soit on utilise un service tiers nommé Pusher qui prend en charge la
transmission des events en websocket.

- Soit on utilise un serveur de Websocket Socket.IO avec Redis. Redis est une BDD
en mémoire qui a la possibilité de gérer un système de
'publication' / 'subscription'. 
On va publier des évènements sur Redis, et avec le serveur de websocket on va
souscrire à ces évènements, les recevoir et les envoyer aux clients.

#### Dépendances 

##### Redis : 

Back (Laravel) :
   - predis/predis

Back (Serveur Socket.io Node) :    
   - laravel-echo-server
    
Front :
   - socket.io-client
   - laravel-echo


### Rejoindre un quizz

Pour rejoindre un quiz il suffit de se connecter au channel 'quizz-' + genreId 

---

#### ***GET*** /api/quizz/{id}/askTrack
Récupere une track aléatoire en fonction du genre du quizz puis lance l'event QuizzSongInitEvent

---

https://github.com/mpociot/laravel-apidoc-generator

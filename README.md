# Quizzy API

## Install
Dupliquer le fichier .env.example et le renommer en .env. Modifier les accès à la base de donnée et ajouter une ligne 
```
API_PREFIX=api
```

Générer une clé pour l'application
```
php artisan key:generate
```

Pour créer les tables lancer la commande 
```
php artisan migrate 
```

Installer passport pour l'authentification OAuth
```
php artisan passport:install
```

Lancer le serveur local
```
php artisan serve
```

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

##### Pusher :

Back :  
   - pusher/pusher-php-server

Front : 
   - laravel-echo
   - pusher-js

##### Redis : 

Back (Laravel) :
   - predis/predis

Back (Serveur Socket.io Node) :    
   - laravel-echo-server
    
Front :
   - socket.io-client
   - laravel-echo


### Rejoindre un quizz

#### Partie privée

- Créer une partie en tapant sur la route /api/quizz/create en post et en passant un parametre un objet genre avec son id

- Partager le lien de la partie pour que les autres utilisateurs puissent rejoindre la partie

- Ecouter l'évenement QuizzUserJoinedEvent qui se déclenche lorsqu'un utilisateur rejoint une partie

- Lorsque la partie est prête à démarrer envoyer une requête depuis le front qui declenchera un événement QuizzStartedEvent

https://github.com/mpociot/laravel-apidoc-generator

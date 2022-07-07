# Tweet Académie

**Recréer un réseau social**
**language: PHP, HTML & CSS, JS**

- The totality of your source files, except all useless files (binary, temp files, obj files,...), must be included in
  your delivery. COMPéTENCES à ACQUéRIR
- Ajax
- Micro-frameworks CSS
- Base de données relationnelle

## PROJET

Le but de ce projet est de créer un réseau social pour les étudiants de votre promotion, qui aura les mêmes
fonctionnalités que twitter. Il devra être le plus ressemblant possible en terme de fonctionnalités par rap- port au
site “Twitter”.
Pout ce projet vous êtes dans l’obligation d’utiliser un micro-framework CSS, et en particulier son système de grille
responsive (e.g. votre projet doit donc être responsive CAD que votre affichage doit pouvoir s’adapter en fonction de la
résolution de l’écran de votre utilisateur ; Typiquement, sur une résolution desktop vous devez gérer du multicolonnes,
contrairement à une résolution smartphone où vous devez gérer une seule colonne). Cela veut dire enfin, que vous devez
choisir un micro-framework qui embar- quera des fonctionnalités de grille responsive. Connaissez-vous le micro-framework
CSS Skeleton ?

### BASE DE DONNÉES

Ce projet ayant pour but de connecter les étudiants sur un même réseau social, la base de données doit être la même pour
tous. Vous devrez donc établir un schéma relationnel de base de données. Chaque groupe devra communiquer à la promotion
sa conception. Par la suite, vous devrez tous utiliser la même structure de base de base de données. Ainsi, le fichier
“common- database.sql” devra être le même pour tous les groupes. La note de votre soutenance sera divisée par deux si
vous n’utilisez pas la même structure de base de données que les autres groupes d’étudiants de votre promotion. Votre
base de données “common-database.sql” devra être située à la racine de votre dossier de rendu.

### FONCTIONNALITÉS

Vous devez intégrer les mêmes fonctionnalités que Twitter à savoir :

- Compte membre
- Tweets:
- Permettre l’ajout de hashtags(#)
- Permettre de cibler une personne que vous suivez dans un tweet
- Répondre à un tweet
- Retweeter
- Une section de recherche de tag
- Suivre un membre
- Choisir son thème
- Afficher la liste des followers
- Afficher la liste des followings
- La timeline devra être rafraîchie automatiquement
- Éditer son profil
- Un système de messagerie privé
- Les tweets ne doivent pas dépasser 140 caractères

### L’AUTHENTIFICATION

Les mots de passe utilisateurs ne devront pas être stockés “en clair” dans la base de données. Vous devrez les hasher au
format “ripemd160”. Le salt commun à tous les groupes sera “vive le projet tweet_academy”.

### FOLLOWERS - FOLLOWING

Il doit être possible de consulter et de rechercher les profils des utilisateurs. Sur le profil de chaque utilisateur un
lien pour suivre l’utilisateur devra être présent. Sur votre profil, il devra également être possible de lister les
personnes que vous suivez (following) et les personnes qui vous suivent (followers).

### # ET @

Si un tweet contient un hashtag (“#tag”), alors à l’affichage il doit être représenté sous forme de lien qui pointe vers
la page de recherche du tag en question. Si un tweet mentionne une personne (“@pseudo”) alors à l’affichage la chaîne
contenant le “@” doit être représentée sous forme de lien qui pointe vers le profil de la personne désignée. En outre, à
chaque caractère entré au clavier après le “@”, une liste de suggestions de profils doit s’afficher.

### LES PHOTOS

Vous devez permettre l’ajout de photos dans les tweets. Les photos devront être uploadées via un formulaire. L’url de la
photo doit bien sûr être présente dans le tweet avec un lien, sur celle-ci. Le nombre de caractères étant limité, vous
devez utiliser le même système que http://goo.gl/ pour réduire la taille de l’url de la photo. Par
exemple : http://localhost/img/fEgfk2.

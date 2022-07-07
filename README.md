
# Tweet Académie

**Recréer un réseau social**
**language: PHP, HTML & CSS, JS**

Lien vers le projet : [TweetAcadémie](https://gildas-le-drogoff.alwaysdata.net/academie)

## PROJET

Le but de ce projet était de créer un réseau social pour les étudiants de ma promotion qui avait les mêmes
fonctionnalités que twitter. Il devait être le plus ressemblant possible en terme de fonctionnalités par rapport au
site "Twitter".
Pout ce projet nous avions l’obligation de faire un site responsive.



### BASE DE DONNÉES

Ce projet ayant pour but de connecter les étudiants sur un même réseau social, la base de données devait être la même pour
tous. Nous devions établir un schéma relationnel de base de données et tous utiliser la même structure de base de base de données.

### FONCTIONNALITÉS

Nous devions intégrer les mêmes fonctionnalités que Twitter à savoir :

- Compte membre
- Tweets:
- Permettre l’ajout de hashtags(#)
- Permettre de cibler une personne que nous suivons dans un tweet
- Répondre à un tweet
- Retweeter
- Une section de recherche de tag
- Suivre un membre
- Choisir son thème
- Afficher la liste des followers
- Afficher la liste des followings
- La timeline devait être rafraîchie automatiquement
- Éditer son profil
- Un système de messagerie privé
- Les tweets ne devaient pas dépasser 140 caractères

### L’AUTHENTIFICATION

Les mots de passe utilisateurs ne devaient pas être stockés "en clair" dans la base de données. Nous devions les hasher au
format "ripemd160". Le salt commun à tous les groupes était "vive le projet tweet_academy".

### FOLLOWERS - FOLLOWING

Il devait être possible de consulter et de rechercher les profils des utilisateurs. Sur le profil de chaque utilisateur un
lien pour suivre l’utilisateur devait être présent. Sur notre profil, il devait également être possible de lister les
personnes que nous suiverions (following) et les personnes qui nous auraient suivent (followers).

### # ET @

Si un tweet contient un hashtag ("#tag"), à l’affichage il est représenté sous forme de lien qui pointe vers
la page de recherche du tag en question. Si un tweet mentionne une personne ("@pseudo") alors à l’affichage la chaîne
contenant le "@" est représentée sous forme de lien qui pointe vers le profil de la personne désignée. En outre, à
chaque caractère entré au clavier après le "@", une liste de suggestions de profils est affichée.

### Lien vers le projet
[TweetAcadémie](https://gildas-le-drogoff.alwaysdata.net/academie)


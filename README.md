# TIDAL

## Architecture MVC
### Model
Le model contient toutes les données à afficher, ainsi que la connexion à la Base de donnée via la classe PDO.

### View
La view contient l'ensemble de l'interface graphique.

### Controller
Le controller s'occupe de gérer les actions des utilisateurs (gestion de la vue et du modèle).
Le controller commence par appeler le fichier de ressources contenant toutes les fonctions et les classes 'utils', puis fait son traitement et appelle les vues à afficher.

## Gestion du panier
### Utilisateur connecté
Le panier de l'utilisateur connecté est stocké dans la base de donnée.

### Utilisateur non connecté
Si un utilisateur n'est pas connecté, son panier est stocké dans les données de session via un format JSON et lors de sa connexion, son panier temporaire est déplacé dans la base de donnée.

## Securité
### Connexion
Tous les passwords sont hachés avant d'être mis dans la base de donnée. Lorsque qu'un utilisateur se connecte, le hash du password rentré par l'utilisateur est comparé avec celui en BD. Si les deux match, alors une variable de session nommé connect est intialisée à TRUE.

### Deconnexion
Lors de la déconnexion, la session est detruite, ne permettant ainsi pas de connexion non voulue au site.

### Methode post
Cette méthode permet de garder les données de manière anonymes.

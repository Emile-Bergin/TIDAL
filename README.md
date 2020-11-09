# TIDAL

## Architecture MVC
###Model
Contient tous les données à afficher + connexion à la BD via la classe PDO

###View
Contient l'interface graphique

###Controller
S'occupe de de gérer les actions utilisateur (gestion des vues et des modèles).
Le controller commence par appeler le fichier de ressources contenant toutes les functions et classes utils, puis fait son traitement et appel les vues à afficher.

## Gestion du panier
### Utilisateur connecté
Son panier est stoké dans la base de donnée

### Utilisateur non connecté
Son panier est stokée dans les donnée de session via un json et lors de sa connexion, son panier temporaire est déplacé dans la base de donnée

##Securité
###Connexion
Tous les passwords sont haché avant d'etre mis dans la base de donnée. Lorsque qu'un utilisateur se connecte, le hash du password rentré par l'utilisateur est comparé avec celui en BD. Si les deux match, alors une variable de session nommé connect st intialisé à TRUE.

###Deconnexion
Lors de la deconnexion la session est detruite, ne permettant ainsi pas la connexion au site.

###Methode post
Cette méthode permet de garde les données annonyme

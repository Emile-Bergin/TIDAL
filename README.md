# TIDAL

## Architecture MVC

###Model
Contient tous les données à afficher + connexion à la BD via la classe PDO

###View
Contient l'interface graphique

###Controller
S'occupe de de gérer les actions utilisateur (gestion des vues et des modèles)

## Gestion du panier
### Utilisateur connecté
Son panier est stoké dans la base de donnée

### Utilisateur non connecté
Son panier est stokée dans les donnée de session via un json et lors de sa connexion, son panier temporaire est stoké dans la base de donnée

# Mon projet GSB2

C'est une plateforme de gestion de notes de frais comprenant un espace membres avec 3 types d'utilisateurs : un visiteur, un gestionnaire, un comptable.

Le visiteur peut :
- Saisir une fiche de frais
- Consulter ses fiches de frais
- Afficher les frais forfaitisés
- Affichier le récapitulatif des frais

Le gestionnaire peut :
- Ajouter ou modifier un visiteur

Le comptable peut :
- Valider une fiche de frais

## Vous voulez utiliser la plateforme ? Suivez les instructions ci-dessous (concernant Windows)

Requis :
- Une plateforme de développement (tel que EasyPHP, WampServer, ...) ou un serveur HTTP & base de données
- L'archive du projet

Installation de la plateforme de développement (ici EasyPHP Devserver 17) :

- Télécharger l'exécutable : https://www.easyphp.org/save-easyphp-devserver-latest.php
- Ouvrir le fichier pour débuter l'installation
- Choisir une langue
- Choisir l'emplacement de la plateforme (l'installation se fera, par exemple dans "C:\Program")
- Cliquer "Suivant" puis "Installer"

Installation du projet :
Supposons que j'ai installé mon serveur dans "C:\Program", un dossier du nom de EasyPHP-Devserver-17 (s'il s'agit de la version 17) sera installé.

- Télécharger l'archive du projet GitHub : https://github.com/ibrahyma/project_bts-sio_gsb2/archive/master.zip
- Ouvrir "C:\Program\EasyPHP-Devserver-17"
- Ouvrir "eds-www" et extraire l'archive à cet emplacement (les fichiers doivent se trouver dans le dossier "project_bts-sio_gsb2-master")

Démarrage d'EasyPHP :
- Ouvrir EasyPHP (le faisant apparaître dans la barre d'outils)
- Click sur l'icône puis dans l'onglet Server, click sur "Start/Restart All Servers"
- Attendre environ 15 secondes (le temps du démarrage des serveurs)
- Click sur l'icône puis sur "Open Dashboard"

Installation de la base de données :
EasyPHP se trouve par exemple dans "C:\Program\EasyPHP-Devserver-17".

- Ouvrir "MySQL Administration : PhpMyAdmin"
- Dans l'onglet à gauche, cliquer sur "Nouvelle base de données"
- Créer une base de données appelée "gsb2"
- Dans la barre de navigation, cliquer sur "Importer" puis "Choisir un fichier"
- Importer le fichier gsb2.sql se trouvant dans le dossier "C:\Program\EasyPHP-Devserver-17\eds-www\project_bts-sio_gsb2-master\bdd" (ce sont, bien-entendu, des données factices)
- Se diriger en bas de la page et exécuter

Exécuter le projet :

- Si les serveurs est éteint, suivre les étapes du démarrage d'EasyPHP
- Cliquer sur "Portable Directory" puis sur "project_bts-sio_gsb2-master/"

Vous pouvez vous connecter en tant que visiteur :
- Login : lvillachane
- Mdp : jux7g

En tant que gestionnaire :
- Login : gestion
- Mdp : gestion

En tant que comptable :
- Login : comptable
- Mdp : comptable

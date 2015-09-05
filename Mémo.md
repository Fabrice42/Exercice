Mémo Git
========
Ce mémo a été rédigé dans le cadre du cours OpenClassrooms *Gérer son code avec Git et GitHub* de Marc G. Gauthier <https://openclassrooms.com/membres/marcgg>.
@author Fabrice G. Boyer <fabrice.boyer@consultant.com>
@version 2015-09-04

Création
--------
* Initialisation d’un dépôt : `git init`
* Ajout d’un fichier particulier : `git add fichier.ext`
* Ajout de tous les fichiers du dossier de projet : `git add .`
* Validation d’une version : `git commit -m "Description des modifications"`
* Raccourci pour ajouter et valider : `git commit -am "Description"`

Multi-versions
--------------
* Liste des branches : `git branch`
* Nouvelle branche : `git branch nouvelle_branche`
* Nouvelle branche et sélection de cette branche : `git checkout -b nouvelle_branche`
* Retour à la branche principale : `git checkout master`
* Fusion de branches : `git merge branche_a_fusionner`
* Auteur de chaque ligne : `git blame ficher.ext`
* Détail des modifications : `git show 0ef03b...19b09e21`
* Conservation temporaire de modifications non-validées : `git stash`
* Restauration des modifications non-validées (ajoutées à la dernière version) : `git stash pop`

Réglages
--------
* État du suivi : `git status`
* Définition du remote d’origine : `git remote add origin https://github.com/Util42/Projet.git`

Récupération
------------
* Clonage d’un dépôt : `git clone https://github.com/Util01/Projet.git`
* Récupération des modifications depuis le remote d’origine : `git pull origin master`
* Récupération des modif. depuis un remote précis : `git pull https://github.com/Util02/Projet.git master`

Envoi
-----
* Envoi des modifications au remote d’origine : `git push origin master`
* Mise de côté de fichiers sensibles (configuration, logs) : `echo mon_fichier.ext >> .gitignore`

Restauration
------------
* Journal des versions (pour avoir le SHA) : `git log`
* Restauration d’une version : `git checkout 0ef03b...19b09e21`

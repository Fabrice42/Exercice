Définitions Git
===============
Ces définitions, personnelles, sont le résultat de mon interprétation du cours « Gérer son code avec Git et GitHub » de Marc G. Gauthier pour OpenClassrooms.

git commit
----------

> Faire un commit, c’est prendre une photo de ton code, à un moment donné.

* Explication : idéalement, quand tu as apporté une série de *modifications cohérentes* à l’ensemble ou à une partie de ton code, et que tu souhaites mémoriser cet état de tes fichiers (pour pouvoir y revenir plus tard, pour partager ton code, etc.), tu fais un commit ; cette version sera alors insérée dans l’*historique local* sous la *description explicite* que tu auras donnée.
* Restriction : contrairement aux systèmes centralisés où un commit revient à envoyer une série de modifications au dépôt central, avec Git les commits restent en local tant que tu n’as pas synchronisé ton projet avec un dépôt. D’autres part, il peut exister plusieurs versions concurrentes du code (des branches, des copies non-synchronisées).


git log
-------

> La commande `git log` liste l’historique des versions, avec leur date et leur auteur.

* Explication : chaque commit ajoute une nouvelle entrée à l’historique, donné dans l’*ordre anti-chronologique* et indexé par des *codes de hashage* ; on peut ainsi appliquer des commandes sur ce code SHA :
  * naviguer d’une version à l’autre avec `git checkout` ou
  * détailler l’ensemble des modifications avec `git show`.
* Restriction : parce que l’historique peut rapidement s’étoffer, pour suivre les modifications d’un fichier `exemple.ext` en particulier, il est plus commode d’appliquer `git blame exemple.ext`.


git branch
----------

> Une branche permet de donner à ton code une vie parallèle si besoin.

* Explication : une branche est une nouvelle orientation : pour des raisons internes (corriger du code déjà en production, faire des essais) ou externes (rendre service à un collègue qui utilise ton code, satisfaire un client qui veut une version particulière), tu peux être conduit à dériver ton code vers une autre branche.
* Restriction : si tu dois fusionner à nouveau cette branche avec la version principale, Git te demandera de faire des choix en cas de conflits ; donc, dans ce cas, le plus tôt sera le mieux ! Il peut aussi arriver que deux branches divergent pour une durée plus longue, voire ne fusionnent plus jamais.

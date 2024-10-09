
1. Identification des entités principales
Quel est l'élément central du jeu League of Legends que nous cherchons à modéliser ?
2. Définition des attributs
Quels types d'informations sont nécessaires pour décrire complètement un champion ?
Grace a son Nom
Comment pouvez-vous représenter l'identifiant unique d'un champion dans le modèle ?
Grace a une clé primaire 
Quels types de données seraient appropriés pour chaque attribut que vous avez identifié ?
Char ou varchar
3. Identification des entités secondaires
Outre les champions, quelles autres catégories d'informations sont importantes dans League of Legends et pourront être modélisées sous forme d'entités ?
Genre, Rôle, Espèce, Ressource, Type de portée, Région(s), Année de sortie
4. Définition des attributs pour les entités secondaires
Pour chaque entité secondaire que vous avez identifiée, quelles informations sont nécessaires pour la décrire ?
Genre, Rôle, Espèce, Type de portée, Région(s), Année de sortie
5. Établissement des relations
Quelles sont les connexions logiques entre l'entité principale (champion) et les entités secondaires ?
Comment exprimeriez-vous ces connexions en termes de relations dans un MCD ?

1.	Un champion a un genre et un genre appartient à plusieurs champions
2.	Un champion a un Rôle et un Rôle appartient à plusieurs champions
3.	Un champion a une ou plusieurs espèces et une ou plusieurs espèces ont plusieurs champions
4.	Un champion a une Ressource et une Ressource à plusieurs champions
5.	Un champion a un ou plusieurs Type de portée et un ou plusieurs Type de portée ont plusieurs champions
6.	Un champion a un ou plusieurs Région un ou plusieurs Région ont plusieurs champions
7.	Un champion a une Année de sortie et une Année de sortie à plusieurs champions



6. Détermination des cardinalités
Pour chaque relation que vous avez identifiée, réfléchissez :
Un champion peut-il avoir plusieurs instances de cette caractéristique ?
Oui un champion peut avoir plusieurs instances de Rôle, Espèce, Type de portée, Région.
Cette caractéristique peut-elle être partagée par plusieurs champions ?
Oui elle peut être partager par plusieurs champions.
Comment ces réponses se traduisent-elles en termes de cardinalités dans votre modèle ?
1.	(1,1) -> (1,n)
2.	(1,1) -> (1,n)
3.	(1,n) -> (1,n)
4.	(1,n) -> (1,n)
5.	(1,n) -> (1,n)
6.	(1,n) -> (1,n)
7.	(1,1) -> (1,n)

7. Création du diagramme
Utilisez draw.io pour créer votre diagramme. Quels symboles allez-vous utiliser pour représenter les différents éléments de votre MCD ?
Comment allez-vous organiser visuellement votre diagramme pour qu'il soit clair et facile à comprendre ?

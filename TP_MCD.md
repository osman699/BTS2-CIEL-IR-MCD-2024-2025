# TP MCD - League of Branly

## Objectif
Créer un Modèle Conceptuel de Données (MCD) étendu pour représenter les champions de League of Legends et leurs caractéristiques.

## Contexte
League of Legends est un jeu populaire avec de nombreux champions, chacun ayant des attributs uniques. Votre tâche est de modéliser ces informations dans un MCD.

## Étapes et Questions de Réflexion

### 1. Identification des entités principales
- Quel est l'élément central du jeu League of Legends que nous cherchons à modéliser ?
- Quelles sont les caractéristiques uniques qui définissent cet élément ?

### 2. Définition des attributs
- Quels types d'informations sont nécessaires pour décrire complètement un champion ?
- Comment pouvez-vous représenter l'identifiant unique d'un champion dans le modèle ?
- Quels types de données seraient appropriés pour chaque attribut que vous avez identifié ?

### 3. Identification des entités secondaires
- Outre les champions, quelles autres catégories d'informations sont importantes dans League of Legends ?
- Y a-t-il des caractéristiques des champions qui pourraient être modélisées comme des entités séparées ? Pourquoi ?

### 4. Définition des attributs pour les entités secondaires
- Pour chaque entité secondaire que vous avez identifiée, quelles informations sont nécessaires pour la décrire ?
- Comment structureriez-vous ces informations en attributs ?

### 5. Établissement des relations
- Quelles sont les connexions logiques entre l'entité principale (champion) et les entités secondaires ?
- Comment exprimeriez-vous ces connexions en termes de relations dans un MCD ?

### 6. Détermination des cardinalités
- Pour chaque relation que vous avez identifiée, réfléchissez :
  - Un champion peut-il avoir plusieurs instances de cette caractéristique ?
  - Cette caractéristique peut-elle être partagée par plusieurs champions ?
- Comment ces réponses se traduisent-elles en termes de cardinalités dans votre modèle ?

### 7. Création du diagramme
- Utilisez draw.io pour créer votre diagramme. Quels symboles allez-vous utiliser pour représenter les différents éléments de votre MCD ?
- Comment allez-vous organiser visuellement votre diagramme pour qu'il soit clair et facile à comprendre ?

## Conseils
- Pensez à la façon dont les joueurs interagissent avec les champions dans le jeu. Quelles informations sont importantes pour eux ?
- N'hésitez pas à faire des recherches sur League of Legends si vous n'êtes pas familier avec tous les aspects du jeu.
- Réfléchissez à la manière dont votre modèle pourrait être utilisé dans un système réel. Est-il complet ? Est-il trop complexe ?

## Rendu
À la fin du TP, vous devriez avoir un diagramme entité-relation complet représentant le modèle de données pour les champions de League of Legends. Préparez-vous à expliquer vos choix de modélisation.

Une fois votre MCD réalisé et validé (par retour de Pull Request 👀) vous pouvez passer à [l'intégration de la base dans le site web](TP_integration_MCD.md).

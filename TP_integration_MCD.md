# TP Intégration d'un MCD dans un site web

C'est là qu'on commence à s'amuser.

## 1. Mise en place de Laravel

Pour construire le site web, vous n'allez pas créer toute l'architecture vous même. On va utiliser un framework PHP du nom de Laravel.

Dans Docker Desktop, rechercher l'image `shinsenter/laravel` et faite `pull` sur cette image.

Ouvrez un terminal bash et entrer la commande suivante en remplaçant `csimon.SNIRW` par votre dossier.

```bash
docker run -p 80:80 -p 443:443 -p 443:443/udp \
    -v D:/csimon.SNIRW/League_of_Branly:/var/www/html \
    shinsenter/laravel:latest
```

A l'issu de cette commande, le conteneur sera lancé et vous pouvez l'utiliser.

Aller à l'URL `localhost` et vous devriez avoir la page de présentation de Laravel.

## 2. Import des assets

Dans votre dossier `BTS2-CIEL-IR-MCD-2024-2025/League_of_Branly` se trouve un ensemble de différent éléments de code. Récupérer les et placez les aux bons endroits dans votre dossier `D:/<votreNom.SNIR>/League_of_Branly`.

Après actualisation du site internet, vous devriez voir s'affichez le thème League of Branly. Inspecter la page pour vérifier qu'il n'y a pas d'erreur 404 au chargement des éléments. En cas d'erreurs, corrigez les.

## 3. Création des entités en utilisant `artisan`



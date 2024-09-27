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

## 2. Import des assets

Dans votre dossier `BTS2-CIEL-IR-MCD-2024-2025` se trouve un ensemble de différent élément de code. Récupérer les et placez les aux bons endroits dans votre dossier `League_of_Branly`.



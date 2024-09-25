# TP Intégration d'un MCD dans un site web

C'est là qu'on commence à s'amuser.

## 1. Mise en place de Laravel

Pour construire le site web, vous n'allez pas créer toute l'architecture vous même. On va utiliser un framework PHP du nom de Laravel.

```bash
docker run -p 80:80 -p 443:443 -p 443:443/udp \
    -v D:/csimon.SNIRW/League_of_Branly:/var/www/html \
    shinsenter/laravel:latest
```

## 2. Création des entités


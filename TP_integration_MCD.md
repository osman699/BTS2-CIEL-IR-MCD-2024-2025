# TP Intégration d'un MCD dans un site web

C'est là qu'on commence à s'amuser.

## A. Initialisation du projet

### 1. Mise en place de Laravel

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

### 2. Import des assets

Dans votre dossier `BTS2-CIEL-IR-MCD-2024-2025/League_of_Branly` se trouve un ensemble de différent éléments de code. Récupérer les et placez les aux bons endroits dans votre dossier `D:/<votreNom.SNIR>/League_of_Branly`.

Après actualisation du site internet, vous devriez voir s'affichez le thème League of Branly. Inspecter la page pour vérifier qu'il n'y a pas d'erreur 404 au chargement des éléments. En cas d'erreurs, corrigez les.

![image](https://github.com/user-attachments/assets/e81b1369-840e-4960-a588-61a3c45e4e85)

### 3. Visualisation de la base de données

Ouvrez votre dossier `League of Branly` avec Visual Studio Code.

Dans le dossier `database` vous remarquerez un fichier `database.sqlite`. Afin de pouvoir visualiser cette base de données, installer l'extension `SQLite` :

![image](https://github.com/user-attachments/assets/1381b158-6b53-4d0f-ab02-a9cb4cca61bf)

Puis tapez sur la touche F1 et rentrez `SQLite: Open Database` puis sélectionnez `database\database.sqlite`, cela rajoute un volet dépliant dans la colonne de gauche :

![image](https://github.com/user-attachments/assets/30653a25-c903-48e6-bc23-f0227254224c)

## B. Intégration du modèle Entités-Relations

### 1. Création des entités en utilisant `artisan`

Dans le terminal de votre conteneur et pour chacune de vos entités, utilisez la commande suivante en remplacant `Champion` par le nom voulu. Vous noterez que les noms d'entités commencent par des majuscules et sont au singulier.
```bash
php artisan make:model Champion -m
```

Décomposons cette commande :
- `php` : car Laravel est un framework php
- `artisan` : la brique de Laravel permettant de générer du code standard (models, controller, migration, vider le cache,...)
- `make:model` : la commande permettant de générer un nouveau model. Crée un fichier dans `app/Models`
- `Champion` : spécifie que l'entité doit s'appeler Champion. On aura donc un fichier `Champion.php` dans Models
- `-m` : crée également un fichier de migration dans `databse/migrations`. Ce fichier de migration contiendra les noms des colonnes et les types de données de la table `champions`. A noter que le lien entre le model et la base de données est fait par cette commande.

### 2. Mettre à jour les migrations

Changez le contenu de la fonction `up` pour quelle crée toutes les colonnes de la table `champions` :

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('champions', function (Blueprint $table) { //crée la table champions
            $table->id('champion_id'); // ajoute une colonne id intitulée champion_id
            $table->string('champion_name'); // ajoute une colonne champion_name qui contiendra des chaînes de caractères
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('champions');
    }
};
```

Faites de même pour chaque migration d'entité.

Si vous souhaitez qu'une élément d'une colonne puisse être null, vous pouvez appeler la fonction `nullable()` de cette façon :

```php
$table->string('champion_name')->nullable();
```

### 3. Démarrer la migration

Lancez la commande `php artisan migrate` dans le terminal du conteneur pour appeler les fichier de migration et créer les tables.

Vous pouvez vérifier dans l'inspecteur de sqlite la présence de vos tables.

![image](https://github.com/user-attachments/assets/c543c4f2-9b3a-4275-913c-99450c032643)

### 4. Définir les relations

Modifiez les fichiers modèle des entités pour qu'ils incluent les relations. Voici un exemple avec la relation que nous avons vu dans le cours : "un champion possède plusieurs compétences".
On modifie donc le modèle `Champion` pour y inclure cette relation.

```php
class Champion extends Model
{
    /**
     * Il peut y avoir du code avant cette fonction
     */

    public function abilities()
    {
        return $this->hasMany(Ability::class, 'champion_id'); // ce lit : ce champion ($this) a plusieurs compétences (Ability) et pour la connexion entre les deux se fait via le champ `champion_id`
    }
}
```

Parfois, vous aurez besoin de d'autres types de relation (one-to-one, one-to-many, has-one-of-many,...) vous pouvez utiliser ce guide : https://kinsta.com/fr/blog/relations-laravel-eloquent/

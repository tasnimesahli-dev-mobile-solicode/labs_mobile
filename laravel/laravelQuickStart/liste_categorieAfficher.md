---
marp: false
paginate: true
---

# Lab — Afficher la liste des catégories avec Laravel

**Objectif :** Créer une table `categories` dans la base de données et afficher la liste des catégories dans une page Laravel, en utilisant un seul modèle et une seule table.

---

## Étapes réalisées

1. Création du modèle `Categorie` et de sa migration avec `php artisan make:model Categorie -m`.
2. Vérification de la structure de la table `categories` contenant les colonnes `id`, `nom`, `created_at` et `updated_at`.
3. Configuration du modèle `app/Models/Categorie.php`.
4. Création d’une route dans `routes/web.php` pour récupérer les catégories avec `Categorie::all()`.
5. Création de la vue `resources/views/categories.blade.php`.
6. Affichage des catégories avec la directive Blade `@foreach`.
7. Lancement du serveur avec `php artisan serve`.

**Résultat :** Affichage de la liste des catégories dans le navigateur à l’adresse `http://127.0.0.1:8000/categories`, avec les catégories « Développement » et « Design ».

**Conclusion :** Découverte du modèle Eloquent, des migrations, des routes et des vues Blade pour récupérer et afficher des données provenant d’une base de données dans une application Laravel.
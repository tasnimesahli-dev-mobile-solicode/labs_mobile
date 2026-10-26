---
marp: true
paginate: true
---

# Lab 4 — Afficher la liste des catégories

**Objectif :** Créer une table `categories` et afficher la liste des catégories dans une page Laravel en utilisant un seul modèle et une seule table.

---

## Étapes réalisées

1. Création de la migration `create_categories_table`.
2. Définition des colonnes : `id`, `name`, `description` et `timestamps`.
3. Création de la table avec `php artisan migrate`.
4. Création du modèle `Category`.
5. Ajout de catégories dans la base de données.
6. Création d’une route dans `routes/web.php`.
7. Création de la vue `resources/views/categories.blade.php`.
8. Affichage des catégories avec la directive `@foreach`.

**Résultat :** Affichage de la liste des catégories depuis la base de données à l’adresse `http://127.0.0.1:8000/categories`.

**Conclusion :** Mise en pratique des migrations, des modèles, des routes et des vues Laravel.
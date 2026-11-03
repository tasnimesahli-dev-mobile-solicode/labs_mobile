---
marp: true
theme: solicode-theme
paginate: true
size: 16:9
---

<!-- _class: cover -->
<!-- _paginate: false -->
<!-- _header: "" -->
<!-- _footer: "Centre SoliCode Tanger & OFPPT — Promotion 2026" -->

<!-- Note présentateur : Bienvenue à toutes et à tous, je vous présente aujourd'hui notre projet technique de plateforme web pour la gestion d'articles de blog. -->

![height:95px](images/ofppt-logo.png) ![height:80px](images/solicode-logo.png)

# Plateforme de Gestion des Articles

### Présentation du Projet Technique — Blog d'Articles

**Présenté par** : Sahli Tasnime &nbsp;&bull;&nbsp; **Encadré par** : ES-Sarraj Fouad

Établissement : **Centre SoliCode Tanger &bull; OFPPT**

---

<!-- header: "Plateforme de Gestion des Articles | Plan" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note présentateur : Voici le plan de notre présentation, articulé en cinq étapes clés depuis l'expression des besoins jusqu'à la démonstration du prototype. -->

# Plan de la Présentation

1. **1. Introduction**
2. **2. Besoins du Projet**
3. **3. Analyse & Fonctionnalités**
4. **4. Conception & Données**
5. **5. Réalisation & Prototype**

---

<!-- header: "1. Introduction | Présentation du Projet" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note présentateur : Cette introduction présente le contexte du projet, un blog léger et autonome permettant de publier et consulter facilement des articles en ligne. -->

# 1. Introduction

- **Plateforme web moderne** pour la gestion d'un blog
- **Publication et consultation** d'articles en ligne
- **Classement thématique** des publications par catégories
- **Stockage léger et autonome** sans base de données SQL
- **Accès public rapide** depuis tout navigateur web

---

<!-- header: "2. Besoins | Besoins du Projet" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note présentateur : Nous abordons ici les exigences fonctionnelles et les critères de performance essentiels pour garantir une utilisation fluide et ergonomique. -->

# 2. Besoins du Projet

### Besoins Fonctionnels :
- **Ajout et affichage** des catégories thématiques
- **Rédaction et publication** des articles en ligne
- **Gestion des statuts** : mode `Brouillon` ou `Publié`
- **Filtrage direct** des articles par centre d'intérêt

### Besoins Non Fonctionnels :
- **Performance** : rapidité d'accès aux fichiers JSON
- **Ergonomie** : interface responsive conçue avec Tailwind CSS
- **Sécurité** : validation des formulaires côté client et serveur

---

<!-- header: "3. Analyse | Les Rôles Utilisateurs" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note présentateur : Cette diapositive détaille les trois profils de la plateforme ainsi que les autorisations spécifiques attribuées à chaque utilisateur. -->

# 3. Les Rôles Utilisateurs

* **Administrateur** :
  - **Gestion globale** de la plateforme web
  - **Création et modération** des catégories de blog
  - **Contrôle complet** des publications et des comptes

* **Rédacteur** :
  - **Rédaction et mise à jour** de ses propres articles
  - **Attribution obligatoire** d'une catégorie à chaque article

* **Visiteur** :
  - **Consultation libre** de la page d'accueil
  - **Filtrage par thème** et lecture des articles publiés

---

<!-- header: "3. Analyse | Fonctionnalités Clés" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note présentateur : Nous découvrons les deux modules principaux du système, dédiés à l'organisation des catégories et à la publication d'articles. -->

# 3. Fonctionnalités Clés

- **Gestion des Catégories** :
  - **Formulaire dédié** pour l'administrateur
  - **Enregistrement immédiat** dans `categories.json`
  - **Affichage automatique** dans le menu et les filtres

- **Gestion des Articles** :
  - **Formulaire complet** : titre, catégorie, contenu rédigé
  - **Attribution du statut** : `Brouillon` ou `Publié`
  - **Génération automatique** de cartes visuelles sur l'accueil

---

<!-- header: "4. Conception | Architecture du Stockage JSON" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note présentateur : Cette vue d'ensemble explique notre choix d'une persistance légère au format JSON gérée directement par les fonctions natives de PHP. -->

# 4. Architecture du Stockage JSON

- **Organisation des fichiers** dans le dossier `/data` :
  - `data/redacteurs.json` : comptes, identifiants et rôles
  - `data/categories.json` : liste des thèmes enregistrés
  - `data/articles.json` : textes, auteurs, dates et statuts

- **Traitement PHP natif** :
  - **Lecture** : `file_get_contents()` et décodage avec `json_decode()`
  - **Écriture** : encodage avec `json_encode()` et `file_put_contents()`

---

<!-- header: "4. Conception | Structure des 3 Tables" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note présentateur : Nous présentons le schéma des données reliant de façon cohérente les rédacteurs, les catégories thématiques et les articles. -->

# 4. Structure des Données (3 Tables)

- **Table Rédacteur** : `id`, `nom`, `email`, `role`
- **Table Catégorie** : `id`, `nom`, `description`, `creee_par`
- **Table Article** : `id`, `titre`, `contenu`, `id_categorie`, `id_redacteur`, `date`, `statut`

> **Lien logique** : un **Rédacteur** écrit plusieurs **Articles**, chaque **Article** appartient à une **Catégorie**.

---

<!-- header: "4. Conception | Exemples de Données" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note présentateur : Ce tableau fournit des exemples concrets d'enregistrements pour illustrer l'association entre une catégorie et un article publié. -->

# 4. Exemples de Données Enregistrées

### Table Catégorie
| ID | Nom de la Catégorie | Description du Thème | Créateur |
| :---: | :--- | :--- | :---: |
| **1** | **Voyage** | Conseils de découverte et séjours | Administrateur |
| **2** | **Art & Culture** | Peinture, livres, cinéma et patrimoine | Administrateur |

### Table Article
| ID | Titre | Catégorie | Auteur | Statut |
| :---: | :--- | :--- | :---: | :---: |
| **101** | Découvrir les plages du sud | Voyage (1) | Jean Dupont (1) | **Publié** |
| **102** | Comprendre la peinture moderne | Art & Culture (2) | Sarah Martin (2) | **Publié** |

---

<!-- header: "5. Réalisation | Stack Technique" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note présentateur : Voici la pile technologique moderne et légère qui compose le projet, associant Tailwind CSS, JavaScript et PHP 8. -->

# 5. Stack Technique Utilisée

- **HTML5 & CSS3** : structure sémantique et socle visuel des pages
- **Tailwind CSS** : design moderne, utilitaires et mise en page responsive
- **JavaScript** : contrôle dynamique des formulaires avant soumission
- **PHP 8** : logique serveur, gestion des requêtes et persistance
- **JSON** : format de stockage structuré, léger et portable

---

<!-- header: "5. Réalisation | Prototype : Page d'Accueil" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note présentateur : Cette capture montre l'interface d'accueil responsive avec son menu de navigation et sa grille dynamique de publications. -->

# 5. Prototype : Page d'Accueil

![center height:370px](images/capture-accueil.png.png)

- **Barre de navigation** &bull; **Grille d'articles responsive** &bull; **Badges de catégories** &bull; **Tailwind CSS**

---

<!-- header: "5. Réalisation | Prototype : Formulaire d'Ajout" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note présentateur : Nous visualisons ici l'interface de rédaction permettant d'ajouter un nouvel article avec sélection de sa catégorie et contrôle des champs. -->

# 5. Prototype : Formulaire d'Ajout

![center height:370px](images/capture-ajouter-article.png.png)

- **Champ Titre** &bull; **Sélecteur dynamique** &bull; **Zone de rédaction** &bull; **Validation instantanée**

---

<!-- header: "5. Réalisation | Logique Serveur (PHP & JSON)" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note présentateur : Cet extrait de code met en avant le traitement côté serveur pour lire, préparer et enregistrer instantanément les données en JSON. -->

# 5. Logique Serveur : PHP & JSON

```php
<?php
// 1. Lecture des articles existants
$jsonPath = 'data/articles.json';
$articles = json_decode(file_get_contents($jsonPath), true) ?? [];

// 2. Préparation du nouvel enregistrement
$articles[] = [
    'id'           => count($articles) + 1,
    'titre'        => $_POST['titre'],
    'id_categorie' => $_POST['id_categorie'],
    'contenu'      => $_POST['contenu'],
];

// 3. Sauvegarde immédiate dans le fichier JSON
file_put_contents($jsonPath, json_encode($articles, JSON_PRETTY_PRINT));
?>
```

---

<!-- header: "5. Réalisation | Style Tailwind CSS & Contrôle JS" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note présentateur : Cet exemple montre la structure d'une carte d'article stylisée avec les classes utilitaires de Tailwind CSS. -->

# 5. Style Tailwind CSS & Contrôle JS

### Carte d'article en Tailwind CSS :
```html
<article class="bg-white rounded-xl shadow-sm border border-slate-200 p-5 hover:shadow-md transition">
  <span class="inline-block bg-sky-100 text-sky-800 text-xs font-semibold px-2.5 py-1 rounded-full">Voyage</span>
  <h2 class="text-xl font-bold text-slate-800 mt-3">Découvrir les plages du sud</h2>
  <p class="text-slate-600 text-sm mt-1">Visitez les plus beaux villages côtiers...</p>
</article>
```

---

<!-- _class: cover -->
<!-- _paginate: false -->
<!-- _header: "" -->
<!-- _footer: "Centre SoliCode Tanger & OFPPT — Promotion 2026" -->

<!-- Note présentateur : Pour conclure, ce projet valide un système autonome complet tout en préparant de futures évolutions comme la recherche et les commentaires. -->

# Conclusion & Perspectives

### Bilan du Projet :
- **Application web fonctionnelle** et totalement autonome
- **Cycle complet** de gestion des articles et des catégories
- **Persistance maîtrisée** avec 3 tables structurées en JSON
- **Interface responsive** moderne réalisée avec Tailwind CSS

### Perspectives d'Évolution :
- **Recherche instantanée** d'articles par mot-clé
- **Module de commentaires** pour les lecteurs
- **Téléversement d'images** d'illustration personnalisées

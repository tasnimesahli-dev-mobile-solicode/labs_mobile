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

![height:95px](images/ofppt-logo.png) ![height:80px](images/solicode-logo.png)

# Technology Blog

### Présentation du Projet Technique

**Présenté par :** Sahli Tasnime

**Encadré par :** ES-Sarraj Fouad

**Centre SoliCode Tanger • OFPPT**

---



# Plan de la Présentation

1. Introduction
2. Problématique et besoins
3. Fonctionnalités
4. Conception et données
5. Réalisation du prototype

---

# 1. Introduction

- **Nom :** Technology Blog.
- **Type :** Application web.
- **Sujet :** Gestion des catégories d'un blog.
- **Objectif :** Ajouter et afficher les catégories.
- **Stockage :** Fichier JSON.

> Le projet permet de bien organiser les catégories d'un blog.

---



# 2. Les Besoins

### Besoins fonctionnels

- Ajouter une catégorie.
- Afficher les catégories.

### Besoins non fonctionnels

- Une application simple.
- Un code bien organisé.
- Une bonne communication entre JavaScript et PHP.

---



# 3. Fonctionnalités

### Gestion des catégories

- Ajouter une catégorie.
- Saisir le nom et la description.
- Enregistrer les données dans JSON.
- Afficher les catégories enregistrées.

### Exemple de catégories

| ID | Nom | Description |
| :---: | :--- | :--- |
| 1 | Développement | Développement web |
| 2 | Design | Design web |

---


# 4. Les Données JSON

Les catégories sont dans le fichier :

`data/categories.json`

### Exemple de données

```json
[
  {
    "id": 1,
    "nom": "Développement",
    "description": "Développement web"
  },
  {
    "id": 2,
    "nom": "Design",
    "description": "Design web"
  }
]
```

### Les fonctions PHP

- `file_get_contents()` : lire le fichier.
- `json_decode()` : convertir JSON en PHP.
- `json_encode()` : convertir PHP en JSON.
- `file_put_contents()` : écrire dans le fichier.

---



## 4. Les Classes PHP

### Classe `Categorie`

Elle représente une catégorie.

Elle contient :
- ID
- Nom
- Description

### Classe `GestionCategorie`

Elle permet de gérer les catégories.

- Lire les catégories.
- Récupérer les données du fichier JSON.
- Ajouter une catégorie dans le fichier JSON.

### Classe `ControllerCategorie`

Elle permet de contrôler les opérations sur les catégories.

- Recevoir les requêtes.
- Appeler les méthodes de `GestionCategorie`.
- Retourner les réponses au format JSON.

### Fichier `categories.json`

Il permet de stocker les catégories.

> Les classes permettent de mieux organiser le code.

---



# 4. Communication entre JavaScript et PHP

Comment fonctionne l'application ?

1. JavaScript envoie une demande avec `fetch()`.
2. Le fichier PHP reçoit la demande.
3. PHP traite les données.
4. PHP utilise les fichiers JSON.
5. PHP envoie une réponse en JSON.

### Les méthodes utilisées

- **GET :** récupérer les catégories.
- **POST :** ajouter une catégorie.

---


# 5. Technologies Utilisées

- **HTML5 :** créer la page web.
- **CSS3 :** ajouter le style.
- **JavaScript :** ajouter les actions.
- **Fetch API :** envoyer les demandes.
- **PHP 8 :** traiter les données.
- **JSON :** garder les données.

---


# 5. Architecture du Projet

```text
Interface Web
     |
     v
 JavaScript
     |
     v
  Fetch API
     |
     v
   api.php
     |
     v
GestionCategorie.php
     |
     v
  Categorie.php
     |
     v
categories.json
```

Chaque partie a un rôle dans le projet.

---

<!-- header: "5. Réalisation | Prototype" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

# 5. Présentation du Prototype

### Gestion des catégories

- Un formulaire pour ajouter une catégorie.
- Une liste pour afficher les catégories.
- Un fichier JSON pour garder les données.

### Capture du prototype

Ajouter ici une capture réelle de la page de gestion des catégories.

---

<!-- _class: cover -->
<!-- _paginate: false -->
<!-- _header: "" -->
<!-- _footer: "Centre SoliCode Tanger & OFPPT — Promotion 2026" -->

# Conclusion

### Ce que j'ai réalisé

- J'ai créé une application de gestion des catégories.
- J'ai utilisé PHP et JavaScript.
- J'ai utilisé JSON pour garder les données.
- J'ai utilisé Fetch API pour la communication.


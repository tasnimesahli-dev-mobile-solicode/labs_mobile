---
marp: true
theme: default
size: 16:9
paginate: true
style: |
  section {
    box-sizing: border-box;
    padding: 5%;
    font-size: clamp(20px, 2.2vw, 28px);
    overflow-wrap: anywhere;
  }
  h1 { font-size: clamp(36px, 4.5vw, 56px); }
  h2 { font-size: clamp(28px, 3.2vw, 40px); }
  pre { font-size: clamp(13px, 1.45vw, 18px); }
  table { font-size: clamp(15px, 1.7vw, 22px); }
  section:not(.light) { background: #101827; color: #eaf0ff; }
  section.light { background: #f5f7fb; color: #172033; }
  @media screen and (max-width: 700px) {
    section { padding: 4%; }
    pre { white-space: pre-wrap; }
    table { font-size: 14px; }
  }
---

#  Planification d'un Lab

---

<!-- _class: light -->
## Lab Plan
1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## Introduction

- Concevoir un lab autonome à partir d’un besoin réel ou d’un objectif d’apprentissage.
- Utiliser le blog comme contexte : chaque lab explore une partie ciblée de sa stack, une technique ou une bibliothèque.
- Relier le problème, le travail à effectuer et une validation concrète.

---

<!-- _class: light -->
## Problems Encountered

Exemples génériques de difficultés de planification :

- La documentation est dense et ne donne pas toujours un parcours pratique.
- Les étapes intermédiaires ne permettent pas de vérifier les acquis.
- Un lab trop large mélange plusieurs technologies et manque d’un objectif clair.

---

## Solutions Implemented

Organiser le lab en quatre temps :

1. **Définition** — préciser le besoin et le résultat attendu.
2. **Outils** — choisir une technologie et préparer l’environnement.
3. **Hello** — réaliser une première pratique courte et vérifiable.
4. **Quick Start** — appliquer les acquis à un petit cas complet.

---

<!-- _class: light -->
## Concepts et outils

- **Ordre de conception :** Définition → Outils → Hello → Quick Start.
- **Règle de portée :** un lab, une cible technique principale.
- **Outils possibles :** éditeur Markdown et extension Marp dans VS Code pour rédiger et prévisualiser les supports.

| Objectif d’apprentissage | Cible possible |
|:---|:---|
| Persister des articles | MySQL |
| Construire une page serveur | PHP natif ou Laravel |
| Ajouter une interaction | Alpine.js |
| Styliser une interface | Tailwind CSS ou Preline UI |
| Explorer le mobile | Kotlin |

---

## Architecture pédagogique proposée

Exemple d’organisation pour un **lab complet** ; cette présentation reste le livrable Marp unique de cet exercice.

```text
labs/lab-sujet-nom/
├── README.md              # Index et objectif
├── 1-introduction.md      # Contexte et prérequis
├── 2-definition.md        # Problème et solution attendue
├── 3-practical.md         # Exercices guidés
├── 4-presentation.md     # Slides du lab
└── PROMPT-CONTENU.md      # Consignes de production
```

Nommer le dossier en minuscules avec des tirets, puis l’ajouter à l’index des labs si le projet en possède un.

---

<!-- _class: light -->
## Première pratique — cadrage express

**Besoin de blog :** un auteur veut enregistrer et retrouver ses articles.

Compléter le cadrage avant d’écrire le lab :

| Question | Exemple de cadrage |
|:---|:---|
| Problème | Les articles doivent être conservés entre deux visites. |
| Solution / travail | Créer une table, enregistrer un article, relire les articles. |
| Technologie ciblée | MySQL, sans ajouter le framework dans cet exercice. |
| Validation | Une requête retrouve le titre enregistré. |

---

## Quick Start — planifier le lab

**Titre :** Enregistrer un article de blog avec MySQL

1. **Définition :** un article possède un titre et un contenu.
2. **Outils :** MySQL et un client SQL disponibles dans l’environnement d’apprentissage.
3. **Hello :** créer la table `articles` et insérer un article.
4. **Quick Start :** lire l’article et vérifier son titre.

**Hors périmètre :** authentification, interface web et intégration Laravel.

---

<!-- _class: light -->
## Quick Start — première validation MySQL

À exécuter dans une base MySQL de test. Ce script crée une table dédiée puis vérifie l’article inséré.

```sql
CREATE TABLE articles_lab (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    content TEXT NOT NULL
);

INSERT INTO articles_lab (title, content)
VALUES ('Premier article', 'Contenu de démonstration');

SELECT title
FROM articles_lab
WHERE title = 'Premier article';
```

Résultat attendu : une ligne avec le titre `Premier article`. Le script est proposé comme exercice ; il n’a pas été exécuté ici.

---

## Vérifier que le lab est prêt

- Le problème et le résultat attendu sont compréhensibles sans deviner.
- Les étapes indiquent quoi faire et comment valider chaque étape.
- La technologie est choisie selon l’objectif ; le hors-périmètre évite d’élargir le lab.

**Règle d’or :** un parcours guidé relie définition, outils, première pratique et Quick Start.

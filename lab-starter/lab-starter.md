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

<!-- Note: Bonjour à tous, je vous présente le Lab Starter sur la préparation de l'environnement de développement Web. -->

![height:75px](../lab-planing/images/ofppt-logo.png) ![height:65px](../lab-planing/images/solicode-logo.png)

# Lab-Starter 
## Préparer l'environnement de développement

**Présenté par** : Tasnime Sahli • **Encadré par** : ES-Sarraj Fouad

Établissement : **Centre SoliCode Tanger • OFPPT**

---

<!-- header: "Lab-Starter 2 | Slide 1 — Plan" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note: Ce plan montre les cinq grandes étapes que nous allons suivre pendant ce lab. -->

<style scoped>
h1 { font-size: 26px; margin-bottom: 14px; }
ol { margin-top: 10px !important; }
li { font-size: 17px !important; margin-bottom: 8px !important; line-height: 1.4 !important; }
strong { color: #0f2c59; }
</style>

# 1. Planification

1. Introduction — c'est quoi un environnement de développement ?
2. Problématique — les difficultés rencontrées sur Windows
3. Configuration de Windows — afficher les extensions et les fichiers cachés
4. Configuration de VS Code — installer les extensions utiles
5. Vérification et conclusion

---

<!-- header: "Lab-Starter 2 | Slide 2 — Introduction" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note: Un environnement de développement est l'ensemble des outils installés sur l'ordinateur pour écrire et tester du code. -->

<style scoped>
h1 { font-size: 26px; margin-bottom: 14px; }
li { font-size: 16.5px !important; margin-bottom: 7px !important; line-height: 1.4 !important; }
strong { color: #0f2c59; }
p { font-size: 16px; margin: 8px 0; }
</style>

# 2. Introduction

Pour créer un site web, le développeur a besoin d'un **environnement de travail** prêt et bien configuré.

**Ce que nous utilisons dans ce projet :**

- **VS Code** — pour écrire le code HTML, CSS, PHP et JavaScript
- **Git** — pour sauvegarder et versionner le travail
- **Node.js** — pour exécuter des scripts JavaScript côté serveur
- **PHP** — pour créer des pages dynamiques

Un environnement mal configuré peut ralentir le travail et créer des erreurs difficiles à identifier.

---

<!-- header: "Lab-Starter 2 | Slide 3 — Problématique" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note: Sur Windows, trois problèmes bloquent le travail au départ et doivent être résolus avant de commencer. -->

<style scoped>
h1 { font-size: 26px; margin-bottom: 14px; }
li { font-size: 16px !important; margin-bottom: 8px !important; line-height: 1.4 !important; }
li > ul > li { font-size: 14.5px !important; margin-bottom: 4px !important; }
strong { color: #0f2c59; }
</style>

# 3. Problématique

Trois obstacles empêchent de travailler correctement dès le départ :

- **Extensions masquées** : Windows cache la fin des noms de fichiers (`.html`, `.css`, `.js`)
  - Conséquence : on ne sait pas quel type de fichier on ouvre
- **Dossier `.git` invisible** : Git crée un dossier caché pour suivre les modifications
  - Conséquence : impossible de voir si Git fonctionne dans le projet
- **Extension manquante dans VS Code** : les commentaires `TODO` ne sont pas mis en valeur
  - Conséquence : on perd du temps à chercher les tâches non terminées dans le code

---

<!-- header: "Lab-Starter 2 | Slide 4 — Configuration de Windows" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note: Nous configurons Windows pour afficher les extensions de fichiers et les dossiers cachés comme point git. -->

<style scoped>
h1 { font-size: 24px; margin-bottom: 10px; }
h2 { font-size: 17px; color: #0f2c59; margin-top: 10px; margin-bottom: 6px; }
li { font-size: 15px !important; margin-bottom: 4px !important; line-height: 1.35 !important; }
strong { color: #0f2c59; }
p { font-size: 15px; margin: 5px 0; }
</style>

# 4. Configuration de Windows

## ① Rendre les extensions de fichiers visibles

**Chemin :** Explorateur de fichiers → onglet **Affichage** → **Afficher** → cocher **Extensions de noms de fichiers**

**Résultat :** `index` devient `index.html` — le type de fichier est maintenant visible.

## ② Rendre les fichiers cachés visibles

**Chemin :** Explorateur de fichiers → onglet **Affichage** → **Afficher** → cocher **Éléments masqués**

**Résultat :** le dossier `.git` apparaît après la commande `git init` dans un projet.

---

<!-- header: "Lab-Starter 2 | Slide 5 — Fichiers cachés de Git" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note: Le dossier point git est créé par Git pour stocker l'historique du projet et ne doit jamais être modifié manuellement. -->

<style scoped>
h1 { font-size: 24px; margin-bottom: 12px; }
li { font-size: 15.5px !important; margin-bottom: 6px !important; line-height: 1.4 !important; }
li > ul > li { font-size: 14px !important; margin-bottom: 3px !important; }
strong { color: #0f2c59; }
p { font-size: 15.5px; margin: 6px 0; }
code { background: #e2e8f0; padding: 1px 5px; border-radius: 3px; }
</style>

# 5. Afficher les fichiers cachés de Git

**Rôle du dossier `.git` :**

- Git stocke tout l'historique des modifications dans le dossier `.git`
- Ce dossier est créé automatiquement avec la commande `git init`
- Sans lui, Git ne peut pas fonctionner dans le projet

**Comment le voir dans l'Explorateur de fichiers :**

1. Ouvrir l'Explorateur de fichiers
2. Aller dans **Affichage → Afficher**
3. Activer **Éléments masqués**
4. Ouvrir le dossier du projet → `.git` est maintenant visible

> ⚠️ Ne jamais supprimer ni modifier les fichiers à l'intérieur de `.git`.

---

<!-- header: "Lab-Starter 2 | Slide 6 — Extensions VS Code" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note: Deux extensions de VS Code améliorent le travail quotidien et doivent être installées dès le début du projet. -->

<style scoped>
h1 { font-size: 24px; margin-bottom: 12px; }
h2 { font-size: 16.5px; color: #0f2c59; margin-top: 10px; margin-bottom: 5px; }
li { font-size: 15px !important; margin-bottom: 5px !important; line-height: 1.35 !important; }
strong { color: #0f2c59; }
p { font-size: 15px; margin: 4px 0; }
code { background: #e2e8f0; padding: 1px 5px; border-radius: 3px; }
</style>

# 6. Configuration des extensions de VS Code

## 🌐 Live Server
- Ouvre une page HTML directement dans le navigateur
- Se met à jour automatiquement à chaque sauvegarde du fichier
- Utilisé pour tester les pages web sans serveur externe

## ✅ TODO Highlight
- Colorie en jaune les commentaires `TODO` dans le code
- Colorie en rouge les commentaires `FIXME`
- Aide à repérer rapidement les tâches non terminées

**Installation :** VS Code → onglet **Extensions** → rechercher le nom → cliquer **Installer**

---

<!-- header: "Lab-Starter 2 | Slide 7 — Conclusion" -->
<!-- footer: "SoliCode & OFPPT | Projet Technique" -->

<!-- Note: Nous avons configuré Windows et VS Code pour démarrer le développement Web dans de bonnes conditions. -->

<style scoped>
h1 { font-size: 26px; margin-bottom: 14px; }
li { font-size: 16px !important; margin-bottom: 7px !important; line-height: 1.4 !important; }
strong { color: #0f2c59; }
p { font-size: 16px; margin: 8px 0; }
table { font-size: 14px; margin-top: 10px; }
th { background: #0f2c59; color: white; padding: 6px 12px; }
td { padding: 5px 12px; }
</style>

# 7. Conclusion

**Ce que nous avons appris :**

- Afficher les **extensions de fichiers** pour identifier chaque fichier facilement
- Rendre visible le dossier **`.git`** pour confirmer que Git est actif dans le projet
- Installer **Live Server** pour tester les pages HTML en temps réel
- Installer **TODO Highlight** pour repérer les tâches à finir dans le code

**Un environnement configuré dès le départ = moins d'erreurs, plus de productivité.**


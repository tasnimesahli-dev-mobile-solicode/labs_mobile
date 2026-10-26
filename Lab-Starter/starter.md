---
marp: true
theme: default
paginate: true
---

# Lab-Starter 2
## Préparer l’environnement de développement

**Objectif :** Installer, configurer et vérifier l’environnement de développement Web sous Windows.

 
## SOLICODE
 ENCADRÉ PAR : Mr. Fouad Essarraj

 PRESENTE PAR : OUMAIMA MAHFOUD

---

# 1. Planification

- Introduction
- Problématique
- Configuration de l’environnement
- Résolution des problèmes rencontrés
- Vérification et conclusion

---

# 2. Introduction

Un environnement de développement regroupe les logiciels et les outils nécessaires pour créer, tester et gérer des applications.

Pour le développement Web, nous utilisons notamment Visual Studio Code, Git, Node.js et PHP.

---

# 3. Problématique

Lors de la préparation de l’environnement, plusieurs difficultés ont été rencontrées :

- Les extensions des fichiers étaient masquées dans Windows, ce qui compliquait l'identification des types de fichiers.
- Les fichiers et dossiers cachés de Git, notamment `.git`, n’étaient pas visibles.
- L’extension Todo  devait être ajoutée pour faciliter le repérage des commentaires `TODO` et `FIXME`.


---




# 4. Configuration de Windows

## Afficher les extensions des fichiers

**Problème :** Windows masquait les extensions, ce qui rendait difficile la distinction entre les fichiers `.html`, `.css`, `.js` et `.php`.

**Solution :**

1. Ouvrir l’Explorateur de fichiers.
2. Cliquer sur **Affichage**.
3. Ouvrir **Afficher**.
4. Activer **Extensions de noms de fichiers**.

Cette configuration permet d’identifier facilement le type de chaque fichier.

---

# 5. Afficher les fichiers cachés de Git

**Problème :** Le dossier `.git` était invisible dans l’Explorateur de fichiers.

**Explication :** Git utilise le dossier caché `.git` pour stocker les informations nécessaires au suivi des versions.

**Solution :**

1. Ouvrir l’Explorateur de fichiers.
2. Aller dans **Affichage → Afficher**.
3. Activer **Éléments masqués**.

**Vérification :**

Après l’exécution de `git init` dans un projet, le dossier `.git` est créé automatiquement.

*Attention : ne pas supprimer ni modifier manuellement le contenu de ce dossier.*

---

# 6. Configuration des extensions de VS Code

Les extensions permettent d’ajouter des fonctionnalités à Visual Studio Code.

**Extensions utilisées :**

- **Live Server** : lancement local des pages HTML.
- **TODO Highlight** : repérage des commentaires `TODO` et `FIXME`.


**Installation :**

1. Ouvrir VS Code.
2. Cliquer sur l’onglet Extensions.
3. Rechercher le nom de l’extension.
4. Cliquer sur Installer.



---

# 7 Conclusion


**Un environnement bien configuré constitue une base essentielle pour développer, organiser et versionner des projets Web efficacement.**
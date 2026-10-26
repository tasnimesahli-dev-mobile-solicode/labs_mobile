---
marp: true
theme: default
paginate: true
size: 16:9

---

<!-- _class: title -->

# Découvrir la syntaxe Markdown

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## Introduction

### Objectif et portée du Lab

- **Découvrir la syntaxe Markdown** pour structurer et mettre en forme efficacement un document.
- **Éléments abordés et pratiqués** :
  - Hiérarchie des titres (`#` à `######`) et gestion des paragraphes
  - Styles de texte (**gras**, *italique*, ~~barré~~, citations `>`)
  - Listes non ordonnées (à puces), ordonnées (numérotées) et tâches (`- [x]`)
  - Liens hypertextes (`[texte](url)`) et intégration d'images (`![alt](url)`)
  - Tableaux structurés avec alignements (`:---`, `:---:`, `---:`)
  - Blocs de code avec coloration syntaxique (`html`, `javascript`, `php`)

---

## Problems Encountered

### Obstacles rencontrés lors de la mise en forme

- **Retours à la ligne ignorés** : Un retour à la ligne simple dans l'éditeur ne crée pas de nouveau paragraphe sans ligne vide ou double espace.
- **Rupture d'affichage des tableaux** : Tableaux non interprétés en cas d'oubli de la ligne séparatrice obligatoire de tirets (`| --- |`).
- **Coloration syntaxique absente** : Blocs de code affichés en texte brut sans le nom du langage spécifié après les triples backticks.
- **Problèmes de liens et images** : Liens cassés ou images non affichées causés par des erreurs dans la syntaxe ou des chemins relatifs erronés.

---

<!-- _class: light -->

## Solutions Implemented

### 01 — Gestion des paragraphes & sauts de ligne
Séparer les paragraphes par une ligne vide ou terminer une ligne par deux espaces pour forcer un saut `<br>`.

### 02 — Structuration des tableaux & alignements
Insérer la ligne de séparation avec les deux-points pour définir l'alignement (`:---` à gauche, `:---:` centré, `---:` à droite).

### 03 — Blocs de code typés
Délimiter le code par trois backticks en déclarant le langage cible (ex: ```` ```javascript ```` ou ```` ```php ````).

### 04 — Normalisation des liens et images
Appliquer la syntaxe stricte `[Intitulé](URL)` pour les liens et `![Description](URL)` pour les images avec texte alternatif.

---

## Exemples Pratiques : Titres & Formatage

```markdown
# Titre Principal (H1)
## Sous-titre (H2)
### Section détaillée (H3)

Texte normal avec du **texte en gras**, du *texte en italique*,
du ~~texte barré~~ ou du ***gras et italique***.

> Une citation en bloc pour mettre en avant une remarque clé.
```

- `#` définit les niveaux de hiérarchie.
- `**` applique le gras, `*` applique l'italique.
- `>` crée un bloc de citation.

---

<!-- _class: light -->

## Exemples Pratiques : Listes & Liens

```markdown
### Liste à puces :
- Frontend : HTML, CSS, JavaScript
- Backend : PHP, Laravel
- Outils : Git, GitHub

### Liste numérotée :
1. Découvrir la syntaxe Markdown
2. Réaliser les exemples pratiques
3. Publier sur GitHub

Lien vers la documentation : [Guide Markdown](https://www.markdownguide.org)
```

---

## Exemples Pratiques : Tableaux & Images

```markdown
![Logo Markdown](https://upload.wikimedia.org/wikipedia/commons/4/48/Markdown-mark.svg)
```

| Élément | Syntaxe Markdown | Rendu |
| :--- | :---: | ---: |
| Titre | `# Titre` | Titre H1 |
| Gras | `**mot**` | **mot** |
| Italique | `*mot*` | *mot* |
| Code en ligne | `` `git commit` `` | Code inline |
| Lien | `[nom](url)` | Lien cliquable |

---

<!-- _class: light -->

## Exemples Pratiques : Blocs de Code

```javascript
// Coloration syntaxique JavaScript
function validerLab(titre) {
  console.log(`Validation du lab : ${titre}`);
  return true;
}
validerLab("Syntaxe Markdown");
```

```php
<?php
// Coloration syntaxique PHP
$competences = ["Titres", "Listes", "Liens", "Images", "Tableaux", "Code"];
foreach ($competences as $competence) {
    echo "Compétence validée : " . $competence . "\n";
}
?>
```
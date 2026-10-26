---
marp: true
theme: default
paginate: true
size: 16:9

---

# Prompt 

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problèmes 
3. Solutions 

---

## 1. Introduction

### Objectif du lab

Apprendre à rédiger un prompt clair et précis pour demander à une intelligence artificielle de réaliser une tâche.

### Concepts clés

- Prompt 
- Contexte et objectif
- Consignes et contraintes
- Résultat attendu
- Test et amélioration du prompt



---

## 2. Problems Encountered

### Difficultés possibles

- **Prompt trop vague :** l'IA ne comprend pas précisément le besoin.
- **Contexte insuffisant :** la réponse ne correspond pas au niveau de l'utilisateur.
- **Consignes incomplètes :** certaines fonctionnalités demandées sont oubliées.
- **Résultat imprécis :** le format de la réponse n'est pas adapté.
- **Première réponse imparfaite :** le résultat nécessite des corrections.

---

## 3. Solutions Implemented

### Structure d'un prompt efficace

| Élément | Rôle |
|:---|:---|
| Contexte | Présenter la situation |
| Objectif | Définir le résultat à atteindre |
| Consignes | Préciser les règles et contraintes |
| Résultat attendu | Définir le format de la réponse |

### Bonne pratique

Tester le prompt, analyser la réponse et préciser les instructions si nécessaire.

---

<!-- _class: light -->

## 4. Exemple pratique : Prompt initial

### Demande imprécise

```text
Crée une application web.
```

### Problèmes identifiés

- Le type d'application n'est pas défini.
- Les technologies ne sont pas précisées.
- Les fonctionnalités sont inconnues.
- Le format de la réponse n'est pas spécifié.

**Résultat :** la réponse peut être trop générale ou inadaptée au besoin.

---

## 5. Amélioration du prompt

### Exemple : Application To-Do List

```text
Contexte :
Je suis débutante en développement web.

Objectif :
Créer une application To-Do List.

Consignes :
- Utiliser HTML, CSS et JavaScript natif.
- Ajouter et supprimer des tâches.
- Utiliser un code simple et lisible.
- Ne pas utiliser de framework.

Résultat attendu :
Fournir les trois fichiers séparément
et expliquer comment tester l'application.
```

---

## 6. Test avec un agent IA

### Étapes de réalisation

1. Envoyer le prompt à ChatGPT.
2. Analyser la réponse générée.
3. Vérifier les fonctionnalités demandées.
4. Identifier les éléments manquants.
5. Modifier le prompt et tester à nouveau.

### Critères d'évaluation

- Précision
- Respect des consignes
- Qualité du résultat

---

## 7. Itération du prompt

### Prompt amélioré

```text
Améliore la solution précédente.

Vérifie que :
- L'ajout et la suppression fonctionnent.
- Les champs sont correctement validés.
- Un message apparaît si la liste est vide.
- L'interface est responsive.

Conserve HTML, CSS et JavaScript natif.
Explique les modifications effectuées.
```

**Itération :** tester → analyser → corriger → tester à nouveau.

---



## 8. Comparaison des résultats

| Critère | Prompt initial | Prompt amélioré |
|:---|:---|:---|
| Contexte | Absent | Précisé |
| Objectif | Vague | Défini |
| Contraintes | Absentes | Explicites |
| Résultat attendu | Non défini | Fichiers et explications |
| Précision | Faible | Plus élevée |

*La qualité finale dépend aussi de la vérification et des tests du résultat généré.*

---

## 9. Bonnes pratiques

- Utiliser des phrases claires et directes.
- Donner uniquement le contexte utile.
- Décomposer les tâches complexes.
- Préciser les technologies et les contraintes.
- Définir le format de sortie souhaité.
- Vérifier les réponses de l'IA avant de les utiliser.
- Ne jamais considérer une réponse générée comme automatiquement correcte.

---



## Conclusion

Le Prompt Engineering permet de mieux communiquer avec une intelligence artificielle.

Un prompt efficace précise le contexte, l'objectif, les consignes et le résultat attendu.

**À retenir :** un bon prompt se construit, se teste et s'améliore progressivement.

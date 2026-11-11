---
name: software-engineering
description: Runbook général de génie logiciel : planification d'architecture, conception, écriture de code, refactoring, débogage, revue et tests, quel que soit le langage. À utiliser pour développer, corriger, refactorer ou tester du code.
---

# Software Engineering

## Principes
1. Agnostique de la techno : modularité, lisibilité, séparation des responsabilités, pas de duplication inutile.
2. Changements minimaux et ciblés : préserver style, indentation et commentaires existants.
3. Code défensif : valider les entrées, gérer les erreurs, éviter les valeurs codées en dur.
4. Aucun secret dans le code source (clés, mots de passe, tokens).

## Workflow
1. **Plan** : inspecter code, configuration et structure avant de proposer ; identifier cibles d'exécution, dépendances, compatibilité ; découper en jalons testables.
2. **Proposer** : résumer le plan et les fichiers touchés ; signaler tout changement cassant (API, schéma, signatures) ; demander l'accord avant de modifier du code critique, supprimer des fichiers ou lancer des commandes lourdes.
3. **Exécuter** : code auto-documenté, noms clairs, conventions idiomatiques du langage et du projet, documentation existante préservée.
4. **Vérifier** : linter/compilateur adapté (`php -l`, `python -m py_compile`, `tsc --noEmit`, `eslint`…), tests existants ou ciblés, exécution sans avertissement ni exception non gérée. Ne pas annoncer un test non exécuté.

## Débogage
Reproduire (entrée, trace), isoler cause racine vs symptôme, formuler une hypothèse avant de modifier, corriger au plus petit diff, vérifier l'absence de régression.

## Livrable
Résumé des fichiers modifiés, commandes de vérification lancées et leur résultat, limites restantes.
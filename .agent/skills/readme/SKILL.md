---
name: readme
description: "Crée, structure ou adapte le README.md d'un lab technique autour du besoin du projet, des notions à apprendre et de la réalisation attendue. À utiliser pour rédiger ou améliorer le brief README d'un lab."
---

# README de lab technique

## Rôle
Rédiger un README qui explique le besoin d'un lab technique et décrit clairement le travail attendu d'un étudiant ou d'une IA. S'appuyer sur le README de `lab-php/pratique` comme exemple de contenu, sans recopier ses détails propres à PHP.

## Quand l'utiliser / ne pas l'utiliser
- Utiliser cette skill pour créer, structurer ou adapter le README d'un lab technique.
- Ne pas l'utiliser pour rédiger la présentation Marp du lab ; utiliser `lab-creator` pour cette tâche.
- Quand `lab-creator` utilise un README existant, le traiter comme une source de contexte et ne pas le modifier sauf demande explicite.

## Entrées et contexte requis
- Repérer le dossier du lab, son README et les fichiers de projet pertinents.
- Lire les exemples, scripts et configurations utiles afin de décrire des notions et commandes vérifiables.
- Identifier le problème réel, l'objectif pédagogique, le niveau et les contraintes techniques à partir des informations fournies.
- Ne pas présenter une hypothèse comme un fait. Si le besoin ou la réalisation centrale manque, poser une question ciblée ou marquer l'information `[À compléter]`.

## Workflow
1. **Inspecter** : lire le README existant et les fichiers pertinents du lab ; relever les commandes, versions et exemples réellement disponibles.
2. **Structurer** : organiser le contenu sous les trois titres principaux définis ci-dessous, dans cet ordre.
3. **Rédiger** : expliquer le besoin, l'apprentissage visé et le livrable pratique en termes concrets et adaptés au public.
4. **Préserver** : conserver les informations exactes et utiles déjà présentes ; ne pas écraser du contenu sans l'avoir inspecté.
5. **Vérifier** : contrôler la structure, les liens, les noms de fichiers, les versions et les commandes à partir du projet réel.

## Structure obligatoire

### 1. Besoin du projet technique
- Expliquer le problème que le lab aide à résoudre.
- Dire pourquoi l'apprentissage est utile.
- Décrire ce que le lab apporte au projet technique réel, sans inventer un projet ni ses difficultés.
- Si le lab est autonome et qu'aucun projet métier n'est fourni, le préciser.

### 2. Notions et techniques à apprendre
- Lister les notions de base, concepts et techniques visés.
- Relier chaque notion à son usage concret dans le lab.
- Inclure les outils d'exécution uniquement s'ils sont utiles au travail demandé.

### 3. Réalisation attendue
- Décrire la forme du livrable : fichiers, organisation, caractère exécutable ou intégration attendue.
- Décrire le contenu attendu avec des cas concrets confirmés par le projet.
- Indiquer les versions, dépendances, prérequis et commandes vérifiés lorsqu'ils sont nécessaires.
- Ajouter, si utile, des critères de résultat observable ou des pistes d'exercice dans cette section, sans créer de quatrième partie principale.

## Règles
- Garder exactement les trois titres principaux ci-dessus, dans le même ordre. Les détails complémentaires peuvent être des sous-titres ou des listes sous ces sections.
- Écrire simplement, avec des consignes précises et des termes adaptés au niveau du public.
- Ne pas inventer de problème, fonctionnalité, fichier, dépendance, version ou résultat attendu.
- L'IA peut proposer des améliorations pertinentes. Les signaler comme facultatives, expliquer leur intérêt et les distinguer de la demande principale.
- Ne pas ajouter de dépendance ni élargir le sujet sans nécessité.
- Conserver ou ajouter les commandes uniquement après avoir vérifié qu'elles correspondent au système et à l'arborescence du lab.
- Limiter les modifications au README demandé et aux éléments strictement nécessaires.

## Format du livrable
- Un fichier `README.md` dans le dossier du lab, sauf chemin demandé autrement.
- Les trois parties doivent être immédiatement repérables avec des titres Markdown numérotés.
- Les commandes doivent être dans des blocs de code avec le langage approprié.
- Les chemins et noms de fichiers doivent être des liens relatifs valides lorsqu'ils pointent vers d'autres fichiers.

## Vérification
- [ ] Les trois titres principaux sont présents, dans l'ordre et sans partie principale supplémentaire.
- [ ] Le problème, l'utilité du lab et sa contribution sont expliqués sans faits inventés.
- [ ] Les notions annoncées correspondent au code ou au contenu du lab.
- [ ] La réalisation attendue est concrète et les améliorations de l'IA sont identifiées comme facultatives.
- [ ] Les chemins, commandes, versions et dépendances sont vérifiés ou marqués comme à confirmer.
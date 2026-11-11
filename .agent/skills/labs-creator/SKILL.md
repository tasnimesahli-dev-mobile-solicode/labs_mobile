---
name: lab-creator
description: "Crée ou adapte les livrables d'un lab (presentation.md Marp en français A1) à partir de son README et du plan générique. À utiliser quand l'utilisateur demande de créer, structurer ou adapter un lab dans labs/."
---

# Création de lab

Cette skill orchestre la préparation du livrable d'un lab : un seul fichier `labs/<lab-slug>/presentation.md`.
Pour la mise en forme Marp, appliquer aussi la skill `marp`. Pour créer ou modifier une skill, appliquer `skill-creator`.
Pour créer, structurer ou adapter le README du lab, utiliser la skill `readme` (`.agent/skills/readme/SKILL.md`). Ici, le README est une source de contexte ; ne pas le modifier pendant la création de la présentation, sauf demande explicite.
Les règles globales (sécurité, approbations, secrets, niveau A1, structure des présentations) restent celles de `.agents/rules/`.

## Quand l'utiliser / ne pas l'utiliser

- Utiliser : création ou adaptation d'un lab, de son plan de présentation ou de sa présentation.
- Ne pas utiliser : veille technologique (skill `veille-technologique`), création de skill (`skill-creator`).

## Entrées nécessaires

- Le nom du lab. Conserver à l'identique le slug existant au format `lab-*`. Ne jamais le reformuler.
- Le README du lab, idéalement structuré selon la skill `readme`.
- Le plan générique. Si `template-plan.md` est absent, chercher le plan générique du workspace et l'utiliser sans prétendre qu'il porte ce nom.
- Le **problème réel** et la **solution** de l'étudiant (voir règle d'exactitude).

## Règles

- Rédiger en français A1 : phrases courtes (Sujet + Verbe + Complément), mots simples, une idée par phrase.
- Adapter les sections génériques aux objectifs et notions réellement présents dans le README.
- Le plan de présentation vit uniquement dans `presentation.md`. Ne pas le dupliquer dans le README.
- Un seul fichier généré par défaut : `presentation.md`. Pas de README, de sous-dossier ni de fichier annexe sans demande.
- Dossier : `labs/<lab-slug>/`. S'il existe déjà, ne rien écraser : inspecter et demander comment continuer. Si `labs/` n'existe pas, demander confirmation avant de le créer.
- Pour un lab technique : prévoir un Quick Start et un Hello World exécutable. Vérifier que commandes et versions correspondent au projet.
- **Ne jamais inventer le problème ni la solution.** Avant de rédiger ces sections, demander :
  « Quel problème concret rencontrez-vous ? » et « Quelle solution proposez-vous ? ».
  Sans réponse, laisser `[À compléter par l'étudiant]` et ne pas le présenter comme un fait.
- Ne pas ajouter de diapositive de conclusion ni de remerciements. Terminer par la solution ou le livrable.
- TP et grille d'évaluation : à ajouter seulement si l'utilisateur les demande, comme diapositives pratiques dans la partie Solution.
- Ne pas exécuter de commande Git si l'utilisateur l'interdit.

## Plan (4 titres, maximum 5)

1. Introduction & Stack Technique
2. Définitions
3. Problème
4. Solution

## Workflow

1. **Plan** : lire README et plan générique, vérifier le dossier cible, repérer les infos manquantes.
2. **Questions** : demander problème et solution si absents.
3. **Brouillon** : afficher la présentation complète dans la conversation, avec le chemin cible.
4. **Approbation** : attendre un accord explicite avant d'écrire sur le disque.
5. **Écriture** : créer `labs/<lab-slug>/presentation.md` uniquement.
6. **Vérification** : relire le fichier, contrôler le rendu Marp et la checklist ci-dessous. Ne pas annoncer une vérification non faite.

## Checklist de vérification

- [ ] Slug `lab-*` inchangé, dossier `labs/<lab-slug>/`, rien d'écrasé.
- [ ] Un seul fichier : `presentation.md`.
- [ ] Frontmatter Marp valide, diapositives séparées par `---`.
- [ ] Page de garde : logos OFPPT et SoliCode en haut (chemins relatifs `images/...`), titre, `- **Présenté par** : Tasnime Sahli`, `- **Encadré par** : ES-SARRAJ FOUAD`. Logo absent : le signaler et demander le fichier, ne jamais l'inventer.
- [ ] Plan : 5 titres maximum, numéros uniques (jamais deux slides `## 3. ...`).
- [ ] Zéro texte superflu : mots-clés, puces courtes (3 à 5), code, tableaux, schémas. Phrases complètes seulement dans l'introduction.
- [ ] Une note orale `<!-- Note: ... -->` par slide : une seule phrase courte en A1.
- [ ] Quick Start et Hello World testables (lab technique).
- [ ] Problème et solution fournis par l'étudiant, ou marqués à compléter.
- [ ] Aucune conclusion ni remerciements.
- [ ] Brouillon approuvé avant l'écriture.
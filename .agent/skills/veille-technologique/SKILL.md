---
name: veille-technologique
description: Crée des veilles technologiques courtes en français (présentation Marp de 5-6 slides + README simple) niveau 1A. À utiliser pour découvrir une technologie, un outil ou une nouveauté du développement web.
---

# Veille technologique

## Rôle
Produire une veille courte, claire, sourcée et adaptée au niveau 1A. Mise en forme Marp : skill `marp`.

## Quand l'utiliser
Demande de veille technologique ou de découverte d'une nouveauté technique. Si le sujet est trop vague, demander une précision (une seule question).

## Workflow
1. Identifier le sujet ; rechercher des informations fiables et récentes (sources officielles d'abord).
2. Ne garder que l'essentiel.
3. Créer `labs/veille-technologique/<sujet>/`.
4. Générer `presentation.md` (Marp) puis `README.md`.
5. Vérifier les deux fichiers.

## Présentation Marp
- `marp: true` dans le frontmatter ; 5 à 6 slides maximum ; français simple.
- Plan imposé : Plan, Introduction, Problématique, Pratique, Conclusion.
- **Page de garde** : logo OFPPT et logo SoliCode en haut (`<div class="logo-bar">`, hauteur ~85-110 px, chemins relatifs vers les images du projet) ; titre du sujet ; « Présenté par : Tasnime Sahli » ; « Encadré par : ES-SARRAJ FOUAD ». Ne jamais inventer, remplacer ou supprimer les logos officiels ; s'ils sont absents, le signaler et demander les fichiers.
- **Note orale sur chaque slide** : `<!-- Note: ... -->`, une seule phrase courte en français A1.
- Phrases courtes, listes, exemples concrets ; source fiable pour toute information récente.
- Design adapté au sujet mais professionnel ; pas de slides ni d'explications inutiles.

## README.md
Uniquement : définition du sujet, points essentiels, exemple pratique, sources utiles. Court, en français simple.

## Règles
- Ne pas inventer nouveautés ni sources.
- Ne pas modifier d'autres fichiers ni en créer d'autres sans demande.
- Après création : lister uniquement les fichiers créés et les problèmes détectés.

## Vérification
Plan respecté, français simple, informations essentielles présentes, logos et mentions de la page de garde corrects, syntaxe et rendu Marp OK, sources cohérentes, une note par slide.
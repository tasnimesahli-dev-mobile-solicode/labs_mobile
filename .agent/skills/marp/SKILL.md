---
name: marp
description: Rédige, structure ou corrige des présentations Marp en Markdown (frontmatter valide, diapositives lisibles, thème clair/sombre, blocs de code). À utiliser pour tout fichier de présentation Marp, notamment les labs et les veilles technologiques. Ne pas utiliser pour des fichiers .pptx.
---

# Présentations Marp

## Rôle
Produire des diapositives Marp lisibles, exactes et adaptées au public. Cette skill est la base commune ; `lab-creator` et `veille-technologique` fixent le plan et les règles propres à leur type de présentation (ils priment en cas de conflit, par exemple sur la conclusion).

## Structure technique
- Frontmatter YAML valide : `marp: true`, `theme`, `paginate: true`, format 16:9.
- Une diapositive = un bloc séparé par `---`.
- Diapositive claire : `<!-- _class: light -->` (alterner sombre/claire si le thème le permet).
- Logos/images : chemins relatifs vérifiés ; ne jamais inventer un fichier absent, le signaler et demander le fichier.

## Contenu
- Français (sauf demande contraire), phrases courtes, termes techniques expliqués ; ne pas présumer que le public les connaît.
- Peu de texte par diapositive : un message par diapositive, listes courtes, exemples concrets.
- Adapter la taille du texte à la projection : viser 28–36 px pour le texte courant, 36–48 px pour les titres et au moins 20 px pour le code et les légendes. Ajuster selon le thème et la densité, sans sacrifier la lisibilité.
- Si le contenu ne tient pas, raccourcir ou répartir sur plusieurs diapositives avant de réduire la police ; éviter le texte courant sous 24 px et le code sous 18 px.
- Ne rien inventer : faits, sources, problème ou solution de l'étudiant. Informations manquantes : demander, sinon laisser un emplacement explicite « À compléter ».
- Contenu technique : déclarer le langage de chaque bloc de code (`bash`, `php`, `html`…), vérifier que commandes et versions correspondent à l'environnement réel.
- Tableaux Markdown : colonnes alignées explicitement (`:---`, `:---:`, `---:`).
- Contraste suffisant, hiérarchie visuelle cohérente.

## Vérification
- [ ] Frontmatter valide et séparateurs `---` corrects
- [ ] Aucun débordement de texte probable ; diapositives équilibrées
- [ ] Blocs de code avec langage ; tableaux alignés
- [ ] Liens et images résolus
- [ ] Plan exigé par la skill appelante respecté
- [ ] Rendu Marp contrôlé si l'outil est disponible ; sinon le dire
# Règle : Structure des Présentations et Plans (Max 5 Titres)

Pour toute création ou mise à jour de présentation (notamment les supports **Marp** `presentation.md`), la structure du plan et des diapositives doit respecter les règles suivantes.

---

## 1. Plan de Présentation : Maximum 5 Titres

1. **Sommaire concis** :
   - Le plan initial (slide d'agenda / sommaire) doit comporter **au maximum 5 titres principaux** (numérotés de 1 à 5).
   - Regrouper les notions logiques afin de ne pas surcharger le plan pour le public (ex : *1. Introduction & Objectifs*, *2. Analyse & Conception*, etc.).

---

## 2. Numérotation Unique (Aucun Chiffre Répété)

1. **Unicité des numéros principaux** :
   - Ne jamais répéter le même numéro de chapitre sur plusieurs diapositives consécutives (ne pas faire plusieurs slides avec `## 2. ...` ou `## 4. ...`).
   - Seule la première slide d'un axe porte le numéro principal (ex: `## 2. Analyse : Les 3 Tables`).
   - Les slides suivantes du même axe utilisent un titre explicite sans répéter le chiffre (ex: `## Conception : Schéma Relationnel`).

---

## 3. Règle du « Zéro Texte Superflu » (Mots-clés & Concision)

1. **Zéro texte rédigé sur l'ensemble de la présentation** :
   - Interdiction formelle des blocs ou longs paragraphes de texte rédigés.
   - Ne pas écrire beaucoup de texte : privilégier strictement les **mots-clés**, les syntaxes de code, les tableaux synthétiques et les diagrammes.
   - Une diapositive doit se lire en un coup d'œil (maximum 3 à 5 puces très courtes).

2. **Exception pour la diapositive d'Introduction** :
   - L'introduction est la seule partie qui utilise des phrases complètes.
   - Ces phrases doivent être **exclusivement courtes, simples et directes** (structure canonique : Sujet + Verbe + Complément, niveau Français A1).
   - Aucun paragraphe narratif ou bloc continu n'est toléré dans l'introduction.

---

## 4. Règle Obligatoire pour la Page de Garde Marp

Pour chaque présentation Marp, la page de garde (première slide) doit obligatoirement respecter l'ensemble des règles suivantes :

1. **Logos Officiels OFPPT & SoliCode** :
   - Afficher obligatoirement le logo **OFPPT** et le logo **SoliCode**.
   - Placer les deux logos proprement en haut de la page de garde, avec des dimensions proportionnées (ex : conteneur `<div class="logo-bar">`, hauteur équilibrée ~85-110px).
   - Conserver les deux logos dans un dossier d’images du projet (ex : `images/`), si les fichiers existent déjà.
   - Utiliser les images locales avec des chemins relatifs corrects (ex : `images/logo-ofppt.png` et `images/logo-solicode.png`).
   - Ne pas supprimer, remplacer ou inventer les logos officiels.
   - Si un logo est absent, **signaler immédiatement son absence et demander le fichier nécessaire** avant de finaliser.

2. **Mentions Obligatoires** :
   - Toujours afficher le titre de la présentation.
   - Toujours mentionner obligatoirement :
     - `- **Présenté par** : Tasnime Sahli`
     - `- **Encadré par** : ES-SARRAJ FOUAD`

---

## 5. Commentaire de Présentation Oral (Note Speaker Obligatoire)

1. **Une seule phrase courte par diapositive** :
   - Sur **chaque slide**, inclure obligatoirement un commentaire de présentation / note pour l'orateur sous la syntaxe Marp : `<!-- Note: ... -->`.
   - Ce commentaire constitue le speech exact à prononcer à l'oral pour expliquer la slide.
   - Longueur et structure : **strictement une seule phrase courte**, simple et directe (niveau **Français A1**).
   - Ne pas afficher ce texte sous forme de bloc visible sur la diapositive : il doit rester uniquement dans le commentaire `<!-- Note: ... -->`.

---

## 6. Vérification du Rendu Marp

1. **Contrôle avant finalisation** :
   - Vérifier systématiquement le rendu Marp (syntaxe, séparateurs de slides `---`, chemins d'images relatifs, absence d'erreurs d'affichage) avant de terminer la tâche.

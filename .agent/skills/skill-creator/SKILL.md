---
name: skill-creator
description: Crée, structure, révise et valide des Agent Skills (standard agentskills.io, compatibles Google Antigravity) dans `.agents/skills/<nom>/`. À utiliser pour créer une skill, écrire un SKILL.md, empaqueter des instructions d'agent, fusionner des skills en doublon ou améliorer une skill existante. Ne pas utiliser pour exécuter le travail que la skill décrit.
---

# Skill Creator

## Rôle
Transformer un objectif, un workflow ou un savoir-faire répété en une skill claire, ciblée, réutilisable et maintenable.

## Quand l'utiliser / ne pas l'utiliser
- Utiliser : créer, relire, améliorer, fusionner ou valider une skill.
- Ne pas utiliser : réaliser la tâche couverte par une skill (utiliser la skill concernée).

## Principes
- Une skill = une capacité ou un workflow ciblé. Aucun doublon : si une skill existante recouvre le besoin, l'améliorer plutôt que d'en créer une autre.
- Instructions précises et actionnables, formulées à l'impératif. Pas de « suivre les bonnes pratiques » sans dire lesquelles.
- Ne rien inventer (conventions, API, commandes, versions). Inspecter le workspace et marquer toute hypothèse.
- Préserver l'existant : ne jamais écraser ni supprimer une skill sans l'avoir lue ; demander confirmation si le changement est destructif ou ambigu.
- Ne pas répéter les règles globales déjà dans `AGENTS.md` ou `.agents/rules/` (sécurité, approbations, secrets). Les skills ne portent que les règles de leur domaine.
- Langue : celle demandée par l'utilisateur ; sinon anglais, l'agent répondant dans la langue de l'utilisateur.
- Ne créer que `SKILL.md`, sauf si un fichier annexe améliore réellement la skill.

## Workflow

### 1. Comprendre
Identifier : problème résolu, déclencheurs, entrées/sorties, outils, contraintes, besoin de scripts/exemples/modèles. Poser une seule question de clarification, et seulement si elle change matériellement la skill ; sinon faire des hypothèses prudentes et les annoncer.

### 2. Inspecter le workspace
- Trouver la racine, vérifier l'existence de `.agents/skills/`.
- Chercher une skill de même nom ou de même objectif (recouvrement/conflit de déclencheurs).
- Lire `AGENTS.md`, la documentation et les conventions utiles.
- Emplacement par défaut : `.agents/skills/<nom>/`. Emplacement global (`~/.gemini/config/skills/<nom>/`) uniquement sur demande explicite.

### 3. Concevoir le frontmatter
```yaml
---
name: kebab-case-identique-au-dossier
description: Ce que fait la skill ET quand l'utiliser, avec mots-clés déclencheurs.
---
```
- `name` : 1–64 caractères, minuscules/chiffres/tirets, sans tiret en début/fin ni double tiret, identique au dossier.
- `description` : 1–1024 caractères, contient mots-clés et types de tâches.
- Pas de champs optionnels (ex. `allowed-tools`) sans raison claire.

### 4. Rédiger le corps
Sections pertinentes, dans cet ordre :
1. Rôle
2. Quand l'utiliser / ne pas l'utiliser
3. Entrées et contexte requis
4. Workflow adapté au domaine (Plan, Proposer, Exécuter, Vérifier, ou boucle itérative, arbre de décision, checklist d'audit)
5. Règles et contraintes
6. Format du livrable
7. Critères de vérification observables (checklist, rubrique, test)
8. Pièges courants et cas limites
9. Exemples de demandes (si utile)

Garder `SKILL.md` sous ~500 lignes ; déporter les longues références dans `references/`, les modèles dans `assets/`, les scripts dans `scripts/` (créer un dossier seulement s'il contient un fichier utile). Liens en chemins relatifs.

### 5. Scripts et ressources
- Utiliser le langage/outillage du projet ; documenter usage, dépendances, erreurs.
- Aucun comportement destructif par défaut.
- Ne jamais dire qu'un script a été exécuté s'il ne l'a pas été.
- Pas de contenu tiers copié sans licence adéquate.

### 6. Créer ou mettre à jour
Un dossier par skill (jamais `SKILL.md` directement dans `.agents/skills/`). En cas de mise à jour : changement ciblé, contenu utile conservé. Proposer le brouillon et attendre l'accord avant d'écrire si le changement est conséquent.

### 7. Valider
- [ ] Dossier au bon emplacement, `SKILL.md` commence par un frontmatter valide
- [ ] `name` = dossier, conforme aux contraintes
- [ ] `description` non vide, ≤ 1024 car., dit quand utiliser la skill
- [ ] Titres, blocs de code et liens relatifs bien formés ; fichiers référencés présents
- [ ] Déclencheurs et exclusions explicites, sans conflit avec d'autres skills
- [ ] Pas de doublon d'instructions ni de règles globales répétées
- [ ] Critères de vérification concrets pour le livrable

Si `skills-ref` est installé : `skills-ref validate .agents/skills/<nom>`. Sinon, vérifier manuellement et ne pas annoncer une validation non faite.

### 8. Rapport final
Nom et objectif, chemin exact, fichiers créés, validations faites/non faites, hypothèses, comment l'invoquer (sélection automatique via Customizations, ou `/<nom>` si le CLI le permet). Ne pas affirmer que la skill est active tant qu'elle n'est pas découverte ; suggérer de rouvrir le workspace sinon.

## Modèle de départ
Pour un nouveau squelette : frontmatter + sections 1 à 8 ci-dessus, puis supprimer les sections inutiles.

## Pièges courants
- Description trop vague (la skill ne se déclenche pas) ou trop large (conflits).
- Skill « fourre-tout » : scinder.
- Règles de sécurité recopiées depuis `AGENTS.md`.
- Workflow rigide imposé à un domaine qui n'en a pas besoin.
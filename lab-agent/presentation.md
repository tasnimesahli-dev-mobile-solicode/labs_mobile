---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    font-size: clamp(20px, 2.2vw, 28px);
    padding: 5%;
    overflow-wrap: anywhere;
  }
  h1 { font-size: clamp(34px, 4.3vw, 52px); }
  h2 { font-size: clamp(28px, 3.2vw, 40px); }
  pre { font-size: clamp(13px, 1.45vw, 18px); }
  section.light { background: #f5f7fb; color: #172033; }
  @media screen and (max-width: 700px) {
    section { padding: 4%; }
    pre { white-space: pre-wrap; }
  }
---

# Créer et tester des Skills avec des agents IA

---

<!-- _class: light -->
## Lab Plan
1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## Introduction

- **Agent :** définit un rôle et peut disposer d’outils.
- **Skill :** donne à l’agent des instructions réutilisables pour une tâche précise.
- **But :** créer un `SKILL.md`, puis vérifier que l’agent l’applique aux bonnes demandes.

---

<!-- _class: light -->
## Problèmes rencontrés

Exemples génériques à surveiller :

- Une description vague déclenche le Skill au mauvais moment.
- Des consignes floues donnent des réponses inégales.
- Un fichier valide ne prouve pas que l’agent suit les consignes.

---

## Solutions implémentées

1. Décrire précisément **quand** le Skill s’applique.
2. Donner un workflow court et des critères de qualité.
3. Tester une demande adaptée, une demande incomplète et une demande hors sujet.

---

<!-- _class: light -->
## Exemple minimal de `SKILL.md`

Créer le fichier sous Windows/PowerShell :

```powershell
New-Item -ItemType Directory -Force ".agents/skills/procedure" | Out-Null
New-Item -ItemType File -Force ".agents/skills/procedure/SKILL.md"
```

Y placer ces instructions :

```markdown
---
name: procedure
description: "À utiliser pour rédiger une procédure technique à partir des informations fournies."
---

# Rédiger une procédure

1. Résumer l'objectif et les prérequis.
2. Si une information essentielle manque, poser une question.
3. Présenter des étapes ordonnées et vérifiables.
4. Ne pas inventer de commandes ou de résultats.

## Vérification
- L'objectif et les prérequis sont indiqués.
- Chaque étape peut être vérifiée.
```

---

## Tester le Skill dans l’agent cible

Lancer chaque demande, puis comparer la réponse à l’attendu. Ces cas sont à essayer ; aucun résultat n’est présumé.

| Cas | Demande à essayer | Attendu |
|:---|:---|:---|
| Adapté | « Rédige une procédure avec ces notes… » | Étapes ordonnées et vérifiables. |
| Incomplet | « Explique comment restaurer le système. » | L’agent demande les informations manquantes. |
| Hors sujet | « Écris un poème sur la mer. » | L’agent ne force pas le format procédure. |

**À retenir :** le Skill fournit les consignes ; le test vérifie le comportement réel de l’agent.

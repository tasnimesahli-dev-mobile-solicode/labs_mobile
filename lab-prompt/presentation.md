---
marp: true
theme: default
size: 16:9
paginate: true
html: true
---

<style>
section {
  font-family: 'Segoe UI', Arial, sans-serif;
  font-size: 20px;
  padding: 35px 50px;
}
h1 {
  font-size: 28px;
  margin-bottom: 14px;
  color: #0f2c59;
}
h2 {
  font-size: 22px;
  color: #1e40af;
  margin-bottom: 10px;
}
p, li {
  font-size: 20px;
  line-height: 1.5;
  margin-bottom: 6px;
}
strong { color: #0f2c59; }
code {
  background-color: #f1f5f9;
  padding: 2px 6px;
  border-radius: 4px;
  font-size: 14px;
}
pre code {
  font-size: 13px;
}
table {
  font-size: 15px;
  width: 100%;
  border-collapse: collapse;
  margin-top: 10px;
}
th {
  background-color: #2563eb;
  color: white;
  padding: 7px 10px;
}
td { padding: 7px 10px; border: 1px solid #e2e8f0; }
tr:nth-child(even) { background-color: #f8fafc; }
ul { margin-top: 8px; margin-bottom: 8px; }
.logo-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
  padding-bottom: 8px;
  border-bottom: 2px solid #e2e8f0;
}
.grid-2 {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
  margin-top: 10px;
}
.card {
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  border-radius: 8px;
  padding: 14px 18px;
}
.badge {
  display: inline-block;
  background: #dbeafe;
  color: #1e40af;
  border-radius: 6px;
  padding: 2px 10px;
  font-size: 14px;
  font-weight: bold;
  margin-right: 6px;
}
.warn {
  background: #fef9c3;
  border-left: 4px solid #eab308;
  padding: 8px 14px;
  border-radius: 4px;
  font-size: 17px;
  margin-top: 12px;
}
</style>

<!-- _class: cover -->
<!-- _paginate: false -->
<!-- _footer: "Centre SoliCode Tanger & OFPPT — Promotion 2026" -->

<!-- Note: Bonjour à tous, je vous présente notre lab sur le Prompt Engineering pour mieux utiliser l'IA. -->

<div class="logo-bar">
  <img src="images/ofppt-logo.png" height="85" alt="Logo OFPPT">
  <img src="images/solicode-logo.png" height="70" alt="Logo SoliCode">
</div>

# Lab Prompt Engineering

### Écrire de bons prompts pour l'IA — PHP, Laravel & Web

- **Présenté par** : Tasnime Sahli &nbsp;•&nbsp; **Encadré par** : ES-SARRAJ FOUAD

Établissement : **Centre SoliCode Tanger • OFPPT**

---

<!-- header: "Lab Prompt Engineering | Plan" -->
<!-- footer: "SoliCode & OFPPT | Lab Prompt" -->

<!-- Note: Voici le plan de notre présentation en cinq parties clés. -->

# Plan de la Présentation

1. **Introduction** — qu'est-ce que le Prompt Engineering ?
2. **Définitions & Outils** — vocabulaire et outils IA
3. **Les Méthodes** — RTF, IPO, CRISPE, Few-Shot
4. **Pratiquer** — améliorer un prompt, usages quotidiens
5. **Conclusion & TP** — comparaison, bonnes pratiques, exercice

---

<!-- header: "Lab Prompt | 1. Planification" -->
<!-- footer: "SoliCode & OFPPT | Lab Prompt" -->

<!-- Note: Cette étape fixe nos objectifs d'apprentissage et les prérequis du lab. -->

# 1. Planification

- **Objectifs** : écrire des prompts clairs et efficaces pour l'IA
- **Prérequis** : notions de base en PHP ou développement web
- **Étapes du lab** :
  1. Découvrir les méthodes de prompt
  2. Analyser des exemples concrets
  3. Améliorer un prompt vague
  4. Réaliser le TP et s'auto-évaluer

---

<!-- header: "Lab Prompt | 2. Introduction" -->
<!-- footer: "SoliCode & OFPPT | Lab Prompt" -->

<!-- Note: Le Prompt Engineering aide à obtenir de meilleures réponses de l'IA. -->

# 2. Introduction

- **L'IA répond selon la qualité de notre question.**
- Un prompt flou → une réponse inutile.
- Un prompt précis → une réponse utile.

> 💡 Le **Prompt Engineering** est l'art d'écrire de bonnes instructions pour l'IA.

---

<!-- header: "Lab Prompt | 3. Définitions" -->
<!-- footer: "SoliCode & OFPPT | Lab Prompt" -->

<!-- Note: Nous définissons ici les trois termes clés à connaître avant de continuer. -->

# 3. Définitions

- **Prompt** : instruction ou question envoyée à l'IA
- **IA générative** : IA qui génère du texte, du code ou des images
- **Modèle de langage (LLM)** : moteur qui analyse et répond aux prompts
- **Prompt Engineering** : technique pour écrire des prompts efficaces

---

<!-- header: "Lab Prompt | 4. Outils" -->
<!-- footer: "SoliCode & OFPPT | Lab Prompt" -->

<!-- Note: Ces outils IA nous aident à coder, apprendre et rédiger plus vite. -->

# 4. Outils

| Outil | Rôle | Usage pour le développeur |
| :--- | :--- | :--- |
| **ChatGPT** | Assistant IA texte & code | Générer du code PHP, expliquer des erreurs |
| **GitHub Copilot** | IA intégrée à VS Code | Autocomplétion intelligente en Laravel |
| **VS Code** | Éditeur de code | Environnement de travail avec Copilot |
| **Claude / Gemini** | Assistants IA alternatifs | Rédaction, analyse, débogage |

---

<!-- header: "Lab Prompt | 5. Méthode RTF" -->
<!-- footer: "SoliCode & OFPPT | Lab Prompt" -->

<!-- Note: La méthode RTF donne un rôle, une tâche et un format précis à l'IA. -->

# 5. Méthode RTF : Role – Task – Format

<div class="grid-2">
<div class="card">

### Structure RTF
- <span class="badge">R</span> **Role** : quel expert est l'IA ?
- <span class="badge">T</span> **Task** : que doit-elle faire ?
- <span class="badge">F</span> **Format** : comment répondre ?

</div>
<div class="card">

### Exemple PHP
```
Role   : Développeur PHP senior
Task   : Écrire une fonction qui
         valide un email
Format : Code PHP commenté
```

</div>
</div>

---

<!-- header: "Lab Prompt | Méthode IPO" -->
<!-- footer: "SoliCode & OFPPT | Lab Prompt" -->

<!-- Note: La méthode IPO décrit ce que l'IA reçoit, fait et retourne. -->

# Méthode IPO : Input – Process – Output

<div class="grid-2">
<div class="card">

### Structure IPO
- <span class="badge">I</span> **Input** : données fournies à l'IA
- <span class="badge">P</span> **Process** : traitement demandé
- <span class="badge">O</span> **Output** : résultat attendu

</div>
<div class="card">

### Exemple Laravel
```
Input   : Route Laravel GET /users
Process : Expliquer le fonctionnement
Output  : Explication en 3 points
          avec exemple de code
```

</div>
</div>

---

<!-- header: "Lab Prompt | Méthode CRISPE" -->
<!-- footer: "SoliCode & OFPPT | Lab Prompt" -->

<!-- Note: CRISPE est une méthode avancée avec six éléments pour des prompts très précis. -->

# Méthode CRISPE

| Élément | Signification | Exemple |
| :--- | :--- | :--- |
| **C** — Capacity | Rôle et expertise de l'IA | "Tu es un expert Laravel" |
| **R** — Role | Mission précise à accomplir | "Tu enseignes à des débutants" |
| **I** — Insight | Contexte et informations utiles | "J'apprends Laravel depuis 2 semaines" |
| **S** — Statement | La tâche exacte à réaliser | "Explique les migrations de base" |
| **P** — Personality | Ton et style de réponse | "Simple, direct, avec exemples" |
| **E** — Experiment | Nombre de réponses | "Donne 3 variantes d'explication" |

---

<!-- header: "Lab Prompt | Few-Shot Prompting" -->
<!-- footer: "SoliCode & OFPPT | Lab Prompt" -->

<!-- Note: Le Few-Shot Prompting apprend à l'IA par des exemples concrets. -->

# Few-Shot Prompting

> Donner des exemples à l'IA pour qu'elle comprenne le format attendu.

```
Prompt :
Génère un message de validation pour un formulaire.

Exemples :
- Champ email vide   → "L'email est obligatoire."
- Email invalide     → "L'email n'est pas valide."
- Mot de passe court → "Le mot de passe doit avoir 8 caractères minimum."

Maintenant, génère pour : champ "nom" vide.
```

➡️ L'IA comprend le **style**, le **ton** et le **format** exact.

---

<!-- header: "Lab Prompt | Améliorer un Prompt" -->
<!-- footer: "SoliCode & OFPPT | Lab Prompt" -->

<!-- Note: Voici comment transformer un prompt vague en prompt précis et efficace. -->

# Améliorer un Prompt : Avant / Après

<div class="grid-2">
<div class="card">

### ❌ Prompt vague
```
Écris du PHP pour un formulaire.
```
**Problème** : trop général, réponse imprévisible.

</div>
<div class="card">

### ✅ Prompt précis (RTF)
```
Role   : Développeur PHP senior
Task   : Formulaire HTML + PHP
         pour ajouter un produit
         (nom, prix, stock)
Format : Code commenté, validation
         incluse, sans framework
```
**Résultat** : code ciblé et prêt à utiliser.

</div>
</div>

---

<!-- header: "Lab Prompt | Usages Quotidiens" -->
<!-- footer: "SoliCode & OFPPT | Lab Prompt" -->

<!-- Note: L'IA est utile chaque jour pour apprendre, rédiger et programmer. -->

# Usages Quotidiens de l'IA

| Domaine | Exemple de prompt | Résultat attendu |
| :--- | :--- | :--- |
| **Apprentissage** | "Explique les migrations Laravel simplement" | Explication courte + exemple |
| **Rédaction** | "Rédige un README pour ce projet PHP" | Document structuré prêt à publier |
| **Programmation** | "Corrige ce bug dans ce contrôleur Laravel" | Code corrigé avec explication |
| **Débogage** | "Pourquoi j'obtiens une erreur 500 ici ?" | Cause identifiée + solution |

<div class="warn">
⚠️ Toujours vérifier et tester le code généré par l'IA avant de l'utiliser.
</div>

---

<!-- header: "Lab Prompt | 6. Conclusion" -->
<!-- footer: "SoliCode & OFPPT | Lab Prompt" -->

<!-- Note: En conclusion, chaque méthode a son avantage selon la situation. -->

# 6. Conclusion : Comparaison des Méthodes

| Méthode | Complexité | Idéale pour |
| :--- | :---: | :--- |
| **RTF** | ⭐ Facile | Tâches simples et rapides |
| **IPO** | ⭐⭐ Moyenne | Tâches avec entrée et sortie claires |
| **CRISPE** | ⭐⭐⭐ Avancée | Prompts très détaillés et précis |
| **Few-Shot** | ⭐⭐ Moyenne | Reproduire un format ou un style |

**Bonnes pratiques** :
- Être précis, spécifier le contexte et le format
- Itérer : tester, corriger, améliorer
- Vérifier toujours le code et les réponses générés

---

<!-- header: "Lab Prompt | 6. Travail Pratique (TP)" -->
<!-- footer: "SoliCode & OFPPT | Lab Prompt" -->

<!-- Note: À présent, vous appliquez les méthodes vues pour écrire vos propres prompts. -->

# 6. Travail Pratique (TP)

**Objectif** : écrire et améliorer des prompts pour le développement web.

1. **Étape 1** : Écrire un prompt vague (ex : "code PHP login")
2. **Étape 2** : Le réécrire avec la méthode **RTF**
3. **Étape 3** : Réécrire le même prompt avec la méthode **CRISPE**
4. **Étape 4** : Tester les deux prompts dans ChatGPT et comparer les réponses

**Livrable** : un fichier `prompts.md` avec vos 3 versions et une conclusion.

---

<!-- header: "Lab Prompt | 6. Critères d'évaluation" -->
<!-- footer: "SoliCode & OFPPT | Lab Prompt" -->

<!-- Note: La notation évalue la structure, la maîtrise des méthodes, le contenu et la qualité du français. -->

# 6. Critères d'Évaluation

| Critère | Description | Points |
| :--- | :--- | :---: |
| **Structure & Organisation** | 3 versions de prompts présentes et bien organisées | 4 pts |
| **Maîtrise des Méthodes** | Utilisation correcte de RTF et CRISPE | 8 pts |
| **Pertinence du Contenu** | Prompts liés au développement PHP / Laravel / Web | 4 pts |
| **Qualité Français A1** | Phrases courtes, vocabulaire simple, orthographe | 4 pts |
| | **Total** | **20 pts** |

---

<!-- _class: cover -->
<!-- _paginate: false -->
<!-- _footer: "Centre SoliCode Tanger & OFPPT — Promotion 2026" -->

<!-- Note: Merci pour votre attention, le Prompt Engineering améliore notre travail chaque jour. -->

<div class="logo-bar">
  <img src="images/ofppt-logo.png" height="85" alt="Logo OFPPT">
  <img src="images/solicode-logo.png" height="70" alt="Logo SoliCode">
</div>

# Merci !

### Le bon prompt → la bonne réponse 🎯

**Compétence acquise** : écrire des prompts clairs avec RTF, IPO, CRISPE et Few-Shot

**Livrable** : `labs/lab-prompt/presentation.md`


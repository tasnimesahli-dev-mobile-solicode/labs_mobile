---
marp: true
theme: default
size: 16:9
paginate: true
html: true
---

<style>
section {
	box-sizing: border-box;
	padding: 34px 52px;
	font-family: 'Segoe UI', Arial, sans-serif;
	font-size: 28px;
	line-height: 1.35;
}

h1 {
	margin: 0 0 12px;
	font-size: 42px;
	line-height: 1.2;
}

h2 {
	margin: 0 0 8px;
	font-size: 34px;
}

h3 {
	margin: 8px 0 3px;
	font-size: 28px;
}

p {
	margin: 5px 0;
}

ul, ol {
	margin: 4px 0 8px;
	padding-left: 25px;
}

li {
	margin: 0 0 4px;
	font-size: 28px;
	line-height: 1.3;
}

table {
	width: 100%;
	margin: 8px 0;
	border-collapse: collapse;
	font-size: 20px;
	line-height: 1.25;
}

th, td {
	padding: 6px 9px;
	text-align: left;
	vertical-align: top;
}

pre {
	margin: 6px 0;
	padding: 10px 14px;
	font-size: 20px;
	line-height: 1.3;
}

section.cover {
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	text-align: center;
	padding: 34px 52px;
}

section.cover h1 {
	font-size: 44px;
}

section.cover p {
	margin: 8px 0;
}
</style>

<!-- _class: cover -->
<!-- _paginate: false -->

![height:75px](images/ofppt-logo.png) ![height:65px](images/solicode-logo.png)

# Programmation orientée objet en PHP

**Erreurs et exceptions · Namespaces · Traits**

- **Présenté par** : Tasnime Sahli
- **Encadré par** : ES-SARRAJ FOUAD

<!-- Note: Cette présentation montre trois outils de la POO en PHP. -->

---

## Plan

1. Introduction & Stack Technique
2. Définitions
3. Problème
4. Solution

---

## 1. Introduction & Stack Technique

- La programmation orientée objet (POO) organise le programme autour de classes et d’objets.
- En PHP, elle aide à structurer les règles métier et à faire évoluer une application.
- Cette présentation se concentre sur trois outils du langage : exceptions, namespaces et traits.

### Stack technique

| Outil | Utilisation |
|---|---|
| PHP 8 ou plus récent | Langage et exécution des exemples |
| PHP CLI | Lancer chaque exercice depuis le terminal |
| Visual Studio Code | Lire et modifier le code |
| Composer | Non requis pour ces exemples autonomes |

---

## 2. Définitions

### Erreurs et exceptions

- Une situation anormale peut empêcher une opération de réussir.
- Une exception représente un échec que le programme peut signaler et traiter.
- `try`, `throw`, `catch` et `finally` structurent ce traitement.
- Exemple : refuser un retrait supérieur au solde d’un compte.

### Namespace

- Un namespace donne un espace de noms à des classes, interfaces, fonctions ou constantes.
- Il organise les éléments du programme et évite les collisions entre noms identiques.
- Exemple : `LabPoo\Catalog\Product` et `LabPoo\Inventory\Product`.

### Trait

- Un trait regroupe des méthodes réutilisables par plusieurs classes.
- Une classe l’inclut avec le mot-clé `use`.
- Un trait ne remplace ni une classe ni une relation d’héritage.

---

## 3. Problème

Sans une bonne organisation, un projet PHP peut rencontrer plusieurs difficultés :

- Une opération échoue sans explication claire ni traitement adapté.
- Deux parties du projet définissent une classe portant le même nom.
- Des méthodes communes sont copiées dans plusieurs classes.
- Les corrections deviennent répétitives et le code est plus difficile à maintenir.

**Exemple :** un retrait bancaire doit valider son montant et signaler proprement un solde insuffisant.

---

## 4. Solution

| Besoin | Outil PHP | Exemple pratique |
|---|---|---|
| Signaler et traiter une opération impossible | Exception personnalisée et `try/catch` | `01-erreurs-exceptions.php` |
| Séparer des classes aux noms identiques | Namespace et alias d’import | `02-namespace.php` |
| Partager un comportement entre classes | Trait | `03-trait.php` |

- Une exception rend l’échec explicite et permet au code appelant de réagir.
- Un namespace donne un nom complet et unique aux éléments du projet.
- Un trait évite de dupliquer un comportement commun, par exemple une date de création.
- Les trois démonstrations sont dans le dossier [`pratique`](pratique/README.md).

---

## Mise en pratique

Depuis la racine du dossier `lab-poo`, dans PowerShell :

```powershell
php .\pratique\01-erreurs-exceptions.php
php .\pratique\02-namespace.php
php .\pratique\03-trait.php
```

---

<!-- _class: lead -->

# À retenir

- Les exceptions rendent les situations anormales traitables.
- Les namespaces organisent les noms de classes.
- Les traits partagent des méthodes entre classes sans copier-coller.
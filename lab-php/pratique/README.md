# Lab PHP : programmation orientée objet

## 1. Besoin du projet technique

Un projet PHP doit pouvoir traiter les opérations impossibles, organiser ses classes et éviter de répéter les mêmes comportements. Sans ces outils, les erreurs sont difficiles à gérer, des classes peuvent avoir des noms en conflit et les corrections doivent être répétées.

Ce lab permet d'apprendre trois mécanismes de la programmation orientée objet qui répondent à ces besoins : les exceptions, les namespaces et les traits. Il apporte des exemples courts pour mieux structurer et faire évoluer un projet PHP. Les exemples sont autonomes : aucun projet métier précis n'est fourni ici.

## 2. Notions et techniques à apprendre

- **Erreurs et exceptions** : utiliser `try`, `throw`, `catch` et `finally`, créer une exception personnalisée et préserver l'état d'un compte si un retrait échoue.
- **Namespaces** : placer des classes dans des espaces de noms distincts et utiliser des alias pour éviter les conflits entre deux classes `Product`.
- **Traits** : partager une méthode et une date de création entre plusieurs classes sans copier le même code.
- **Exécution** : lancer un fichier PHP avec PHP CLI et observer son résultat dans le terminal.

## 3. Réalisation attendue

Créer de petits exemples PHP exécutables et indépendants, un par notion. Chaque exemple doit montrer un cas concret, rendre visible le comportement étudié et afficher un résultat compréhensible dans le terminal.

Les exemples de ce lab couvrent les cas suivants :

- `01-erreurs-exceptions.php` : refuser un retrait supérieur au solde avec une exception personnalisée, puis afficher le solde inchangé.
- `02-namespace.php` : créer deux classes `Product` dans des namespaces différents et les utiliser avec des alias.
- `03-trait.php` : partager une date de création entre les classes `Article` et `Ticket` avec un trait.

Les fichiers doivent rester compatibles avec PHP 8 ou une version plus récente et ne nécessiter ni Composer ni bibliothèque externe. L'IA peut proposer des améliorations pertinentes, par exemple un test supplémentaire ou un petit défi. Elle doit expliquer leur intérêt, les distinguer du contenu demandé et ne pas ajouter de dépendance ni élargir le sujet sans nécessité.

Vérifier que PHP CLI est installé :

```powershell
php -v
```

Depuis la racine du dossier `lab-php`, lancer les exemples :

```powershell
php .\pratique\01-erreurs-exceptions.php
php .\pratique\02-namespace.php
php .\pratique\03-trait.php
```
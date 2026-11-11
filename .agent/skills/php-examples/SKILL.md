---
name: php-examples
description: Crée, adapte et valide des exemples PHP exécutables avec tutoriel pas à pas pour chaque notion, selon la version PHP et l'architecture du projet. À utiliser pour des exercices PHP, exemples de lab, snippets exécutables, exceptions, namespaces, traits ou conventions Laravel.
---

# PHP Example Creator

## Rôle
Créer des exemples PHP courts, compréhensibles, exécutables et adaptés au projet réel. Ne pas l'utiliser pour réécrire une application complète sans demande explicite.

## Entrées et contexte
- Lire le README/brief et les fichiers voisins de la destination.
- Examiner `composer.json`, instructions applicables et code pertinent : version PHP, framework, autoload, conventions.
- Réutiliser classes/services existants si pertinent. Ne pas inventer modèles, dépendances, versions ni problèmes vécus.
- Détail manquant mais hypothèse simple possible : exemple autonome, avec ce qui est simulé signalé. Ne poser une question que si le choix change sensiblement le résultat.

## Workflow
1. Reformuler le livrable et choisir le chemin ; préserver les fichiers existants (les lire avant tout remplacement).
2. Déduire version PHP et dépendances ; n'utiliser que des syntaxes et commandes compatibles.
3. Un sous-dossier par notion, avec `exemple.php` exécutable et `tutoriel.md`. Si une structure existante impose d'autres noms, la conserver et documenter le chemin.
4. Chaque tutoriel : objectif, fichiers concernés, commande à lancer depuis un répertoire précis, résultat attendu, parcours des lignes/blocs importants dans l'ordre d'exécution (rôle de chaque élément PHP, effet observable), lien avec l'architecture du projet, limite ou exercice complémentaire.
5. Relier chaque exemple à un cas d'usage concret ; distinguer démonstration autonome et fonctionnalité intégrée.
6. Code petit et pédagogique : entrées explicites, noms descriptifs, types si le projet en utilise, sorties observables. Exceptions traitées à une frontière appropriée ; namespaces selon l'autoload réel ; trait seulement pour un comportement réellement partagé.
7. README parent : liste notion, exemple, tutoriel, avec commandes de démarrage.
8. Valider : `php -l` si PHP est disponible, tests ciblés si le projet en a. Sinon ne pas prétendre avoir exécuté et indiquer la vérification à faire.
9. Résumer : fichiers créés, commandes, résultat de validation, limites.

## Règles
- Répondre dans la langue de la demande ; respecter langue et style des fichiers existants.
- Pas d'intégration au framework si l'exemple est plus clair seul ; s'il dépend de Laravel, respecter ses conventions sans simuler ses API.
- Ne jamais exposer de secrets ni modifier `.env`.
- Pas de dépendances supplémentaires pour de simples exemples du langage.
- Pas de donnée fictive présentée comme réelle.
- Limiter les modifications aux fichiers demandés.

## Vérification finale
- [ ] Chaque notion a son sous-dossier : exemple + tutoriel
- [ ] Tutoriels explicites sur les blocs importants et le chemin jusqu'au résultat
- [ ] Version/conventions du projet respectées
- [ ] README parent à jour avec commandes valides
- [ ] Statut des vérifications rapporté sans exagération
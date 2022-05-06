# Objectif du projet : 
Uberisation du travail et société collaborative.

# Nom du site : 
KeepKids

# Cloner le projet pour télécharger son contenu
Nous avons crée un site pouvant recenser les professionnels étant apte à garder des enfants et aux parents de pouvoir inscrire leurs enfants .

Les parents et les professionnels peuvent  s'inscrirent. les parents n'auront bien sur que accès qu'aux enfants qu'ils auront enregistrés

## Table of Contents
1. [info générale]
2. [connexion utilisateurs]
3. [connexion administrateur]

## info genérale

Avant l'installation, veuillez hebergez le site avec un serveur PHP spark.
La base de données interagit avec le site, c'est a dire que lorsqu'un utilisateur s'enregistre, le mot de passe et l'adresse mail sont enregistrés dedans.
L'utilisateur doit donc s'enregistrer puis se connecter avant d'avoir accès à son compte. Le compte ne s'affichera que lorsque le client sera connecté.

## connexion parents
Comme dit plus haut, le  parent doit s'enregistrer puis se connecter pour avoir accés à la page . Sur cette page il pourra ajouter des enfants  et des spécificités sous forme d'un formulaire.
Les données vont s'implementer dans la base de données, si l'utilisateur utilise une adresse mail déjà utilisé, un message d'erreur lui indiquant que cette adresse mail est déjà sélectionné s'affichera. Le parent aura la fonctionnalité de chercher des professionnels proche de chez lui. 

## connexion professionnel

Pour se connecter c'est le même processus que pour la connexion parent 
En tant professionnel , vous devrez fournir un justificatif montrant votre éligibilité à pouvoir garder des enfants. Vous pourrez aussi créer un devis et montrer vos disponibilités aux parents. Un systeme de relance par mail est aussi mis en place pour permettre aux professionnels de les aider.

## logiciels utilisés
Utilisation de xampp
Codeigniter

## Hebergement
Hostinger

## Documents
Vous pouvez trouver les documents relatifs au projet (Devis, Cahier des charges) dans ```Public```/```Document```.

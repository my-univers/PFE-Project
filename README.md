# E-Pharmacy PFE Project

## Description
Ce projet est développé dans le cadre de notre Projet de Fin d'Études (PFE) en deuxième année de génie informatique. L'objectif est de créer une application E-pharmacy permettant aux utilisateurs de commander des médicaments et des produits de santé en ligne.

## Fonctionnalités principales
- Interface client conviviale pour parcourir et commander des produits
- Gestion des commandes et des transactions
- Catalogue des produits avec détails et images
- Possibilité de recherche et de filtrage des produits
- Livraison rapide

## Technologies utilisées
- Laravel : Framework PHP pour le développement backend
- MySQL : Système de gestion de base de données relationnelle
- HTML/CSS/JavaScript : Langages de développement frontend
- Bootstrap : Framework CSS pour la conception d'interfaces utilisateur réactives

## Installation
1. Cloner le projet depuis le dépôt GitHub :
git clone https://github.com/ElhaddajAya/E-Pharmacy-PFE-Project.git

2. Installer les dépendances PHP via Composer :
composer install

3. Créer une base de données MySQL pour l'application

4. Copier le fichier .env.example et le renommer en .env

5. Configurer les informations de base de données dans le fichier .env

6. Générer une clé d'application Laravel :
php artisan key:generate

7. Exécuter les migrations pour créer les tables de base de données :
php artisan migrate

8. Lancer le serveur de développement :
php artisan serve

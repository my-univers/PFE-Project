# E-Pharmacy PFE Project

## Description
Ce projet est développé dans le cadre de notre Projet de Fin d'Études (PFE) en deuxième année de génie informatique. L'objectif est de créer une application E-pharmacy permettant aux utilisateurs de commander des médicaments et des produits de santé en ligne.

## Fonctionnalités principales
Interface Administrateur
- Gestion des clients
- Gestion des stocks de produits
- Gestion des commandes
- Gestion des médecins partenaires.

Interface Patient
- Recherche et navigation des gammes de produits et packs de produits
- Commande des produits sans authentification
- Téléchargements des ordonnances sous format pdf ou image pour les produits qui nécessitent une approbation médicale
- La possibilité de contacter un médecin depuis la liste des médecins partenaires en cas de besoin

## Technologies utilisés
- Laravel : Framework PHP pour le développement backend, avec des fonctionnalités intégrés (bibliothèques) comme l'authentification Laravel, Laravel Mail, Tessaract OCR (Reconnaissance Optique de Charctères)...
- MySQL : Système de gestion de base de données relationnelle
- HTML/CSS/JavaScript : Langages de développement frontend
- Bootstrap : Framework CSS pour la conception d'interfaces utilisateur réactives

## Installation
1. Cloner le projet depuis le dépôt GitHub :
git clone https://github.com/ElhaddajAya/E-Pharmacy-PFE-Project.git

2. Installer les dépendances PHP via Composer :
composer install

3. Créer une base de données MySQL pour l'application

4. Copier le fichier .env.example et le renommer en .env :
cp .env.example .env

6. Configurer les informations de base de données dans le fichier .env

7. Générer une clé d'application Laravel :
php artisan key:generate

8. Exécuter les migrations pour créer les tables de base de données :
php artisan migrate

9. Assurez-vous que Tesseract est installé sur votre système, puis executez :
composer require thiagoalessio/tesseract_ocr  

10. Installer de la bibliothèque PDF Parser :
composer require smalot/pdfparser

11. Installer les notifications Laravel Rasheed :
composer require realrashid/sweet-alert     

12. Lancer le serveur de développement :

Interface Admin
- cd Pharmacy-dashboard
- cd pharma-master
- php artisan serve --port=800

Interface Patient
- cd Pharmacy-patient
- cd pharma-master
- php artisan serve --port=8080

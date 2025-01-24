# Symfony 7.2 API Starter Pack

Ce projet est un starter pack pour créer une API avec Symfony 7.2. Il inclut une configuration de base pour l'authentification JWT, un contrôleur exemple avec son test, et une structure prête à être utilisée pour développer des fonctionnalités backend robustes.

## Fonctionnalités incluses
- Authentification via JWT avec `LexikJWTAuthenticationBundle`.
- Un contrôleur d'exemple avec un test associé.
- Prêt à l'emploi pour développer une API REST.

## Prérequis
- PHP >= 8.1
- Composer
- Symfony CLI
- Docker (optionnel, mais recommandé pour les bases de données)
- Node.js et Yarn pour gérer les assets, si nécessaire.

## Installation
1. Clonez ce dépôt :
   ```bash
   git clone https://github.com/C2CTemPlay/SymfonyApiJwtStarterPack.git
   cd SymfonyApiJwtStarterPack/

2. Installez les dépendances PHP :
    ```bash
    composer install

3. Mettez en place la clé secrète pour JWT :

   ```bash
    php bin/console lexik:jwt:generate-keypair

4. Connectez vous à votre base de données :

      ```bash
      DATABASE_URL="postgresql://user:pswd@127.0.0.1:5432/dbName?serverVersion=16&charset=utf8"

5. Lancer le serveur symfony :

      ```bash
      symfony serve -d

## Authentification JWT

L'authentification JWT est disponible à l'adresse suivante :
POST http://localhost:8000/api/login_check

Exemple de payload pour se connecter :

{
  "username": "votre_identifiant",
  "password": "votre_mot_de_passe"
}

En cas de succès, vous obtiendrez un token JWT dans la réponse, qui doit être inclus dans les en-têtes des requêtes suivantes :
Authorization: Bearer <votre_token>

## Test

Un test est inclus pour vérifier le bon fonctionnement du contrôleur d'exemple.

Lancer les tests
```bash
php bin/phpunit

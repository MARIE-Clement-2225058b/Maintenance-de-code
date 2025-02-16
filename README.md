# 📚 Gestion des Branches du Projet Symfony

Ce dépôt contient la refonte totale d'une application en **Symfony** avec une base de données **MySQL**. L'architecture des branches est organisée de manière à garantir la stabilité du code et à faciliter le déploiement.

## 🌳 **Architecture des Branches**

### 1️⃣ **`main`** (Branche principale)
- **Statut :** Stable ✅
- **Rôle :** Contient le code de référence prêt pour la production.
- **Utilisation :** Toutes les nouvelles fonctionnalités validées et testées sont fusionnées ici.

### 2️⃣ **`old-code`** (Ancien projet)
- **Statut :** Archivage 📦
- **Rôle :** Conserve l'ancien code de l'application avant la refonte totale.
- **Utilisation :** Référence uniquement, aucun développement actif.

### 3️⃣ **`preprod`** (Pré-production)
- **Statut :** En cours de test 🧪
- **Rôle :** Environnement de test avant déploiement en production.
- **Utilisation :** Tester les nouvelles fonctionnalités dans un environnement similaire à la production.

### 4️⃣ **`prod`** (Production)
- **Statut :** Déployé 🚀
- **Rôle :** Contient le code actuellement en ligne pour les utilisateurs finaux.
- **Utilisation :** Déploiement des versions stables après validation en `preprod`.

### 5️⃣ **`test`** (Environnement de tests)
- **Statut :** Tests automatisés ⚙️
- **Rôle :** Dédiée aux tests unitaires, fonctionnels et d'intégration.
- **Utilisation :** Tester le code avec des outils d’intégration continue.

---

## 📦 **Résumé du Flux de Travail**

```
old-code (archivé)
      ↓
main (code stable)
      ↓     
   preprod   
      ↓
prod (version en production)
      ↓
test (tests automatisés)
```


---

## 🚀 **Installation du projet**

1. **Cloner le dépôt de l'application :**
    ```bash
    git clone https://github.com/MARIE-Clement-2225058b/Maintenance-de-code.git
    cd Maintenance-de-code/ugselweb2
    ```

2. **Installer les dépendances :**
    ```bash
    composer install
    ```

3. **Construire le projet :**
    ```bash
    php bin/console cache:clear
    ```

4. **Charger les fixtures pour la base de données :**
    ```bash
    php bin/console doctrine:database:create
    php bin/console doctrine:database:create --env=test
    php bin/console make:migration
    php bin/console doctrine:migrations:migrate
    php bin/console doctrine:fixtures:load
    ```

5. **Lancer l'application :**
    ```bash
    symfony server:start
    ```

---

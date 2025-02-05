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
    ↙     ↘
 preprod   feature/* (nouvelles fonctionnalités)
    ↓
   prod (version en production)
    ↓
   test (tests automatisés)
```


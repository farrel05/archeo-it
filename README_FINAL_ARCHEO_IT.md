# Projet Archéo-IT

## 🎓 Projet de fin d’année — École IT
### Réalisé par : **BATOCHIN NGENA FARREL**

---

## 📌 Objectif

Le projet **Archéo-IT** a pour but de créer un site web dynamique et responsive destiné à une association archéologique. Il permet :
- D’afficher les actualités de l’association (filtré selon connexion)
- De présenter les chantiers de fouilles
- De permettre l’inscription des utilisateurs
- D’envoyer un message via une page contact
- De générer des mots de passe via un script Python
- De gérer le contenu via une interface administrateur (bonus)

---

## ⚙️ Technologies utilisées

- HTML5 / CSS3 / Bootstrap 5
- PHP 8 / JavaScript
- MySQL
- Python 3 (génération de mots de passe)
- GitHub (hébergement du code)
- VirtualBox (hébergement local en VM Linux Ubuntu)

---

## 📁 Structure du projet

```
Archeo-IT/
├── index.php
├── chantiers.php
├── contact.php
├── inscription.php
├── login.php
├── logout.php
├── admin.php
├── navbar.php
├── assets/
│   ├── images/
│   └── css/
├── script/
│   └── generate_password.py
├── database/
│   └── archeo_it.sql
├── README.md
└── Documentation_VM_Archeo_IT.pdf
```

---

## 🧪 Installation en local (VM)

1. Cloner ce dépôt dans `/var/www/html/` sur la VM Ubuntu
2. Importer la base `archeo_it.sql` dans MySQL via phpMyAdmin ou terminal
3. Lancer le site sur : `http://localhost/Archeo-IT/`
4. Tester les pages : accueil, chantiers, contact, inscription, admin

---

## 🔐 Script Python

```bash
cd script/
python3 generate_password.py
```
Permet de générer un mot de passe aléatoire selon 3 critères (lettres, chiffres, symboles).

---

## 👤 Utilisateur par défaut

- Email : `admin@archeo-it.fr`
- Mot de passe : `farrel`

---

## 🔗 Dépôt GitHub

> 📂 https://github.com/farrel05/archeo-it  


---

## ✅ Réalisé par

**BATOCHIN NGENA FARREL**  
Année académique : 2024-2025 — École IT


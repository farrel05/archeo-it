-- Base de données Archéo-IT
CREATE DATABASE archeo_it;
USE archeo_it;

CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    mot_de_passe VARCHAR(255)
);

CREATE TABLE actualites (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255),
    contenu TEXT,
    date_publication DATE
);

CREATE TABLE chantiers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lieu VARCHAR(255),
    description TEXT,
    image_url VARCHAR(255)
);

CREATE TABLE messages_contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(100),
    sujet VARCHAR(100),
    message TEXT
);

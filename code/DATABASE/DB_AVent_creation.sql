DROP DATABASE IF EXISTS db_avent;
CREATE DATABASE db_avent;
USE db_avent;

CREATE TABLE etat_type 
(
    etat_id INT PRIMARY KEY AUTO_INCREMENT,
    etat_nom VARCHAR(255) 
);

CREATE TABLE brand
(
    brand_id INT PRIMARY KEY AUTO_INCREMENT,
    brand_name VARCHAR(255),
    siret INT
);

CREATE TABLE genre
(
    genre_id INT PRIMARY KEY AUTO_INCREMENT,
    genre_name VARCHAR(255)
);

CREATE TABLE theme
(
    theme_id INT PRIMARY KEY AUTO_INCREMENT,
    theme_name VARCHAR(255)
);

CREATE TABLE photo
(
    photo_id INT PRIMARY KEY AUTO_INCREMENT,
    photo_file BLOB
);

CREATE TABLE sous_theme
(
    sous_theme_id INT PRIMARY KEY AUTO_INCREMENT,
    sous_theme_name VARCHAR(255)
);

CREATE TABLE task
(
    task_id INT PRIMARY KEY AUTO_INCREMENT,
    content VARCHAR(255),
    finisseur INT,
    avent_id INT
);

CREATE TABLE user
(
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    email VARCHAR(255),
    pseudo VARCHAR(255),
    mot_de_passe VARCHAR(255),
    date_naissance DATE,
    is_verif BOOLEAN,
    is_brand INT,
    pp INT,
    genre INT,
    date_creation TIMESTAMP
);

CREATE TABLE avent
(
    avent_id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    date_debut datetime,
    date_fin datetime,
    fin_inscription datetime,
    information VARCHAR(255),
    lien_site VARCHAR(255),
    lien_billeterie VARCHAR(255),
    lieu VARCHAR(255),
    capacity INT,
    is_payant BOOLEAN,
    is_public BOOLEAN,
    date_creation TIMESTAMP,
    age_minimum TINYINT,
    sous_theme INT,
    createur INT
);

CREATE TABLE photo_for_avent
(
    photo_id INT,
    avent_id INT
);

CREATE TABLE fav_avent_for_user
(
    user_id INT,
    avent_id INT
);

CREATE TABLE fav_theme_for_user
(
    user_id INT,
    theme_id INT
);

CREATE TABLE organisateur_avent
(
    user_id INT,
    avent_id INT
);

CREATE TABLE sponso_avent
(
    brand_id INT,
    avent_id INT
);

CREATE TABLE theme_for_avent
(
    theme_id INT,
    avent_id INT
);

CREATE TABLE inscrit
(
    user_id INT,
    avent_id INT
);

CREATE TABLE suggestions
(
    user_id INT,
    avent_id INT,
    indice INT AUTO_INCREMENT
);

CREATE TABLE views
(
    user_id INT,
    avent_id INT,
    date_view TIMESTAMP
);

ALTER TABLE user ADD FOREIGN KEY (is_brand) REFERENCES brand(brand_id);
ALTER TABLE user ADD FOREIGN KEY (genre) REFERENCES genre(genre_id);
ALTER TABLE user ADD FOREIGN KEY (pp) REFERENCES photo(photo_id);
 
ALTER TABLE avent ADD FOREIGN KEY (sous_theme) REFERENCES sous_theme(sous_theme_id);
ALTER TABLE avent ADD FOREIGN KEY (createur) REFERENCES user(user_id);
 
ALTER TABLE task ADD FOREIGN KEY (avent_id) REFERENCES avent(avent_id);
ALTER TABLE task ADD FOREIGN KEY (finisseur) REFERENCES user(user_id);
 
ALTER TABLE photo_for_avent ADD FOREIGN KEY (photo_id) REFERENCES photo(photo_id);
ALTER TABLE photo_for_avent ADD FOREIGN KEY (avent_id) REFERENCES avent(avent_id);
 
ALTER TABLE fav_avent_for_user ADD FOREIGN KEY (user_id) REFERENCES user(user_id);
ALTER TABLE fav_avent_for_user ADD FOREIGN KEY (avent_id) REFERENCES avent(avent_id);

ALTER TABLE fav_theme_for_user ADD FOREIGN KEY (user_id) REFERENCES user(user_id);
ALTER TABLE fav_theme_for_user ADD FOREIGN KEY (theme_id) REFERENCES theme(theme_id);
 
ALTER TABLE organisateur_avent ADD FOREIGN KEY (user_id) REFERENCES user(user_id);
ALTER TABLE organisateur_avent ADD FOREIGN KEY (avent_id) REFERENCES avent(avent_id);
 
ALTER TABLE sponso_avent ADD FOREIGN KEY (brand_id) REFERENCES brand(brand_id);
ALTER TABLE sponso_avent ADD FOREIGN KEY (avent_id) REFERENCES avent(avent_id);
 
ALTER TABLE theme_for_avent ADD FOREIGN KEY (theme_id) REFERENCES theme(theme_id);
ALTER TABLE theme_for_avent ADD FOREIGN KEY (avent_id) REFERENCES avent(avent_id);
 
ALTER TABLE inscrit ADD FOREIGN KEY (avent_id) REFERENCES avent(avent_id);
ALTER TABLE inscrit ADD FOREIGN KEY (user_id) REFERENCES user(user_id);

ALTER TABLE suggestion ADD FOREIGN KEY(user_id) REFERENCES user(user_id);
ALTER TABLE suggestion ADD FOREIGN KEY(avent_id) REFERENCES avent(avent_id);

ALTER TABLE views ADD FOREIGN KEY (user_id) REFERENCES user(user_id);
ALTER TABLE views ADD FOREIGN KEY (avent_id) REFERENCES avent(avent_id);
USE db_avent;

INSERT INTO user (email,pseudo,mot_de_passe) VALUES

('APANYAN','COUBEH','PROUT');

INSERT INTO fav_theme_for_user(user_id,theme_id) VALUES

('1','1'),
('1','2'),
('1','3');

INSERT INTO avent (nom,etat) VALUES

('Sortie Ciné', true),
('Plage copine', true),
('Expo Arts & Métiers', true),
('Soirée Caritative', true),
('Concert', true),
('Entretien', true);

INSERT INTO theme_for_avent (theme_id,avent_id) VALUES

('12','1'),
('4','2'),
('7','2'),
('9','2'),
('2','3'),
('5','3'),
('11','3'),
('24','4'),
('25','4'),
('2','5'),
('2','6'),
('3','6');

INSERT INTO views (user_id,avent_id) VALUES

('1','1'),
('1','3'),
('1','2');

INSERT INTO fav_avent_for_user (user_id,avent_id) VALUES

('1','1'),
('1','3');

INSERT INTO suggestions (user_id,avent_id) VALUES

('1','4'),
('1','5');


-- Insert data into etat_type
INSERT INTO etat_type (etat_nom) VALUES 
("En cours"), 
("Terminé"), 
("Annulé"), 
("Prévu"), 
("Reporté");

-- Insert data into brand
INSERT INTO brand (brand_name, siret) VALUES 
("TechCorp", 12345678901234),
("EcoSolutions", 23456789012345),
("HealthPlus", 34567890123456),
("GreenFuture", 45678901234567),
("InnovateX", 56789012345678);

-- Insert data into genre
INSERT INTO genre (genre_name) VALUES 
("Masculin"), 
("Féminin"), 
("Autre");

-- Insert data into theme
INSERT INTO theme (theme_name) VALUES 
("Technologie"), 
("Écologie"), 
("Santé"), 
("Éducation"), 
("Divertissement");

-- Insert data into photo
INSERT INTO photo (photo_file) VALUES 
(LOAD_FILE("/path/to/photo1.jpg")), 
(LOAD_FILE("/path/to/photo2.jpg")), 
(LOAD_FILE("/path/to/photo3.jpg")), 
(LOAD_FILE("/path/to/photo4.jpg")), 
(LOAD_FILE("/path/to/photo5.jpg"));

-- Insert data into sous_theme
INSERT INTO sous_theme (sous_theme_name) VALUES 
("IA"), 
("Recyclage"), 
("Nutrition"), 
("Programmation"), 
("Jeux vidéo");

-- Insert data into user
INSERT INTO user (nom, prenom, email, pseudo, mot_de_passe, date_naissance, is_verif, is_brand, pp, genre, date_creation) VALUES
("Dupont", "Jean", "jean.dupont@example.com", "jdupont", "password123", "1985-06-15", TRUE, 0, 1, 1, "2024-06-01 12:00:00"),
("Martin", "Sophie", "sophie.martin@example.com", "smartin", "password123", "1990-08-22", TRUE, 1, 2, 2, "2024-06-01 12:00:00"),
("Lefevre", "Luc", "luc.lefevre@example.com", "llefevre", "password123", "1988-02-10", FALSE, 0, 3, 3, "2024-06-01 12:00:00"),
("Bernard", "Marie", "marie.bernard@example.com", "mbernard", "password123", "1992-11-05", TRUE, 0, 4, 1, "2024-06-01 12:00:00"),
("Dubois", "Paul", "paul.dubois@example.com", "pdubois", "password123", "1987-04-18", FALSE, 1, 5, 2, "2024-06-01 12:00:00");

-- Insert data into avent
INSERT INTO avent (nom, date_debut, date_fin, fin_inscription, information, lien_site, lien_billeterie, lieu, capacity, etat, is_payant, is_public, date_creation, age_minimum, sous_theme, createur) VALUES
("Conférence IA 2024", "2024-09-01 09:00:00", "2024-09-03 18:00:00", "2024-08-30 23:59:59", "Une conférence sur l'intelligence artificielle.", "https://ia2024.com", "https://tickets.ia2024.com", "Paris", 200, TRUE, TRUE, TRUE, "2024-06-01 12:00:00", 18, 1, 1),
("Forum Recyclage", "2024-10-15 10:00:00", "2024-10-16 17:00:00", "2024-10-10 23:59:59", "Forum sur les nouvelles technologies de recyclage.", "https://recyclage2024.com", "https://tickets.recyclage2024.com", "Lyon", 150, TRUE, TRUE, FALSE, "2024-06-01 12:00:00", 12, 2, 2),
("Festival Santé", "2024-11-01 09:00:00", "2024-11-02 18:00:00", "2024-10-30 23:59:59", "Un festival sur les dernières avancées en santé.", "https://sante2024.com", "https://tickets.sante2024.com", "Marseille", 300, TRUE, FALSE, TRUE, "2024-06-01 12:00:00", 16, 3, 3),
("Colloque Éducation", "2024-12-05 10:00:00", "2024-12-06 17:00:00", "2024-12-01 23:59:59", "Colloque sur les innovations pédagogiques.", "https://education2024.com", "https://tickets.education2024.com", "Bordeaux", 100, TRUE, TRUE, TRUE, "2024-06-01 12:00:00", 18, 4, 4),
("Salon Divertissement", "2024-08-20 09:00:00", "2024-08-22 18:00:00", "2024-08-15 23:59:59", "Un salon sur les nouvelles tendances du divertissement.", "https://divertissement2024.com", "https://tickets.divertissement2024.com", "Nice", 250, TRUE, TRUE, FALSE, "2024-06-01 12:00:00", 12, 5, 5);

-- Insert data into photo_for_avent
INSERT INTO photo_for_avent (photo_id, avent_id) VALUES 
(1, 1), 
(2, 2), 
(3, 3), 
(4, 4), 
(5, 5);

-- Insert data into fav_avent_for_user
INSERT INTO fav_avent_for_user (user_id, avent_id, date_fav) VALUES 
(1, 1, "2024-06-01 12:00:00"), 
(2, 2, "2024-06-01 12:00:00"), 
(3, 3, "2024-06-01 12:00:00"), 
(4, 4, "2024-06-01 12:00:00"), 
(5, 5, "2024-06-01 12:00:00");

-- Insert data into fav_theme_for_user
INSERT INTO fav_theme_for_user (user_id, theme_id) VALUES 
(1, 1), 
(2, 2), 
(3, 3), 
(4, 4), 
(5, 5);

-- Insert data into organisateur_avent
INSERT INTO organisateur_avent (user_id, avent_id) VALUES 
(1, 1), 
(2, 2), 
(3, 3), 
(4, 4), 
(5, 5);

-- Insert data into sponso_avent
INSERT INTO sponso_avent (brand_id, avent_id) VALUES 
(1, 1), 
(2, 2), 
(3, 3), 
(4, 4), 
(5, 5);

USE db_avent;

INSERT INTO theme (theme_name) VALUES 

('Musique'),
('Art'),
('Cuisine'),
('Sport'),
('Technologie'),
('Mode'),
('Environnement'),
('Éducation'),
('Santé'),
('Voyage'),
('Science'),
('Cinéma'),
('Photographie'),
('Littérature'),
('Histoire'),
('Jeux'),
('Gaming'),
('Spiritualité'),
('Développement'),
('Animaux'),
('Fêtes'),
('Marketing'),
('Design'),
('Finance'),
('Politique'),
('Communauté'),
('Famille'),
('Musées'),
('Caritatif'),
('Rencontres');

INSERT INTO etat_type (etat_nom) VALUES

('coming'),
('going'),
('finish');

INSERT INTO genre (genre_name) VALUES

('Homme'),
('Femme'),
('Autre');


/*INSERTION FOR TEST DELETE WHEN COMPLETE*/

INSERT INTO user (email,pseudo,mot_de_passe) VALUES

('APANYAN','COUBEH','PROUT');

INSERT INTO fav_theme_for_user(user_id,theme_id) VALUES

('2','1'),
('2','2'),
('2','3');

INSERT INTO avent (nom) VALUES

('Sortie Ciné'),
('Plage copine'),
('Expo Arts & Métiers'),
('Soirée Caritative');

INSERT INTO theme_for_avent (theme_id,avent_id) VALUES

('12','1'),
('4','2'),
('7','2'),
('9','2'),
('2','3'),
('5','3'),
('11','3'),
('24','4'),
('25','4');

INSERT INTO views (user_id,avent_id) VALUES

('2','1'),
('2','3');
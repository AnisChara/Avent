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
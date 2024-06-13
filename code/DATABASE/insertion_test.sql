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

-- Insert data into sous_theme
INSERT INTO sous_theme (sous_theme_name) VALUES 
("IA"), 
("Recyclage"), 
("Nutrition"), 
("Programmation"), 
("Jeux vidéo");

-- Insert data into user
INSERT INTO user (nom, prenom, email, pseudo, mot_de_passe, date_naissance, is_verif, is_brand, genre) VALUES
("Dupont", "Jean", "jean.dupont@example.com", "jdupont", "password123", "1985-06-15", TRUE, null, 1),
("Martin", "Sophie", "sophie.martin@example.com", "smartin", "password123", "1990-08-22", TRUE,null, 2),
("Lefevre", "Luc", "luc.lefevre@example.com", "llefevre", "password123", "1988-02-10", FALSE, 2, 3),
("Bernard", "Marie", "marie.bernard@example.com", "mbernard", "password123", "1992-11-05", TRUE, 3, 1),
("Dubois", "Paul", "paul.dubois@example.com", "pdubois", "password123", "1987-04-18", FALSE, null, 2);

-- Insert data into avent
INSERT INTO avent (nom, date_debut, date_fin, fin_inscription, information, lien_site, lien_billeterie, lieu, capacity, etat, is_payant, is_public, age_minimum, createur) VALUES
("Conférence IA 2024", "2024-09-01 09:00:00", "2024-09-03 18:00:00", "2024-08-30 23:59:59", "Une conférence sur l'intelligence artificielle.", "https://ia2024.com", "https://tickets.ia2024.com", "Paris", 200, TRUE, TRUE, TRUE, 18, 1),
("Forum Recyclage", "2024-10-15 10:00:00", "2024-10-16 17:00:00", "2024-10-10 23:59:59", "Forum sur les nouvelles technologies de recyclage.", "https://recyclage2024.com", "https://tickets.recyclage2024.com", "Lyon", 150, TRUE, TRUE, FALSE, 12, 1),
("Festival Santé", "2024-11-01 09:00:00", "2024-11-02 18:00:00", "2024-10-30 23:59:59", "Un festival sur les dernières avancées en santé.", "https://sante2024.com", "https://tickets.sante2024.com", "Marseille", 300, TRUE, FALSE, TRUE, 16, 1),
("Colloque Éducation", "2024-12-05 10:00:00", "2024-12-06 17:00:00", "2024-12-01 23:59:59", "Colloque sur les innovations pédagogiques.", "https://education2024.com", "https://tickets.education2024.com", "Bordeaux", 100, TRUE, TRUE, TRUE, 18, 1),
("Salon Divertissement", "2024-08-20 09:00:00", "2024-08-22 18:00:00", "2024-08-15 23:59:59", "Un salon sur les nouvelles tendances du divertissement.", "https://divertissement2024.com", "https://tickets.divertissement2024.com", "Nice", 250, TRUE, TRUE, FALSE, 12, 1),
('Festival de Musique', '2024-07-10', '2024-07-15', '2024-07-01', 'Un festival avec plusieurs artistes internationaux.', 'http://festivaldemusique.com', 'http://billetterie.festivaldemusique.com', 'Parc des Princes, Paris', 10000, TRUE, TRUE, TRUE, 18, 1),
('Conférence Tech', '2024-09-05', '2024-09-07', '2024-08-25', 'Une conférence sur les nouvelles technologies.', 'http://conferencetech.com', 'http://billetterie.conferencetech.com', 'Palais des Congrès, Paris', 2000, TRUE, TRUE, TRUE, 16, 1),
('Exposition Art', '2024-10-01', '2024-10-15', '2024-09-20', 'Exposition des œuvres d"art contemporaines.', 'http://expoart.com', 'http://billetterie.expoart.com', 'Musée d"Art Moderne, Paris', 500, TRUE, FALSE, TRUE, 12, 1),
('Compétition de Jeux Vidéo', '2024-08-20', '2024-08-25', '2024-08-10', 'Compétition internationale de jeux vidéo.', 'http://competitionjeuxvideo.com', 'http://billetterie.competitionjeuxvideo.com', 'Stade de France, Saint-Denis', 8000, TRUE, TRUE, TRUE, 16, 1),
('Atelier de Cuisine', '2024-07-15', '2024-07-16', '2024-07-10', 'Atelier de cuisine avec un chef étoilé.', 'http://ateliercuisine.com', 'http://billetterie.ateliercuisine.com', 'École de Cuisine, Lyon', 20, TRUE, TRUE, FALSE, 18, 1),
('Marathon de Paris', '2024-04-15', '2024-04-15', '2024-04-01', 'Marathon annuel de Paris.', 'http://marathondeparis.com', 'http://billetterie.marathondeparis.com', 'Champs-Élysées, Paris', 30000, TRUE, FALSE, TRUE, 18, 1),
('Salon du Livre', '2024-11-05', '2024-11-10', '2024-10-25', 'Salon international du livre.', 'http://salondulivre.com', 'http://billetterie.salondulivre.com', 'Parc des Expositions, Paris', 15000, TRUE, TRUE, TRUE, 0, 1),
('Festival de Cinéma', '2024-05-20', '2024-05-25', '2024-05-10', 'Festival international du film.', 'http://festivaldecinema.com', 'http://billetterie.festivaldecinema.com', 'Cannes, France', 4000, TRUE, TRUE, TRUE, 18, 1),
('Compétition de Natation', '2024-08-10', '2024-08-12', '2024-08-01', 'Compétition nationale de natation.', 'http://competitionnatation.com', 'http://billetterie.competitionnatation.com', 'Piscine Olympique, Marseille', 2000, TRUE, FALSE, TRUE, 12, 1),
('Séminaire de Développement Personnel', '2024-06-20', '2024-06-22', '2024-06-15', 'Séminaire sur le développement personnel et le bien-être.', 'http://seminairedeveloppement.com', 'http://billetterie.seminairedeveloppement.com', 'Centre de Conférence, Nice', 300, TRUE, TRUE, FALSE, 18, 1),
('Festival de Jazz', '2024-07-20', '2024-07-22', '2024-07-10', 'Festival de jazz avec des artistes du monde entier.', 'http://festivaldejazz.com', 'http://billetterie.festivaldejazz.com', 'Théâtre Antique, Lyon', 5000, TRUE, TRUE, TRUE, 18, 1),
('Conférence IA', '2024-10-05', '2024-10-07', '2024-09-25', 'Conférence internationale sur l intelligence artificielle.', 'http://conferenceia.com', 'http://billetterie.conferenceia.com', 'Centre de Conférence, Paris', 1500, TRUE, TRUE, TRUE, 18, 1),
('Salon de l Automobile', '2024-09-15', '2024-09-20', '2024-09-05', 'Salon présentant les dernières innovations automobiles.', 'http://salondelautomobile.com', 'http://billetterie.salondelautomobile.com', 'Parc des Expositions, Paris', 20000, TRUE, TRUE, TRUE, 0, 1),
('Compétition d Escrime', '2024-08-01', '2024-08-03', '2024-07-25', 'Compétition internationale d escrime.', 'http://competitiondescrime.com', 'http://billetterie.competitiondescrime.com', 'Gymnase Municipal, Bordeaux', 800, TRUE, TRUE, TRUE, 12, 1),
('Atelier de Photographie', '2024-06-25', '2024-06-26', '2024-06-20', 'Atelier de photographie pour amateurs et professionnels.', 'http://atelierphotographie.com', 'http://billetterie.atelierphotographie.com', 'Studio Photo, Nice', 50, TRUE, TRUE, FALSE, 18, 1),
('Marathon de Lyon', '2024-05-10', '2024-05-10', '2024-05-01', 'Marathon annuel de Lyon.', 'http://marathondelyon.com', 'http://billetterie.marathondelyon.com', 'Centre-ville, Lyon', 25000, TRUE, TRUE, TRUE, 18, 1),
('Festival de Théâtre', '2024-11-01', '2024-11-05', '2024-10-20', 'Festival de théâtre avec des troupes de différents pays.', 'http://festivaldetheatre.com', 'http://billetterie.festivaldetheatre.com', 'Opéra, Marseille', 3000, TRUE, TRUE, TRUE, 12, 1),
('Conférence de Santé', '2024-04-12', '2024-04-14', '2024-04-01', 'Conférence sur les nouvelles avancées en santé.', 'http://conferencedesante.com', 'http://billetterie.conferencedesante.com', 'Centre Médical, Paris', 1000, TRUE, TRUE, FALSE, 18, 1),
('Festival de Danse', '2024-08-15', '2024-08-18', '2024-08-05', 'Festival de danse avec des performances internationales.', 'http://festivaldedanse.com', 'http://billetterie.festivaldedanse.com', 'Palais des Sports, Lyon', 6000, TRUE, TRUE, TRUE, 18, 1),
('Atelier de Peinture', '2024-07-10', '2024-07-11', '2024-07-05', 'Atelier de peinture pour débutants et avancés.', 'http://atelierpeinture.com', 'http://billetterie.atelierpeinture.com', 'Galerie Art, Nice', 30, TRUE, TRUE, FALSE, 18,  1),
('Salon de la Gastronomie', '2024-11-20', '2024-11-25', '2024-11-10', 'Salon annuel dédié aux délices culinaires', 'http://salondelagastronomie.com', 'http://billetterie.salondelagastronomie.com', 'Centre des Congrès, Paris', 10000, TRUE, TRUE, TRUE, 0, 1),
('Festival de Science Fiction', '2024-09-10', '2024-09-13', '2024-09-01', 'Festival pour les amateurs de science-fiction', 'http://festivaldesciencefiction.com', 'http://billetterie.festivaldesciencefiction.com', 'Palais des Congrès, Lyon', 3000, TRUE, TRUE, TRUE, 16, 1),
('Compétition de Cyclisme', '2024-07-05', '2024-07-08', '2024-06-25', 'Compétition internationale de cyclisme', 'http://competitiondecyclisme.com', 'http://billetterie.competitiondecyclisme.com', 'Route de la Corniche, Marseille', 5000, TRUE, TRUE, TRUE, 18, 1),
('Salon de la Robotique', '2024-08-15', '2024-08-18', '2024-08-05', 'Exposition sur les dernières innovations en robotique', 'http://salondelarobotique.com', 'http://billetterie.salondelarobotique.com', 'Centre des Expositions, Paris', 7000, TRUE, TRUE, TRUE, 0, 1),
('Festival des Jeux de Société', '2024-12-01', '2024-12-05', '2024-11-25', 'Festival pour les passionnés de jeux de société', 'http://festivaldesjeuxdesociete.com', 'http://billetterie.festivaldesjeuxdesociete.com', 'Salle Polyvalente, Lyon', 2000, TRUE, TRUE, TRUE, 0, 1),
('Conférence sur le Climat', '2024-09-25', '2024-09-27', '2024-09-15', 'Conférence sur les enjeux climatiques actuels', 'http://conferencesurleclimat.com', 'http://billetterie.conferencesurleclimat.com', 'Université, Bordeaux', 1000, TRUE, TRUE, FALSE, 18, 1),
('Festival du Film Documentaire', '2024-10-10', '2024-10-14', '2024-10-01', 'Festival international du film documentaire', 'http://festivaldufilmdocumentaire.com', 'http://billetterie.festivaldufilmdocumentaire.com', 'Cinéma Le Grand Rex, Paris', 4000, TRUE, TRUE, TRUE, 18, 1),
('Compétition de Triathlon', '2024-07-18', '2024-07-20', '2024-07-10', 'Compétition nationale de triathlon', 'http://competitiondetriathlon.com', 'http://billetterie.competitiondetriathlon.com', 'Plage de Nice, Nice', 3000, TRUE, TRUE, TRUE, 18, 1),
('Atelier d Écriture', '2024-06-15', '2024-06-16', '2024-06-10', 'Atelier pour les passionnés d écriture créative', 'http://atelierdecriture.com', 'http://billetterie.atelierdecriture.com', 'Bibliothèque Municipale, Marseille', 50, TRUE, TRUE, FALSE, 18, 1),
('Salon des Métiers d Art', '2024-08-25', '2024-08-30', '2024-08-20', 'Salon dédié aux métiers art et de l artisanat', 'http://salondesmetiersdart.com', 'http://billetterie.salondesmetiersdart.com', 'Halle des Arts, Bordeaux', 1500, TRUE, TRUE, TRUE, 0, 1),
('Salon de l Automobile', '2024-09-15', '2024-09-20', '2024-09-05', 'Salon présentant les dernières innovations automobiles', 'http://salondelautomobile.com', 'http://billetterie.salondelautomobile.com', 'Parc des Expositions, Paris', 20000, TRUE, TRUE, TRUE, 0, 1),
('Compétition d Escrime', '2024-08-01', '2024-08-03', '2024-07-25', 'Compétition internationale d escrime', 'http://competitiondescrime.com', 'http://billetterie.competitiondescrime.com', 'Gymnase Municipal, Bordeaux', 800, TRUE, TRUE, TRUE, 12, 1),
('Atelier de Photographie', '2024-06-25', '2024-06-26', '2024-06-20', 'Atelier de photographie pour amateurs et professionnels', 'http://atelierphotographie.com', 'http://billetterie.atelierphotographie.com', 'Studio Photo, Nice', 50, TRUE, TRUE, FALSE, 18, 1),
('Marathon de Lyon', '2024-05-10', '2024-05-10', '2024-05-01', 'Marathon annuel de Lyon', 'http://marathondelyon.com', 'http://billetterie.marathondelyon.com', 'Centre-ville, Lyon', 25000, TRUE, TRUE, TRUE, 18, 1),
('Festival de Théâtre', '2024-11-01', '2024-11-05', '2024-10-20', 'Festival de théâtre avec des troupes de différents pays', 'http://festivaldetheatre.com', 'http://billetterie.festivaldetheatre.com', 'Opéra, Marseille', 3000, TRUE, TRUE, TRUE, 12, 1),
('Conférence de Santé', '2024-04-12', '2024-04-14', '2024-04-01', 'Conférence sur les nouvelles avancées en santé', 'http://conferencedesante.com', 'http://billetterie.conferencedesante.com', 'Centre Médical, Paris', 1000, TRUE, TRUE, FALSE, 18, 1),
('Festival de Danse', '2024-08-15', '2024-08-18', '2024-08-05', 'Festival de danse avec des performances internationales', 'http://festivaldedanse.com', 'http://billetterie.festivaldedanse.com', 'Palais des Sports, Lyon', 6000, TRUE, TRUE, TRUE, 18, 1),
('Atelier de Peinture', '2024-07-10', '2024-07-11', '2024-07-05', 'Atelier de peinture pour débutants et avancés', 'http://atelierpeinture.com', 'http://billetterie.atelierpeinture.com', 'Galerie d Art, Nice', 30, TRUE, TRUE, FALSE, 18, 1),
('Salon de la Gastronomie', '2024-11-20', '2024-11-25', '2024-11-10', 'Salon annuel dédié aux délices culinaires', 'http://salondelagastronomie.com', 'http://billetterie.salondelagastronomie.com', 'Centre des Congrès, Paris', 10000, TRUE, TRUE, TRUE, 0, 1),
('Festival de Science Fiction', '2024-09-10', '2024-09-13', '2024-09-01', 'Festival pour les amateurs de science-fiction', 'http://festivaldesciencefiction.com', 'http://billetterie.festivaldesciencefiction.com', 'Palais des Congrès, Lyon', 3000, TRUE, TRUE, TRUE, 16, 1),
('Compétition de Cyclisme', '2024-07-05', '2024-07-08', '2024-06-25', 'Compétition internationale de cyclisme', 'http://competitiondecyclisme.com', 'http://billetterie.competitiondecyclisme.com', 'Route de la Corniche, Marseille', 5000, TRUE, TRUE, TRUE, 18, 1),
('Salon de la Robotique', '2024-08-15', '2024-08-18', '2024-08-05', 'Exposition sur les dernières innovations en robotique', 'http://salondelarobotique.com', 'http://billetterie.salondelarobotique.com', 'Centre des Expositions, Paris', 7000, TRUE, TRUE, TRUE, 0, 1),
('Festival des Jeux de Société', '2024-12-01', '2024-12-05', '2024-11-25', 'Festival pour les passionnés de jeux de société', 'http://festivaldesjeuxdesociete.com', 'http://billetterie.festivaldesjeuxdesociete.com', 'Salle Polyvalente, Lyon', 2000, TRUE, TRUE, TRUE, 0, 1),
('Conférence sur le Climat', '2024-09-25', '2024-09-27', '2024-09-15', 'Conférence sur les enjeux climatiques actuels', 'http://conferencesurleclimat.com', 'http://billetterie.conferencesurleclimat.com', 'Université, Bordeaux', 1000, TRUE, TRUE, FALSE, 18, 1),
('Festival du Film Documentaire', '2024-10-10', '2024-10-14', '2024-10-01', 'Festival international du film documentaire', 'http://festivaldufilmdocumentaire.com', 'http://billetterie.festivaldufilmdocumentaire.com', 'Cinéma Le Grand Rex, Paris', 4000, TRUE, TRUE, TRUE, 18, 1),
('Compétition de Triathlon', '2024-07-18', '2024-07-20', '2024-07-10', 'Compétition nationale de triathlon', 'http://competitiondetriathlon.com', 'http://billetterie.competitiondetriathlon.com', 'Plage de Nice, Nice', 3000, TRUE, TRUE, TRUE, 18, 1),
('Atelier d Ecriture', '2024-06-15', '2024-06-16', '2024-06-10', 'Atelier pour les passionnés d écriture créative', 'http://atelierdecriture.com', 'http://billetterie.atelierdecriture.com', 'Bibliothèque Municipale, Marseille', 50, TRUE, TRUE, FALSE, 18, 1),
('Salon des Métiers d Art', '2024-08-25', '2024-08-30', '2024-08-20', 'Salon dédié aux métiers d art et de l artisanat', 'http://salondesmetiersdart.com', 'http://billetterie.salondesmetiersdart.com', 'Halle des Arts, Bordeaux', 1500, TRUE, TRUE, TRUE, 0, 1),
('Exposition de Sculpture', '2024-10-01', '2024-10-05', '2024-09-20', 'Exposition des sculptures modernes', 'http://exposculpture.com', 'http://billetterie.exposculpture.com', 'Musée des Beaux-Arts, Paris', 500, TRUE, TRUE, TRUE, 0, 1),
('Conférence sur l Innovation', '2024-11-15', '2024-11-17', '2024-11-05', 'Conférence sur les dernières innovations technologiques', 'http://conferencesurinnovation.com', 'http://billetterie.conferencesurinnovation.com', 'Centre de Conférence, Lyon', 1200, TRUE, TRUE, FALSE, 18, 1),
('Festival de la Bande Dessinée', '2024-06-10', '2024-06-12', '2024-06-01', 'Festival dédié aux amateurs de bandes dessinées', 'http://festivalbd.com', 'http://billetterie.festivalbd.com', 'Parc des Expositions, Paris', 8000, TRUE, TRUE, TRUE, 0, 1),
('Marathon de Nice', '2024-04-22', '2024-04-22', '2024-04-10', 'Marathon annuel de Nice', 'http://marathondenice.com', 'http://billetterie.marathondenice.com', 'Promenade des Anglais, Nice', 20000, TRUE, TRUE, TRUE, 18, 1),
('Salon de la Mode', '2024-09-18', '2024-09-21', '2024-09-10', 'Salon des dernières tendances de la mode', 'http://salondelamode.com', 'http://billetterie.salondelamode.com', 'Palais des Congrès, Paris', 15000, TRUE, TRUE, TRUE, 0, 1),
('Compétition de Surf', '2024-08-20', '2024-08-23', '2024-08-10', 'Compétition internationale de surf', 'http://competitiondesurf.com', 'http://billetterie.competitiondesurf.com', 'Plage de Biarritz, Biarritz', 4000, TRUE, TRUE, TRUE, 18, 1),
('Conférence sur l Éducation', '2024-11-10', '2024-11-12', '2024-11-01', 'Conférence sur les nouvelles méthodes d éducation', 'http://conferencesureducation.com', 'http://billetterie.conferencesureducation.com', 'Université, Bordeaux', 800, TRUE, TRUE, FALSE, 18, 1),
('Festival du Vin', '2024-10-20', '2024-10-22', '2024-10-10', 'Festival des vins et des vignobles', 'http://festivalduvin.com', 'http://billetterie.festivalduvin.com', 'Château de Bordeaux, Bordeaux', 2500, TRUE, TRUE, TRUE, 18, 1),
('Exposition de Peinture', '2024-06-05', '2024-06-10', '2024-05-25', 'Exposition de peintures contemporaines', 'http://expopeinture.com', 'http://billetterie.expopeinture.com', 'Musée d Art Moderne, Lyon', 1000, TRUE, TRUE, TRUE, 0, 1),
('Festival de Rock', '2024-07-15', '2024-07-17', '2024-07-05', 'Festival de rock avec des groupes internationaux', 'http://festivalderock.com', 'http://billetterie.festivalderock.com', 'Stade de France, Paris', 50000, TRUE, TRUE, TRUE, 18, 1),
('Salon de l Informatique', '2024-09-05', '2024-09-08', '2024-08-25', 'Salon des nouvelles technologies informatiques', 'http://salondelinfo.com', 'http://billetterie.salondelinfo.com', 'Palais des Congrès, Lyon', 10000, TRUE, TRUE, TRUE, 0, 1),
('Compétition de Natation', '2024-07-12', '2024-07-15', '2024-07-05', 'Compétition nationale de natation', 'http://competitiondenatation.com', 'http://billetterie.competitiondenatation.com', 'Piscine Olympique, Paris', 3000, TRUE, TRUE, TRUE, 12, 1),
('Conférence sur la Robotique', '2024-10-25', '2024-10-27', '2024-10-15', 'Conférence sur les avancées en robotique', 'http://conferencesurrobotique.com', 'http://billetterie.conferencesurrobotique.com', 'Université, Marseille', 1200, TRUE, TRUE, FALSE, 18, 1),
('Festival du Livre', '2024-11-18', '2024-11-22', '2024-11-08', 'Festival international du livre', 'http://festivaldulivre.com', 'http://billetterie.festivaldulivre.com', 'Centre des Congrès, Bordeaux', 6000, TRUE, TRUE, TRUE, 0, 1),
('Marathon de Marseille', '2024-05-25', '2024-05-25', '2024-05-15', 'Marathon annuel de Marseille', 'http://marathondemarseille.com', 'http://billetterie.marathondemarseille.com', 'Vieux-Port, Marseille', 22000, TRUE, TRUE, TRUE, 18, 1),
('Salon de la Photographie', '2024-08-28', '2024-08-30', '2024-08-18', 'Salon des nouveautés en photographie', 'http://salondelaphotographie.com', 'http://billetterie.salondelaphotographie.com', 'Palais des Congrès, Nice', 4000, TRUE, TRUE, TRUE, 0, 1),
('Conférence sur la Santé Mentale', '2024-06-18', '2024-06-20', '2024-06-08', 'Conférence sur les nouvelles recherches en santé mentale', 'http://conferencesursantementale.com', 'http://billetterie.conferencesursantementale.com', 'Université, Paris', 900, TRUE, TRUE, FALSE, 18, 1),
('Festival de Musique Classique', '2024-07-25', '2024-07-28', '2024-07-15', 'Festival de musique classique avec des orchestres du monde entier', 'http://festivalmusiqueclassique.com', 'http://billetterie.festivalmusiqueclassique.com', 'Opéra Garnier, Paris', 4500, TRUE, TRUE, TRUE, 18, 1),
('Exposition de Photographie', '2024-05-15', '2024-05-20', '2024-05-05', 'Exposition de photographies contemporaines', 'http://exposphotographie.com', 'http://billetterie.exposphotographie.com', 'Musée d Art Moderne, Marseille', 800, TRUE, TRUE, TRUE, 0, 1),
('Conférence sur la Biodiversité', '2024-09-18', '2024-09-20', '2024-09-10', 'Conférence sur la protection de la biodiversité', 'http://conferencesurbiodiversite.com', 'http://billetterie.conferencesurbiodiversite.com', 'Université, Lyon', 1000, TRUE, TRUE, FALSE, 18, 1),
('Festival des Films Indépendants', '2024-11-22', '2024-11-26', '2024-11-12', 'Festival des films indépendants du monde entier', 'http://festivalfilmsindependants.com', 'http://billetterie.festivalfilmsindependants.com', 'Cinéma Gaumont, Paris', 3500, TRUE, TRUE, TRUE, 18, 1),
('Compétition d Escalade', '2024-06-22', '2024-06-24', '2024-06-12', 'Compétition internationale d escalade', 'http://competitionescalade.com', 'http://billetterie.competitionescalade.com', 'Centre d Escalade, Marseille', 2000, TRUE, TRUE, TRUE, 18, 1),
('Salon de l Artisanat', '2024-10-02', '2024-10-06', '2024-09-22', 'Salon des métiers de l artisanat', 'http://salondelartisanat.com', 'http://billetterie.salondelartisanat.com', 'Parc des Princes',7500, TRUE, TRUE, TRUE, 0, 1);

INSERT INTO photo_for_avent(photo_id,avent_id) VALUES
(1,1),
(1,2),
(1,3),
(1,4),
(1,5),
(1,6),
(1,7),
(1,8),
(1,9),
(1,10),
(1,11);

-- Insert data into fav_avent_for_user
INSERT INTO fav_avent_for_user (user_id, avent_id) VALUES 
(1, 1), 
(2, 2), 
(3, 3), 
(4, 4), 
(5, 5);

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

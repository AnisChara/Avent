USE db_avent;




-- Insert data into brand
INSERT INTO brand (brand_name, siret) VALUES 
("TechCorp", 12345678901234),
("EcoSolutions", 23456789012345),
("HealthPlus", 34567890123456),
("GreenFuture", 45678901234567),
("InnovateX", 56789012345678);

-- Insert data into user
INSERT INTO user (nom, prenom, email, pseudo, mot_de_passe, date_naissance, is_verif, is_brand, genre) VALUES
("Dupont", "Jean", "jean.dupont@example.com", "jdupont", "password123", "1985-06-15", TRUE, null, 1),
("Martin", "Sophie", "sophie.martin@example.com", "smartin", "password123", "1990-08-22", TRUE,null, 2),
("Lefevre", "Luc", "luc.lefevre@example.com", "llefevre", "password123", "1988-02-10", FALSE, 2, 3),
("Bernard", "Marie", "marie.bernard@example.com", "mbernard", "password123", "1992-11-05", TRUE, 3, 1),
("Dubois", "Paul", "paul.dubois@example.com", "pdubois", "password123", "1987-04-18", FALSE, null, 2);

INSERT INTO fav_theme_for_user(user_id,theme_id) VALUES

('1','1'),
('1','2'),
('1','3');
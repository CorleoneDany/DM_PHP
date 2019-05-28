-- Ajout des bases de données et des tables --

CREATE DATABASE IF NOT EXISTS bibliotheque;
USE bibliotheque;
CREATE TABLE abonne(
  id_abonne INT(3) AUTO_INCREMENT,
  prenom VARCHAR(25),
  CONSTRAINT PK_abonne PRIMARY KEY (id_abonne)
);

CREATE TABLE emprunt(
  id_emprunt INT(3) AUTO_INCREMENT,
  id_livre INT(3),
  id_abonne INT(3),
  date_sortie DATE,
  date_rendu DATE DEFAULT NULL,
  CONSTRAINT PK_emprunt PRIMARY KEY (id_emprunt),
  CONSTRAINT FK_livre FOREIGN KEY (id_livre) REFERENCES livre(id_livre),
  CONSTRAINT FK_abonne FOREIGN KEY (id_abonne) REFERENCES abonne(id_abonne)
);

CREATE TABLE livre(
  id_livre INT(3) AUTO_INCREMENT=100,
  auteur VARCHAR(25),
  titre VARCHAR(50),
  CONSTRAINT PK_livre PRIMARY KEY (id_livre)
);
-- Insertion des prenoms dans la table abonné --
INSERT INTO abonne (prenom)
VALUES ('Guillaume'), ('Benoit'), ('Chloe'), ('Laura');
-- Insertion des données dans la table livre --
INSERT INTO livre (auteur, titre)
VALUES ('GUY DE MAUPASSANT', 'Une vie'),
('GUY DE MAUPASSANT', 'Bel-Ami'),
('HONORE DE BALZAC', 'Le pere Goriot'),
('ALPHONE DAUDET', 'Le Petit Chose'),
('ALEXANDRE DUMAS', 'La Reine Margot'),
('ALEXANDRE DUMAS', 'Les Trois Mousquetaires');

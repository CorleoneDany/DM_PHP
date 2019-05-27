CREATE DATABASE bibliotheque;
CREATE TABLE abonne(
    id_abonne INT(3),
    prenom VARCHAR(25),
    CONSTRAINT PK_abonne PRIMARY KEY (id_abonne)
);

CREATE TABLE emprunt(
    id_emprunt INT(3),
    id_livre INT(3),
    id_abonne INT(3),
    date_sortie DATE,
    date_rendu DATE DEFAULT NULL,
    CONSTRAINT PK_emprunt PRIMARY KEY (id_emprunt)
);

CREATE TABLE livre(
    id_livre INT(3),
    auteur VARCHAR(25),
    titre VARCHAR(50),
    CONSTRAINT PK_livre PRIMARY KEY (id_livre)
);
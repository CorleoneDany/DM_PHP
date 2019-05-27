CREATE DATABASE bibliotheque;
CREATE TABLE abonne(
    id_abonne INT(3),
    prenom VARCHAR(25)
);
CREATE TABLE emprunt(
    id_emprunt INT(3),
    id_livre INT(3),
    id_abonne INT(3),
    date_sortie DATE,
    date_rendu DATE
)

CREATE TABLE livre(
    id_livre INT(3),
    auteur VARCHAR(25),
    titre VARCHAR(50)
)
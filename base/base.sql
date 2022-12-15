CREATE DATABASE immobilier;
use immobilier;
CREATE TABLE client(
    idclient INT(6) PRIMARY KEY,
    nom VARCHAR(90),
    mdp VARCHAR(90),
    email VARCHAR(90),
    tel VARCHAR(10)
);
CREATE TABLE habitation(
    idHabitation INT(6) PRIMARY KEY,
    type_habitation VARCHAR(90),
    nombre_de_chambres INT(6),
    loyer_par_jour INT(10),
    photo VARCHAR(200),
    quartier VARCHAR(90),
    description  VARCHAR(90),
);
CREATE TABLE reservation(
    idReservation INT(6) PRIMARY KEY,
    idClient INT(6),
    idHabitation INT(6),
    arriver timestamp,
    depart timestamp,
    FOREIGN KEY (idClient) REFERENCES client(idclient),
    FOREIGN KEY (idHabitation) REFERENCES habitation(idHabitation)
);

CREATE SEQUENCE idclient;
CREATE SEQUENCE idhabitation;
CREATE SEQUENCE idReservation;

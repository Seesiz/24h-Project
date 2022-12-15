CREATE TABLE client(
    idclient NUMERIC PRIMARY KEY,
    nom VARCHAR(90),
    mdp VARCHAR(90),
    email VARCHAR(90),
    tel VARCHAR(10)
);
CREATE TABLE habitation(
    idhabitation NUMERIC PRIMARY KEY,
    type_habitation VARCHAR(90),
    nombre_de_chambres NUMERIC,
    loyer_par_jour NUMERIC,
    photo VARCHAR(200),
    quartier VARCHAR(90),
    description  VARCHAR(90)
);

CREATE TABLE reservation(
    idReservation NUMERIC PRIMARY KEY,
    idClient NUMERIC,
    idHabitation NUMERIC,
    arriver timestamp,
    depart timestamp,
    FOREIGN KEY (idClient) REFERENCES client(idclient),
    FOREIGN KEY (idHabitation) REFERENCES habitation(idHabitation)
);

CREATE SEQUENCE idclient;
CREATE SEQUENCE idhabitation;
CREATE SEQUENCE idReservation;
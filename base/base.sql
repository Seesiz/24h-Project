CREATE DATABASE immobilier;
use immobilier;
CREATE TABLE client(
    idclient INT(6)  PRIMARY KEY,
    nom VARCHAR(90),
    mdp VARCHAR(90),
    email VARCHAR(90),
    tel VARCHAR(10),
    date_arriver VARCHAR(10),
    date_depart VARCHAR(10)
);
CREATE TABLE habitation(
    idhabitation INT(6)  PRIMARY KEY,
    idclient INT(6) ,
    type_ habitation  VARCHAR(90),
    nombre_de_chambres INT(6),
    loyer_par_jour INT(10),
    photo VARCHAR(200),
    quartier VARCHAR(90),
    description  VARCHAR(90),
    resever INT(6)
    
);

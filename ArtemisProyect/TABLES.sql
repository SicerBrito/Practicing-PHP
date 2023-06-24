-- Active: 1687434299783@@127.0.0.1@3306@tabla
CREATE DATABASE tabla;
USE tabla;

DROP TABLE IF EXISTS Countries;
DROP TABLE IF EXISTS Cities;
DROP TABLE IF EXISTS Regions;
DROP TABLE IF EXISTS Housetype;
DROP TABLE IF EXISTS Persons;
DROP TABLE IF EXISTS Living_place;


CREATE TABLE Housetype(
    id_housetype INT NOT NULL,
    name_housetype VARCHAR(50) NOT NULL,
    PRIMARY KEY (id_housetype),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE Countries(
    id_country INT NOT NULL AUTO_INCREMENT,
    name_country VARCHAR(50) NOT NULL,
    PRIMARY KEY (id_country),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Regions(
    id_region INT NOT NULL AUTO_INCREMENT,
    name_region VARCHAR(50) NOT NULL,
    country_id INT NOT NULL,
    PRIMARY KEY (id_region),
    FOREIGN KEY (country_id) REFERENCES Countries (id_country),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Cities(
    id_city INT NOT NULL AUTO_INCREMENT,
    name_city VARCHAR(50) NOT NULL,
    region_id INT NOT NULL,
    PRIMARY KEY (id_city),
    FOREIGN KEY (region_id) REFERENCES Regions (id_region),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Persons(
    id_person INT NOT NULL AUTO_INCREMENT,
    firsname_person VARCHAR(50) NOT NULL,
    lastname_person VARCHAR(50) NOT NULL,
    birthdate_person DATE NOT NULL,
    city_id INT NOT NULL,
    PRIMARY KEY (id_person),
    FOREIGN KEY (city_id) REFERENCES Cities (id_city),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Living_place(
    id_living INT NOT NULL AUTO_INCREMENT,
    rooms_living INT NOT NULL,
    bathrooms_living INT NOT NULL,
    kitchen_living INT NOT NULL,
    tvroom_living INT NOT NULL,
    patio_living INT NOT NULL,
    pool_living INT NOT NULL,
    barbecue_living INT NOT NULL,
    image_living VARCHAR(50) NOT NULL,
    person_id INT NOT NULL,
    city_id INT NOT NULL,
    housetype_id INT NOT NULL,
    PRIMARY KEY (id_living),
    FOREIGN KEY (person_id) REFERENCES Persons(id_person),
    FOREIGN KEY (city_id) REFERENCES Cities(id_city),
    FOREIGN KEY (housetype_id) REFERENCES Housetype(id_housetype),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
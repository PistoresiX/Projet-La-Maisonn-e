CREATE DATABASE LA_MAISONNEE
************************

CREATE TABLE employee(                  /Créer la table employée
   empl_id INT,
   empl_lastname VARCHAR(50),
   empl_firstname VARCHAR(50),
   empl_password VARCHAR(50),
   empl_role LOGICAL,
   PRIMARY KEY(empl_id)                 /clé primaire
*************************

CREATE TABLE partner(                   /Créer la table partenaire
   part_id INT,
   part_name VARCHAR(50),
   part_email VARCHAR(50),
   part_adress VARCHAR(250),
   part_city VARCHAR(50),
   part_phone VARCHAR(10),
   part_files VARCHAR(250),
   PRIMARY KEY(part_id)                 /clé primaire
**************************

CREATE TABLE team(                      /table équipe
   team_id INT,
   team_name VARCHAR(50),
   PRIMARY KEY(team_id)                 /clé primaire
**********************

CREATE TABLE media(                     /table médias
   med_id INT,
   med_files VARCHAR(50),
   med_format VARCHAR(50),
   med_date_add DATE,
   PRIMARY KEY(med_id)                  /clé primaire
**********************

CREATE TABLE files(                     /table fichier
   fil_id INT,
   fil_name VARCHAR(50),
   fil_format VARCHAR(10),
   fil_date_add DATE,
   PRIMARY KEY(fil_id)                  /clé primaire
**********************

CREATE TABLE categorie(                 /table catégorie
   cat_id INT,
   cat_name VARCHAR(50),
   PRIMARY KEY(cat_id)                  /clé primaire
*********************

CREATE TABLE class(                     /table classer
   cla_id INT,
   cla_name VARCHAR(50),
   PRIMARY KEY(cla_id)                  /clé primaire
********************

CREATE TABLE actuality(                 /table actualité
   actu_id INT,
   actu_title VARCHAR(50),
   actu_text TEXT,
   actu_date_add DATETIME,
   cla_id INT NOT NULL,
   PRIMARY KEY(actu_id),                /clé primaire
   FOREIGN KEY(cla_id) REFERENCES class(cla_id)             /clé étrangère référencié à cla_id
*********************

CREATE TABLE organize(                  /table organiser
   empl_id INT,
   team_id INT, 
   PRIMARY KEY(empl_id, team_id),       /clé primaire
   FOREIGN KEY(empl_id) REFERENCES employee(empl_id),       /clé étrangère référencié à empl_id
   FOREIGN KEY(team_id) REFERENCES team(team_id)
**********************

CREATE TABLE moderate(                  /table modérer
   empl_id INT,
   actu_id INT,
   PRIMARY KEY(empl_id, actu_id),       /clé primaire
   FOREIGN KEY(empl_id) REFERENCES employee(empl_id),       /clé étrangère référencié à empl_id
   FOREIGN KEY(actu_id) REFERENCES actuality(actu_id)       /clé étrangère référencié à actu_id
********************

CREATE TABLE store(                     /table stocker
   fil_id INT,
   cat_id INT,
   PRIMARY KEY(fil_id, cat_id),         /clé primaire
   FOREIGN KEY(fil_id) REFERENCES files(fil_id),            /clé étrangère référencié à fil_id
   FOREIGN KEY(cat_id) REFERENCES categorie(cat_id)         /clé étrangère référencié à cat_id
*********************

CREATE TABLE detail(                    /table détail
   actu_id INT,
   med_id INT,
   PRIMARY KEY(actu_id, med_id),        /clé primaire
   FOREIGN KEY(actu_id) REFERENCES actuality(actu_id),      /clé étrangère référencié à actu_id
   FOREIGN KEY(med_id) REFERENCES media(med_id)             /clé étrangère référencié à med_id


CREATE TABLE consult(                    /table consulter
   team_id INT,
   fil_id INT,
   PRIMARY KEY(team_id, fil_id),         /clé primaire
   FOREIGN KEY(team_id) REFERENCES team(team_id),            /clé étrangère référencié à team_id
   FOREIGN KEY(fil_id) REFERENCES files(fil_id)              /clé étrangère référencié à fil_id
********************
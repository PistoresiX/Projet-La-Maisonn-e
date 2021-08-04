CREATE DATABASE LA_MAISONNEE
;

CREATE TABLE employee(
   empl_id INT,
   empl_lastname VARCHAR(50),
   empl_firstname VARCHAR(50),
   empl_password VARCHAR(50),
   empl_role LOGICAL,
   PRIMARY KEY(empl_id)
);

CREATE TABLE partner(
   part_id INT,
   part_name VARCHAR(50),
   part_email VARCHAR(50),
   part_adress VARCHAR(250),
   part_city VARCHAR(50),
   part_phone VARCHAR(10),
   part_files VARCHAR(250),
   PRIMARY KEY(part_id)
);

CREATE TABLE team(
   team_id INT,
   team_name VARCHAR(50),
   PRIMARY KEY(team_id)
);

CREATE TABLE media(
   med_id INT,
   med_files VARCHAR(50),
   med_format VARCHAR(50),
   med_date_add DATE,
   PRIMARY KEY(med_id)
);

CREATE TABLE files(
   fil_id INT,
   fil_name VARCHAR(50),
   fil_format VARCHAR(10),
   fil_date_add DATE,
   PRIMARY KEY(fil_id)
);

CREATE TABLE categorie(
   cat_id INT,
   cat_name VARCHAR(50),
   PRIMARY KEY(cat_id)
);

CREATE TABLE class(
   cla_id INT,
   cla_name VARCHAR(50),
   PRIMARY KEY(cla_id)
);

CREATE TABLE actuality(
   actu_id INT,
   actu_title VARCHAR(50),
   actu_text TEXT,
   actu_date_add DATETIME,
   cla_id INT NOT NULL,
   PRIMARY KEY(actu_id),
   FOREIGN KEY(cla_id) REFERENCES class(cla_id)
);

CREATE TABLE organize(
   empl_id INT,
   team_id INT,
   PRIMARY KEY(empl_id, team_id),
   FOREIGN KEY(empl_id) REFERENCES employee(empl_id),
   FOREIGN KEY(team_id) REFERENCES team(team_id)
);

CREATE TABLE moderate(
   empl_id INT,
   actu_id INT,
   PRIMARY KEY(empl_id, actu_id),
   FOREIGN KEY(empl_id) REFERENCES employee(empl_id),
   FOREIGN KEY(actu_id) REFERENCES actuality(actu_id)
);

CREATE TABLE store(
   fil_id INT,
   cat_id INT,
   PRIMARY KEY(fil_id, cat_id),
   FOREIGN KEY(fil_id) REFERENCES files(fil_id),
   FOREIGN KEY(cat_id) REFERENCES categorie(cat_id)
);

CREATE TABLE detail(
   actu_id INT,
   med_id INT,
   PRIMARY KEY(actu_id, med_id),
   FOREIGN KEY(actu_id) REFERENCES actuality(actu_id),
   FOREIGN KEY(med_id) REFERENCES media(med_id)
);

CREATE TABLE consult(
   team_id INT,
   fil_id INT,
   PRIMARY KEY(team_id, fil_id),
   FOREIGN KEY(team_id) REFERENCES team(team_id),
   FOREIGN KEY(fil_id) REFERENCES files(fil_id)
);

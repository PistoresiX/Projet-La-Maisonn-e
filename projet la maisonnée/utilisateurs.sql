-- gestion des utilisateurs, privilège et rôles

-- Administrateurs
DROP ROLE IF EXISTS 'r_la_maisonnee_admin'@'localhost'; 
CREATE ROLE IF NOT EXISTS 'r_la_maisonnee_admin'@'localhost';                               -- creation du rôle
                           
GRANT all                                                                                   -- creation des privilèges
ON la_maisonnee.*
TO 'r_la_maisonnee_admin'@'localhost';

DROP USER IF EXISTS 'mugen'@'localhost';
CREATE USER 'mugen'@'localhost' IDENTIFIED BY '220409';                                     -- création des utilistateurs
DROP USER IF EXISTS 'thomas'@'localhost';
CREATE USER 'thomas'@'localhost' IDENTIFIED BY '147852';
DROP USER IF EXISTS 'lucas'@'localhost';
CREATE USER 'lucas'@'localhost' IDENTIFIED BY '963258';

GRANT 'r_la_maisonnee_admin'@'localhost'TO 'mugen'@'localhost';
GRANT 'r_la_maisonnee_admin'@'localhost'TO 'lucas'@'localhost';
GRANT 'r_la_maisonnee_admin'@'localhost'TO 'thomas'@'localhost';

SET DEFAULT ROLE 'r_la_maisonnee_admin'@'localhost' TO 'mugen'@'localhost'; 
SET DEFAULT ROLE 'r_la_maisonnee_admin'@'localhost' TO 'lucas'@'localhost';
SET DEFAULT ROLE 'r_la_maisonnee_admin'@'localhost' TO 'thomas'@'localhost';

-----------------------------------------

-- Utilisateurs employés

DROP ROLE IF EXISTS 'r_la_maisonnee_utilisateur'@'localhost'; 
CREATE ROLE IF NOT EXISTS 'r_la_maisonnee_utilisateur'@'localhost'; 

GRANT select 
ON  la_maisonnee.*  
TO 'r_la_maisonnee_utilisateur'@'localhost';

DROP USER IF EXISTS 'charles'@'localhost';
CREATE USER 'charles'@'localhost' IDENTIFIED BY '123456';

GRANT 'r_la_maisonnee_utilisateur'@'localhost' TO 'charles'@'localhost';
SET DEFAULT ROLE 'r_la_maisonnee_utilisateur'@'localhost' TO 'charles'@'localhost';

-----------------------------------------

CREATE DATABASE LA_MAISONNEE
;

CREATE TABLE employee(
   Id_employee COUNTER,
   emp_lastname VARCHAR(50),
   emp_firstname VARCHAR(50),
   emp_codepostal INT,
   emp_adresse VARCHAR(50),
   emp_city VARCHAR(50),
   emp_mail VARCHAR(50),
   emp_post VARCHAR(50),
   emp_phone INT,
   emp_user VARCHAR(50),
   emp_password VARCHAR(50),
   PRIMARY KEY(Id_employee)
);

CREATE TABLE quote(
   Id_quote COUNTER,
   quot_date INT,
   quot_price INT,
   quot_payement INT,
   quot_adress VARCHAR(50),
   quot_postalcode INT,
   quot_city VARCHAR(50),
   quot_statut LOGICAL,
   PRIMARY KEY(Id_quote)
);

CREATE TABLE customers(
   Id_customers COUNTER,
   cus_name VARCHAR(50),
   cus_adress VARCHAR(50),
   cus_postalcode INT,
   cus_city VARCHAR(50),
   cus_phone INT,
   cus_siret INT,
   PRIMARY KEY(Id_customers)
);

CREATE TABLE suppliers(
   Id_suppliers COUNTER,
   sup_name VARCHAR(50),
   sup_email VARCHAR(50),
   sup_city VARCHAR(50),
   sup_phone INT,
   sup_adress VARCHAR(50),
   PRIMARY KEY(Id_suppliers)
);

CREATE TABLE management(
   manag_id INT,
   manag_absence DATE,
   manag_payslip DECIMAL(15,2),
   manag_planning DATETIME,
   manag_timetable TIME,
   PRIMARY KEY(manag_id)
);

CREATE TABLE media(
   media_id INT,
   media_article VARCHAR(50),
   media_video VARCHAR(50),
   media_picture VARCHAR(50),
   media_date_ajout DATE,
   media_date_modif DATE,
   PRIMARY KEY(media_id)
);

CREATE TABLE consult(
   Id_employee INT,
   Id_customers INT,
   PRIMARY KEY(Id_employee, Id_customers),
   FOREIGN KEY(Id_employee) REFERENCES employee(Id_employee),
   FOREIGN KEY(Id_customers) REFERENCES customers(Id_customers)
);

CREATE TABLE establish(
   Id_employee INT,
   Id_quote INT,
   PRIMARY KEY(Id_employee, Id_quote),
   FOREIGN KEY(Id_employee) REFERENCES employee(Id_employee),
   FOREIGN KEY(Id_quote) REFERENCES quote(Id_quote)
);

CREATE TABLE contact(
   Id_employee INT,
   Id_suppliers INT,
   PRIMARY KEY(Id_employee, Id_suppliers),
   FOREIGN KEY(Id_employee) REFERENCES employee(Id_employee),
   FOREIGN KEY(Id_suppliers) REFERENCES suppliers(Id_suppliers)
);

CREATE TABLE organize(
   Id_employee INT,
   manag_id INT,
   PRIMARY KEY(Id_employee, manag_id),
   FOREIGN KEY(Id_employee) REFERENCES employee(Id_employee),
   FOREIGN KEY(manag_id) REFERENCES management(manag_id)
);

CREATE TABLE moderate(
   Id_employee INT,
   media_id INT,
   PRIMARY KEY(Id_employee, media_id),
   FOREIGN KEY(Id_employee) REFERENCES employee(Id_employee),
   FOREIGN KEY(media_id) REFERENCES media(media_id)
);


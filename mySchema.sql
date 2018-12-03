CREATE TABLE User (
    ID int NOT NULL AUTO_INCREMENT,
    username text NOT NULL,
    password text NOT NULL,
    email text NOT NULL,
    registration_date date,
    last_login_date date,
    PRIMARY KEY (ID)
);

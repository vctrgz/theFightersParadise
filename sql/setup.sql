DROP DATABASE IF EXISTS thefightersparadise;

CREATE DATABASE thefightersparadise;
USE thefightersparadise;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) UNIQUE,
    email VARCHAR(200) UNIQUE,
    password VARCHAR(255),
    ciudad varchar (100) DEFAULT 'Madrid',
    promotor BOOLEAN DEFAULT false,
    userImage varchar(250) DEFAULT '../static/userImage/user-2-svgrepo-com.svg'
);

CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) UNIQUE,
    ubicacion VARCHAR(100),
    fecha DATE,
    informacion LONGTEXT
);
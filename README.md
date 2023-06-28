# redesocial-filme


# QUERIES para criar banco de dados MYSQL

CREATE DATABASE rede_social_filmes;

use rede_social_filmes;

CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
lastname VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
password VARCHAR(200) NOT NULL,
image VARCHAR(200),
bio TEXT,
token VARCHAR(250)
);

CREATE TABLE movies(
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(100) NOT NULL,
description TEXT NOT NULL,
image VARCHAR(200) NOT NULL,
trailer VARCHAR(200),
category VARCHAR(45),
users_id INT,
CONSTRAINT fk_users FOREIGN KEY (users_id) REFERENCES users (id)
);

CREATE TABLE reviews(
id INT AUTO_INCREMENT PRIMARY KEY,
rating INT NOT NULL,
review VARCHAR(100) NOT NULL,
movies_id INT,
users_id INT,
CONSTRAINT fk_movies FOREIGN KEY (movies_id) REFERENCES movies (id)
);

ALTER TABLE reviews ADD CONSTRAINT fk_users_users FOREIGN KEY (users_id) REFERENCES users (id);
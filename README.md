# redesocial-filme


# Queries para criar banco de dados MYSQL
<br>
<p align = "justify">CREATE DATABASE rede_social_filmes;

use rede_social_filmes;

CREATE TABLE users(<br>
id INT AUTO_INCREMENT PRIMARY KEY,<br>
name VARCHAR(100) NOT NULL,<br>
lastname VARCHAR(100) NOT NULL,<br>
email VARCHAR(100) NOT NULL,<br>
password VARCHAR(200) NOT NULL,<br>
image VARCHAR(200),<br>
bio TEXT,<br>
token VARCHAR(250)<br>
);<br>

CREATE TABLE movies(<br>
id INT AUTO_INCREMENT PRIMARY KEY,<br>
title VARCHAR(100) NOT NULL,<br>
description TEXT NOT NULL,<br>
image VARCHAR(200) NOT NULL,<br>
trailer VARCHAR(200),<br>
category VARCHAR(45),<br>
users_id INT,<br>
CONSTRAINT fk_users FOREIGN KEY (users_id) REFERENCES users (id)<br>
);

CREATE TABLE reviews(<br>
id INT AUTO_INCREMENT PRIMARY KEY,<br>
rating INT NOT NULL,<br>
review VARCHAR(100) NOT NULL,<br>
movies_id INT,<br>
users_id INT,<br>
CONSTRAINT fk_movies FOREIGN KEY (movies_id) REFERENCES movies (id)<br>
);

ALTER TABLE reviews ADD CONSTRAINT fk_users_users FOREIGN KEY (users_id) REFERENCES users (id);
</p>
<br>

# Fim da criação do Banco

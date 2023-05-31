-- Create app database.
CREATE DATABASE IF NOT EXISTS appdatabase;

-- Theese scripts create tables, with the exam preferences.
CREATE TABLE IF NOT EXISTS appdatabase.users(
	id int NOT NULL AUTO_INCREMENT,
	name varchar(20),
	PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS appdatabase.advertisements(
	id int NOT NULL AUTO_INCREMENT,
	userid int,
	title varchar(20),
	PRIMARY KEY(id),
	FOREIGN KEY (userid) REFERENCES users(id)
);
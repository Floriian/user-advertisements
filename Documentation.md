# Users - Advertisements

## Folder Structure

```
sql
 ┣ 1_create_database_and_tables.sql
 ┗ 2_create_data.sql
src
 ┣ controllers
 ┃ ┣ advertisements.controller.php
 ┃ ┗ user.controller.php
 ┣ models
 ┃ ┣ advertisements.model.php
 ┃ ┗ user.model.php
 ┗ views
 ┃ ┣ advertisements
 ┃ ┃ ┗ index.php
 ┃ ┣ users
 ┃ ┃ ┗ index.php
 ┃ ┣ footer.php
 ┃ ┣ header.php
 ┃ ┣ index.php
 ┃ ┗ style.css
 ┃   .htaccess
 ┃   .database.php
 ┃   .db_erdiagram.png
 ┃   docker-compose.yaml
 ┃   Dockerfile
 ┃   Documentation.md
 ┃   index.php
 ┃   routes.php

```

**SQL folder:**

In the "sql" folder there are SQL files, which are required to apply before you going to run the app.

The first file (1_create_database_andtables.sql) creates the database & tables.
The database schema looks like this:

![Database ER Diagram](/db_erdiagram.png)

The second file (2_create_data.sql) creates data on the MySQL server.

The file name starts with numbers, and after the numbers a short description of what the SQL file does. Please apply the correct sequence. If you use docker, it executes automatically in alphabetical order. I think the best practice is to put numbers before the short description.

**SRC folder:**

The screen folder contains the project's 80% source code. The project uses MVC (Model-View-Controller) design pattern. If you add a new feature, please follow this pattern.

**.htaccess:**

It redirects all requests to the "index.php" file. About "index.php" file you can read about down.

**database.php**

Contains the database connection.

**db_erdiagram.png**

A picture of the database ER Diagram.

**docker-compose.yaml**:

The docker-compose file contains 2 services. One is for the database (MYSQL), and the other one is for the app. It uses docker networks, which enable communication between the 2 apps.

**Dockerfile:**

A custom PHP image file, to enable "mysqli" and the "rewrite" engine. The PHP image is based on the Apache image but with a PHP module. It doesn't enable "mysqli" and ReWriteEngine by default.

**Documentation.md:**
Documentation.

**index.php:**

This file bootstrap the app.

**routes.php**

Here you can add the new routes.

## Running the app:

**With Docker:**

If you installed Docker & Docker Compose on your PC, it's easy. Go to the root folder, and open a terminal.
In the terminal please type the following command:

```bash
docker compose up -d
```

Please be patient, it takes to the SQL server to start up.

After the docker compose started, you can reach the app in "localhost:8000" address.

**Without Docker**

You need LAMP/XAMPP/WAMP to be installed on your system.

1. Go to "sql/" folder, and apply these SQL files with the correct sequence.
2. Open database.php with a text editor, and modify line 8 with your MySQL credentials.
3. Create a folder in your www folder.
4. Copy the source code to the previously created folder.
5. Open the app in your browser. By default, it is "localhost:80/FOLDER_YOU_CREATED_ON_3RD_STEP"

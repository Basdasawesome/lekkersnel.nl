DROP DATABASE IF EXISTS lekkersneldb;
CREATE DATABASE lekkersneldb;
USE lekkersneldb;

CREATE TABLE Users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    profile_picture VARCHAR(255) DEFAULT 'img/default-avatar.png',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Recipes (
    recipe_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    title VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    image TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE
);

CREATE TABLE Ingredients (
    ingredient_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) UNIQUE NOT NULL,
    unit VARCHAR(50) NULL
);

CREATE TABLE Recipe_Ingredients (
    recipe_id INT NOT NULL,
    ingredient_id INT NOT NULL,
    quantity VARCHAR(50) NOT NULL, 
    PRIMARY KEY (recipe_id, ingredient_id),
    FOREIGN KEY (recipe_id) REFERENCES Recipes(recipe_id) ON DELETE CASCADE,
    FOREIGN KEY (ingredient_id) REFERENCES Ingredients(ingredient_id) ON DELETE CASCADE
);

CREATE TABLE Instructions (
    instruction_id INT PRIMARY KEY AUTO_INCREMENT,
    recipe_id INT NOT NULL,
    step_number INT NOT NULL,
    instruction_text TEXT NOT NULL,
    FOREIGN KEY (recipe_id) REFERENCES Recipes(recipe_id) ON DELETE CASCADE
);

CREATE TABLE PreparationTime (
    recipe_id INT PRIMARY KEY,
    time_value INT NOT NULL, 
    time_unit ENUM('seconds', 'minutes', 'hours') NOT NULL, 
    FOREIGN KEY (recipe_id) REFERENCES Recipes(recipe_id) ON DELETE CASCADE
);

-- Dummy Users 
INSERT INTO Users (username, email, password_hash) VALUES
('user1', 'user1@example.com', SHA2('password1', 256)),
('user2', 'user2@example.com', SHA2('password2', 256)),
('user3', 'user3@example.com', SHA2('password3', 256)),
('user4', 'user4@example.com', SHA2('password4', 256)),
('user5', 'user5@example.com', SHA2('password5', 256));

INSERT INTO Users (username, email, password_hash, profile_picture) VALUES
('admin', 'admin@gmail.com', '$2y$10$HMKk9xx0ppDVUr6plK5THuyLuwnb4rxJV3Edy6pr5AcBx6LGO3adm', 'img/pfp.png');

-- Dummy Recipes
INSERT INTO Recipes (user_id, title, description, image) VALUES
(1, 'Pannenkoeken', 'Heerlijke luchtige pannenkoeken voor het ontbijt of als snack.', 'https://www.flyingfoodie.nl/wp-content/uploads/2017/10/Echte-hollandse-pannenkoeken.jpg'),
(2, 'Pizza margherita', 'Een simpele pizza kan zo lekker zijn.', 'https://www.leukerecepten.nl/app/uploads/2023/02/pizza-margharita.jpg'),
(3, 'Cheeseburger', 'Geniet van een heerlijke klassieke cheeseburger!', 'https://www.leukerecepten.nl/app/uploads/2023/06/cheeseburger.jpg');

-- Dummy Ingredients 
INSERT INTO Ingredients (name, unit) VALUES
('Bloem', 'g'),
('Melk', 'ml'),
('Eieren', 'stuks'),
('Zout', 'snufje'),
('Pizzasaus', 'ml'),
('Kaas', 'g'),
('Basilicum', 'handje'),
('Mozzarella', 'bol'),
('Pizzadeeg', NULL), 
('Hamburgerbroodje', 'stuks'),
('Burger', 'stuks'),
('Cheddar kaas', 'plakken'),
('Rode ui', 'stuks'),
('Augurk', 'stuks'),
('Tomaat', 'stuks'),
('Mayonaise', 'eetlepels'),
('Ketchup', 'eetlepels');

-- Dummy Recipe_Ingredients (INSERT THIS LAST)
INSERT INTO Recipe_Ingredients (recipe_id, ingredient_id, quantity) VALUES
(1, 1, '200'), 
(1, 2, '500'), 
(1, 3, '2'), 
(1, 4, '1'), 
(2, 5, '200'), 
(2, 6, '100'), 
(2, 7, '1'), 
(2, 8, '1'), 
(3, 10, '2'), 
(3, 11, '2'), 
(3, 12, '4'), 
(3, 13, '1'),
(3, 14, '2'), 
(3, 15, '1'), 
(3, 16, '2'), 
(3, 17, '2');

-- Dummy Instructions
INSERT INTO Instructions (recipe_id, step_number, instruction_text) VALUES
(1, 1, 'Meng de bloem met de melk.'),
(1, 2, 'Voeg de eieren toe en mix goed.'),
(1, 3, 'Voeg een snufje zout toe en meng.'),
(1, 4, 'Bak de pannenkoeken in een hete pan.'),
(2, 1, 'Bereid het pizzadeeg volgens het recept.'),
(2, 2, 'Verwarm de oven voor op 240 graden.'),
(2, 3, 'Verdeel de saus en toppings over het deeg.'),
(2, 4, 'Bak de pizza 15 minuten in de oven.');

-- Dummy Preparation Time
INSERT INTO PreparationTime (recipe_id, time_value, time_unit) VALUES
(1, 15, 'minutes'),
(2, 20, 'minutes'),
(3, 25, 'minutes');

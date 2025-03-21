-- Stap 1: Maak de database aan
DROP DATABASE IF EXISTS lekkersneldb;
CREATE DATABASE lekkersneldb;
USE lekkersneldb;

-- Stap 2: Maak de Users-tabel aan
CREATE TABLE Users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    profile_picture VARCHAR(255) DEFAULT 'img/default-avatar.png',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Stap 3: Maak de Recipes-tabel aan
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

-- Stap 4: Maak een Ingredients-tabel aan
CREATE TABLE Ingredients (
    ingredient_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) UNIQUE NOT NULL
);

-- Stap 5: Maak een koppeltabel tussen recepten en ingrediënten
CREATE TABLE Recipe_Ingredients (
    recipe_id INT NOT NULL,
    ingredient_id INT NOT NULL,
    quantity VARCHAR(50) NOT NULL, -- Bijvoorbeeld "200g", "2 stuks"
    unit VARCHAR(50) NULL, -- Optioneel: "gram", "ml", "stuks", enz.
    PRIMARY KEY (recipe_id, ingredient_id),
    FOREIGN KEY (recipe_id) REFERENCES Recipes(recipe_id) ON DELETE CASCADE,
    FOREIGN KEY (ingredient_id) REFERENCES Ingredients(ingredient_id) ON DELETE CASCADE
);

-- Stap 6: Maak een Instructions-tabel aan voor stappen per recept
CREATE TABLE Instructions (
    instruction_id INT PRIMARY KEY AUTO_INCREMENT,
    recipe_id INT NOT NULL,
    step_number INT NOT NULL,
    instruction_text TEXT NOT NULL,
    FOREIGN KEY (recipe_id) REFERENCES Recipes(recipe_id) ON DELETE CASCADE
);

-- Stap 7: Maak een PreparationTime-tabel aan
CREATE TABLE PreparationTime (
    recipe_id INT PRIMARY KEY,
    time_value INT NOT NULL, -- Bijvoorbeeld 30
    time_unit ENUM('seconds', 'minutes', 'hours') NOT NULL, -- Minuten, uren etc.
    FOREIGN KEY (recipe_id) REFERENCES Recipes(recipe_id) ON DELETE CASCADE
);

-- Dummy data voor Users
INSERT INTO Users (username, email, password_hash) VALUES
('user1', 'user1@example.com', SHA2('password1', 256)),
('user2', 'user2@example.com', SHA2('password2', 256)),
('user3', 'user3@example.com', SHA2('password3', 256)),
('user4', 'user4@example.com', SHA2('password4', 256)),
('user5', 'user5@example.com', SHA2('password5', 256));

-- Apart invoeren voor de admin, omdat deze een extra kolom (profile_picture) bevat
INSERT INTO Users (username, email, password_hash, profile_picture) VALUES
('admin', 'admin@gmail.com', '$2y$10$HMKk9xx0ppDVUr6plK5THuyLuwnb4rxJV3Edy6pr5AcBx6LGO3adm', 'img/pfp.png');


-- Dummy data voor Recipes
INSERT INTO Recipes (user_id, title, description, image) VALUES
(1, 'Pannenkoeken', 'Heerlijke luchtige pannenkoeken voor het ontbijt of als snack.', 'https://www.flyingfoodie.nl/wp-content/uploads/2017/10/Echte-hollandse-pannenkoeken.jpg'),
(2, 'Pizza margherita', 'Een simpele pizza kan zo lekker zijn.', 'https://www.leukerecepten.nl/app/uploads/2023/02/pizza-margharita.jpg'),
(3, 'Cheeseburger', 'Geniet van een heerlijke klassieke cheeseburger!', 'https://www.leukerecepten.nl/app/uploads/2023/06/cheeseburger.jpg');

-- Dummy data voor Ingredients
INSERT INTO Ingredients (name) VALUES
('Bloem'), ('Melk'), ('Eieren'), ('Zout'), ('Pizzasaus'),
('Kaas'), ('Basilicum'), ('Mozzarella'), ('Pizzadeeg'),
('Hamburgerbroodje'), ('Burger'), ('Cheddar kaas'), ('Rode ui'),
('Augurk'), ('Tomaat'), ('Mayonaise'), ('Ketchup');

-- Dummy data voor Recipe_Ingredients
INSERT INTO Recipe_Ingredients (recipe_id, ingredient_id, quantity, unit) VALUES
(1, 1, '200', 'g'), -- 200g Bloem voor Pannenkoeken
(1, 2, '500', 'ml'), -- 500ml Melk voor Pannenkoeken
(1, 3, '2', 'stuks'), -- 2 Eieren voor Pannenkoeken
(1, 4, '1', 'snufje'), -- Snufje Zout voor Pannenkoeken
(2, 5, '200', 'ml'), -- 200ml Pizzasaus voor Pizza margherita
(2, 6, '100', 'g'), -- 100g Kaas voor Pizza margherita
(2, 7, '1', 'handje'), -- 1 handje Basilicum voor Pizza margherita
(2, 8, '1', 'bol'), -- 1 bol Mozzarella voor Pizza margherita
(3, 10, '2', 'stuks'), -- 2 Hamburgerbroodjes voor Cheeseburger
(3, 11, '2', 'stuks'), -- 2 Burgers voor Cheeseburger
(3, 12, '4', 'plakken'), -- 4 plakken Cheddar kaas voor Cheeseburger
(3, 13, '1', 'stuks'), -- 1 Rode ui voor Cheeseburger
(3, 14, '2', 'stuks'), -- 2 Augurken voor Cheeseburger
(3, 15, '1', 'stuks'), -- 1 Tomaat voor Cheeseburger
(3, 16, '2', 'eetlepels'), -- 2 eetlepels Mayonaise voor Cheeseburger
(3, 17, '2', 'eetlepels'); -- 2 eetlepels Ketchup voor Cheeseburger

-- Dummy data voor Instructions
INSERT INTO Instructions (recipe_id, step_number, instruction_text) VALUES
(1, 1, 'Meng de bloem met de melk.'),
(1, 2, 'Voeg de eieren toe en mix goed.'),
(1, 3, 'Voeg een snufje zout toe en meng.'),
(1, 4, 'Bak de pannenkoeken in een hete pan.'),
(2, 1, 'Bereid het pizzadeeg volgens het recept.'),
(2, 2, 'Verwarm de oven voor op 240 graden.'),
(2, 3, 'Verdeel de saus en toppings over het deeg.'),
(2, 4, 'Bak de pizza 15 minuten in de oven.');

-- Dummy data voor PreparationTime
INSERT INTO PreparationTime (recipe_id, time_value, time_unit) VALUES
(1, 15, 'minutes'),
(2, 20, 'minutes'),
(3, 25, 'minutes');


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
    name VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE Recipe_Ingredients (
    recipe_id INT NOT NULL,
    ingredient_id INT NOT NULL,
    quantity VARCHAR(50) NOT NULL,
    unit VARCHAR(50) NULL,
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
    time_unit ENUM('seconden', 'minuten', 'uur') NOT NULL, 
    FOREIGN KEY (recipe_id) REFERENCES Recipes(recipe_id) ON DELETE CASCADE
);

INSERT INTO Users (username, email, password_hash) VALUES
('user1', 'user1@example.com', SHA2('password1', 256)),
('user2', 'user2@example.com', SHA2('password2', 256)),
('user3', 'user3@example.com', SHA2('password3', 256)),
('user4', 'user4@example.com', SHA2('password4', 256)),
('user5', 'user5@example.com', SHA2('password5', 256));

INSERT INTO Users (username, email, password_hash, profile_picture) VALUES
('admin', 'admin@gmail.com', '$2y$10$HMKk9xx0ppDVUr6plK5THuyLuwnb4rxJV3Edy6pr5AcBx6LGO3adm', 'img/pfp.png');

INSERT INTO Ingredients (name) VALUES
('Bloem'), ('Melk'), ('Eieren'), ('Zout'), ('Pizzasaus'),
('Kaas'), ('Basilicum'), ('Mozzarella'), ('Pizzadeeg'),
('Hamburgerbroodje'), ('Burger'), ('Cheddar kaas'), ('Rode ui'),
('Augurk'), ('Tomaat'), ('Mayonaise'), ('Ketchup'), 
('Tortilla'), ('Kipfilet'), ('Rijst'), ('Bouillon'), ('Parmezaan'),
('Gehakt'), ('Taco kruiden'), ('Lasagnebladen'), ('Satéstokjes'),
('Pindasaus'), ('Spareribs'), ('Barbecuesaus'), ('Sushirijst'),
('Nori'), ('Sojasaus'), ('Empanada deeg'), ('Paprikapoeder');

INSERT INTO Recipes (user_id, title, description, image) VALUES
(1, 'Pannenkoeken', 'Heerlijke luchtige pannenkoeken voor het ontbijt of als snack.', 'https://www.flyingfoodie.nl/wp-content/uploads/2017/10/Echte-hollandse-pannenkoeken.jpg'),
(2, 'Pizza margherita', 'Een simpele pizza kan zo lekker zijn.', 'https://www.leukerecepten.nl/app/uploads/2023/02/pizza-margharita.jpg'),
(3, 'Cheeseburger', 'Geniet van een heerlijke klassieke cheeseburger!', 'https://www.leukerecepten.nl/app/uploads/2023/06/cheeseburger.jpg'),
(1, 'Burrito met kip', 'Lekker recept voor burrito met kip.', 'https://www.leukerecepten.nl/app/uploads/2020/05/burrito.jpg'),
(2, 'Lasagne bolognese', 'Het traditionele recept voor lasagne bolognese met een kruidige gehaktsaus.', 'https://www.leukerecepten.nl/app/uploads/2022/03/lasagne-bolognese.jpg'),
(3, 'Kipsaté', 'Kip saté is een echte klassieker!', 'https://www.leukerecepten.nl/app/uploads/2019/05/recept-kip-sate-spies.jpg'),
(4, 'Spareribs', 'Hoe maak je de lekkerste spareribs?', 'https://www.leukerecepten.nl/app/uploads/2020/07/spareribs_b.jpg'),
(5, 'Maki sushi recept', 'Deze traditionele sushi rol maak je makkelijk zelf.', 'https://www.leukerecepten.nl/app/uploads/2023/02/maki_sushi.jpg'),
(6, 'Empanadas', 'Deze empanada (gevuld deeg pasteitje) met een kruidige vulling van gehakt is ideaal voor een borrel.', 'https://images.getrecipekit.com/v1614896752_Beef-Cheese-Empanadas-Web-1_lqfa2v.jpg?aspect_ratio=4:3&quality=90&'),
(1, 'Risotto met kip', 'Makkelijk recept voor romige risotto met gerookte kip.', 'https://www.leukerecepten.nl/app/uploads/2022/04/Risotto-met-kip_c.jpg'),
(2, 'Nacho ovenschotel met gehakt', 'Een echte guilty pleasure: Mexicaanse nacho ovenschotel.', 'https://www.leukerecepten.nl/app/uploads/2022/08/Nachos-met-gehakt-1-1024x576.jpg');

INSERT INTO Recipe_Ingredients (recipe_id, ingredient_id, quantity, unit) VALUES
(4, 18, '2', 'stuks'), (4, 19, '150', 'g'), (4, 23, '1', 'zakje'), 
(5, 22, '500', 'g'), (5, 24, '1', 'zakje'), (5, 25, '8', 'stuks'),
(6, 19, '300', 'g'), (6, 26, '4', 'stuks'), (6, 27, '100', 'ml'),
(7, 28, '1', 'kg'), (7, 29, '100', 'ml'),
(8, 30, '250', 'g'), (8, 31, '5', 'vellen'), (8, 32, '2', 'eetlepels'),
(9, 33, '1', 'rol'), (9, 22, '200', 'g'), (9, 34, '1', 'tl'),
(10, 20, '200', 'g'), (10, 21, '500', 'ml'), (10, 6, '50', 'g'),
(11, 22, '300', 'g'), (11, 24, '1', 'zakje'), (11, 6, '100', 'g');

INSERT INTO Instructions (recipe_id, step_number, instruction_text) VALUES
(4, 1, 'Bak de kip gaar in een pan.'),
(4, 2, 'Warm de tortilla’s op.'),
(4, 3, 'Voeg de kip en groenten toe en rol de burrito op.'),
(5, 1, 'Verwarm de oven voor op 180 graden.'),
(5, 2, 'Maak de bolognesesaus en kook de lasagnebladen.'),
(5, 3, 'Laag om laag bouwen en 45 min bakken.'),
(6, 1, 'Snijd de kip in blokjes en marineer.'),
(6, 2, 'Rijg de kip op satéstokjes.'),
(6, 3, 'Grill of bak en serveer met pindasaus.'),
(7, 1, 'Marineer de spareribs met barbecuesaus.'),
(7, 2, 'Laat een nacht intrekken.'),
(7, 3, 'Bak 2 uur in de oven op 150 graden.'),
(8, 1, 'Kook de sushirijst en laat afkoelen.'),
(8, 2, 'Beleg het norivel en rol strak op.'),
(8, 3, 'Snijd in stukjes en serveer met sojasaus.'),
(9, 1, 'Maak de vulling met gehakt en kruiden.'),
(9, 2, 'Vul het empanadadeeg en vouw dicht.'),
(9, 3, 'Bak goudbruin in de oven of frituur.'),
(10, 1, 'Fruit ui en bak de kip mee.'),
(10, 2, 'Voeg rijst toe, roer en voeg bouillon toe.'),
(10, 3, 'Laat zacht koken en voeg kaas toe op het eind.'),
(11, 1, 'Bak gehakt rul in de pan.'),
(11, 2, 'Meng met taco kruiden en tomaat.'),
(11, 3, 'Beleg ovenschaal met nachos, gehakt en kaas.'),
(11, 4, 'Bak in oven tot kaas gesmolten is.');

INSERT INTO PreparationTime (recipe_id, time_value, time_unit) VALUES
(1, 15, 'minuten'), (2, 20, 'minuten'), (3, 25, 'minuten'),
(4, 35, 'minuten'), (5, 105, 'minuten'), (6, 50, 'minuten'),
(7, 165, 'minuten'), (8, 40, 'minuten'), (9, 35, 'minuten'),
(10, 40, 'minuten'), (11, 35, 'minuten');

INSERT INTO Recipe_Ingredients (recipe_id, ingredient_id, quantity, unit) VALUES
(1, 1, '200', 'g'), -- Bloem
(1, 2, '500', 'ml'), -- Melk
(1, 3, '2', 'stuks'), -- Eieren
(1, 4, '1', 'snufje'); -- Zout

INSERT INTO Instructions (recipe_id, step_number, instruction_text) VALUES
(1, 1, 'Doe de bloem in een grote kom.'),
(1, 2, 'Voeg langzaam de melk toe en roer met een garde.'),
(1, 3, 'Klop de eieren los en meng met het beslag.'),
(1, 4, 'Voeg een snufje zout toe voor de smaak.'),
(1, 5, 'Verhit een pan met een beetje boter.'),
(1, 6, 'Giet een soeplepel beslag in de pan en bak tot beide kanten goudbruin zijn.');

INSERT INTO Recipe_Ingredients (recipe_id, ingredient_id, quantity, unit) VALUES
(2, 5, '200', 'ml'), -- Pizzasaus
(2, 6, '100', 'g'), -- Kaas
(2, 7, '1', 'handje'), -- Basilicum
(2, 8, '1', 'bol'), -- Mozzarella
(2, 9, '1', 'portie'); -- Pizzadeeg

INSERT INTO Instructions (recipe_id, step_number, instruction_text) VALUES
(2, 1, 'Verwarm de oven voor op 220°C.'),
(2, 2, 'Rol het pizzadeeg uit op een bakplaat met bakpapier.'),
(2, 3, 'Verdeel de pizzasaus gelijkmatig over het deeg.'),
(2, 4, 'Scheur de mozzarella en verdeel over de pizza.'),
(2, 5, 'Bestrooi met kaas en verse basilicumblaadjes.'),
(2, 6, 'Bak de pizza in ca. 12-15 minuten tot de bodem knapperig is.');

INSERT INTO Recipe_Ingredients (recipe_id, ingredient_id, quantity, unit) VALUES
(3, 10, '2', 'stuks'), -- Hamburgerbroodje
(3, 11, '2', 'stuks'), -- Burger
(3, 12, '4', 'plakken'), -- Cheddar kaas
(3, 13, '1', 'stuks'), -- Rode ui
(3, 14, '2', 'stuks'), -- Augurk
(3, 15, '1', 'stuks'), -- Tomaat
(3, 16, '2', 'eetlepels'), -- Mayonaise
(3, 17, '2', 'eetlepels'); -- Ketchup

INSERT INTO Instructions (recipe_id, step_number, instruction_text) VALUES
(3, 1, 'Snijd de tomaat, augurk en rode ui in dunne plakken.'),
(3, 2, 'Bak de burgers aan beide kanten bruin en gaar in ca. 6-8 minuten.'),
(3, 3, 'Leg op het eind een plak cheddar op de warme burgers.'),
(3, 4, 'Rooster de hamburgerbroodjes kort in een pan of oven.'),
(3, 5, 'Bestrijk de onderkant met mayonaise, leg daarop de burger.'),
(3, 6, 'Voeg tomaat, augurk, ui toe en top af met ketchup en bovenkant broodje.');

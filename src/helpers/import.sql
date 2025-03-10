-- Create Database
CREATE DATABASE lekkersneldb;
USE lekkersneldb;

-- Create Users Table
CREATE TABLE Users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Create Recipes Table
CREATE TABLE Recipes (
    recipe_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    title VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    ingredients TEXT NOT NULL,
    instructions TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

-- Insert Dummy Users
INSERT INTO Users (username, email, password_hash) VALUES
('user1', 'user1@example.com', SHA2('password1', 256)),
('user2', 'user2@example.com', SHA2('password2', 256)),
('user3', 'user3@example.com', SHA2('password3', 256)),
('user4', 'user4@example.com', SHA2('password4', 256)),
('user5', 'user5@example.com', SHA2('password5', 256)),
('user6', 'user6@example.com', SHA2('password6', 256)),
('user7', 'user7@example.com', SHA2('password7', 256)),
('user8', 'user8@example.com', SHA2('password8', 256));

-- Insert Dummy Recipes
INSERT INTO Recipes (user_id, title, description, ingredients, instructions, created_at) VALUES
(1, 'Spaghetti Carbonara', 'A classic Italian pasta dish.', 'Spaghetti, Eggs, Parmesan, Pancetta, Black Pepper, Salt', '1. Cook spaghetti. 2. Fry pancetta. 3. Mix eggs and cheese. 4. Combine and serve.', '2025-03-07 12:00:00'),
(2, 'Chicken Curry', 'A flavorful Indian chicken curry.', 'Chicken, Onion, Garlic, Ginger, Tomatoes, Curry Powder, Coconut Milk, Salt, Pepper', '1. Saute onions, garlic, and ginger. 2. Add chicken and cook. 3. Add tomatoes and spices. 4. Pour coconut milk and simmer.', '2025-03-07 12:30:00'),
(3, 'Vegetable Stir Fry', 'A healthy stir fry with soy sauce.', 'Broccoli, Carrots, Bell Peppers, Soy Sauce, Garlic, Sesame Oil, Salt, Pepper', '1. Heat oil. 2. Add garlic and vegetables. 3. Stir-fry until tender. 4. Add soy sauce and serve.', '2025-03-07 13:00:00'),
(4, 'Pancakes', 'Fluffy pancakes served with syrup.', 'Flour, Eggs, Milk, Sugar, Baking Powder, Butter, Syrup', '1. Mix ingredients. 2. Cook on a skillet. 3. Serve with syrup.', '2025-03-07 13:30:00'),
(5, 'Caesar Salad', 'A fresh Caesar salad with dressing.', 'Romaine Lettuce, Croutons, Parmesan, Caesar Dressing', '1. Chop lettuce. 2. Mix with croutons and cheese. 3. Add dressing and toss.', '2025-03-07 14:00:00'),
(6, 'Beef Tacos', 'Tasty beef tacos with fresh toppings.', 'Ground Beef, Taco Shells, Lettuce, Tomato, Cheese, Sour Cream, Taco Seasoning', '1. Cook beef. 2. Prepare toppings. 3. Assemble tacos and serve.', '2025-03-07 14:30:00'),
(7, 'Chocolate Chip Cookies', 'Classic cookies with chocolate chips.', 'Flour, Sugar, Brown Sugar, Butter, Eggs, Chocolate Chips, Baking Soda, Salt, Vanilla Extract', '1. Mix ingredients. 2. Bake at 350°F for 10-12 minutes. 3. Cool and enjoy.', '2025-03-07 15:00:00'),
(8, 'Grilled Salmon', 'A healthy grilled salmon dish.', 'Salmon, Lemon, Olive Oil, Garlic, Dill, Salt, Pepper', '1. Marinate salmon. 2. Grill for 5-7 minutes per side. 3. Serve with vegetables.', '2025-03-07 15:30:00');
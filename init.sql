CREATE DATABASE IF NOT EXISTS daily_expenses_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE daily_expenses_db;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS expenses;
CREATE TABLE users ( id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(100) UNIQUE NOT NULL, password VARCHAR(255) NOT NULL );
CREATE TABLE expenses ( id INT AUTO_INCREMENT PRIMARY KEY, user_id INT NOT NULL, date DATE NOT NULL, category VARCHAR(100) NOT NULL, amount DECIMAL(10,2) NOT NULL, note VARCHAR(255), FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE );
INSERT INTO users (username, password) VALUES ('demo','demo123');
INSERT INTO expenses (user_id, date, category, amount, note) VALUES (1, '2025-10-01', 'Food', 12.50, 'Lunch'), (1, '2025-10-02', 'Transport', 3.00, 'Bus fare'), (1, '2025-10-03', 'Entertainment', 20.00, 'Movie');

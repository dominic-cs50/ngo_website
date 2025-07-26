-- Check if the database exists
CREATE DATABASE IF NOT EXISTS user_database;

-- Use the newly created or existing database
USE user_database;

-- Create the users table if it doesn't exist
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    unique_id CHAR(4) NOT NULL UNIQUE,
    CONSTRAINT chk_unique_id CHECK (unique_id REGEXP '^[0-9]{4}$')
);

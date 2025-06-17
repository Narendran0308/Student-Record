-- Create the database
CREATE DATABASE IF NOT EXISTS student_db;
USE student_db;

-- Create the student table
CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    course VARCHAR(100) NOT NULL
);

-- Insert sample data
INSERT INTO students (name, email, course) VALUES
('Ravi Kumar', 'ravi@example.com', 'Computer Science'),
('Anita Sharma', 'anita@example.com', 'Mechanical Engineering'),
('Vikram Das', 'vikram@example.com', 'Information Technology');

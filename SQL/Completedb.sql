CREATE DATABASE IT_Request_Website;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    employee_id VARCHAR(10) NOT NULL,
    email VARCHAR(100) NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (user_id, first_name, last_name, employee_id, email) VALUES
(1, 'Arvingson', 'Midy', '01491832', 'midy-arvingson@aramark.com'),
(2, 'Trevor', 'McSharry', '12345678', 'mcsharry-trevor@aramark.com'),
(3, 'UT', 'Dining', '87654321', 'utdining@gmail.com');


CREATE TABLE requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    location VARCHAR(100) NOT NULL,
    priority VARCHAR(20) NOT NULL,
    status VARCHAR(50) NOT NULL,
    request_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

INSERT INTO requests (user_id, first_name, last_name, email, location, priority, status) VALUES
(1, 'John', 'Doe', 'john.doe@example.com', 'Office A', 'High', 'Waiting for Status Change'),
(2, 'Jane', 'Smith', 'jane.smith@example.com', 'Office B', 'Medium', 'In Progress'),
(3, 'Alice', 'Johnson', 'alice.johnson@example.com', 'Office C', 'Low', 'Completed');


CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO admins (email, password) VALUES
('midy-arvingson@aramark.com', 'Navahelanevans18'),
('mcsharry-trevor@aramark.com', 'Password1'),
('utdining@gmail.com', '5xyado39');

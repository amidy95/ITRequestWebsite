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

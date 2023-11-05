CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO admins (email, password) VALUES
('midy-arvingson@aramark.com', 'Navahelanevans18'),
('mcsharry-trevor@aramark.com', 'Password1'),
('utdining@gmail.com', '5xyado39');

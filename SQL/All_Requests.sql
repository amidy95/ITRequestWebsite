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

-- Assume user_id values match the actual user IDs in your 'users' table
INSERT INTO requests (user_id, first_name, last_name, email, location, priority, status) VALUES
(1, 'John', 'Doe', 'john.doe@example.com', 'Office A', 'High', 'Waiting for Status Change'),
(2, 'Jane', 'Smith', 'jane.smith@example.com', 'Office B', 'Medium', 'In Progress'),
(3, 'Alice', 'Johnson', 'alice.johnson@example.com', 'Office C', 'Low', 'Completed');

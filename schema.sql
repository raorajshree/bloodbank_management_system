CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(100),
    type ENUM('donor', 'requester'),
    blood_group VARCHAR(5),
    location VARCHAR(100)
);

CREATE TABLE camps (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    date DATE,
    location VARCHAR(100)
);

CREATE TABLE requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    blood_group VARCHAR(5),
    quantity INT,
    status VARCHAR(50),
    FOREIGN KEY (user_id) REFERENCES users(id)
);
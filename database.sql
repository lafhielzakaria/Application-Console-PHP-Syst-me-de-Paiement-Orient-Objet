create database paymentsystem;
USE paymentsystem;
CREATE TABLE  clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    clientId INT NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (clientId) REFERENCES clients(id)
);
CREATE TABLE payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    orderId INT NOT NULL,
    paymentType VARCHAR(50) NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    status VARCHAR(50) DEFAULT 'pending',
    FOREIGN KEY (orderId) REFERENCES orders(id)
);
CREATE TABLE paypal (
    id INT AUTO_INCREMENT PRIMARY KEY,
    paymentId INT NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    FOREIGN KEY (paymentId) REFERENCES payments(id)
);
CREATE TABLE creditCard (
    id INT AUTO_INCREMENT PRIMARY KEY,
    paymentId INT NOT NULL,
    rip VARCHAR(16) NOT NULL,
    FOREIGN KEY (paymentId) REFERENCES payments(id)
);
CREATE TABLE virement (
    id INT AUTO_INCREMENT PRIMARY KEY,
    paymentId INT NOT NULL,
    rip VARCHAR(11) NOT NULL,
    FOREIGN KEY (paymentId) REFERENCES payments(id)
);
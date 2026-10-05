-- Database export for the CodeIgniter app and database activity.
CREATE DATABASE IF NOT EXISTS pos_system
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_general_ci;
USE pos_system;

SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS customers;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS tasks;
SET FOREIGN_KEY_CHECKS = 1;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    status VARCHAR(20) NOT NULL DEFAULT 'pending',
    task_date DATE NOT NULL,
    created_at DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    created_at DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tasks (title, status, task_date, created_at) VALUES
('Review daily sales report', 'completed', '2026-10-05', '2026-10-05 09:00:00'),
('Check inventory levels', 'pending', '2026-10-05', '2026-10-05 09:15:00'),
('Prepare customer orders', 'in progress', '2026-10-05', '2026-10-05 09:30:00'),
('Update yesterday sales records', 'completed', '2026-10-04', '2026-10-05 09:45:00'),
('Review returned products', 'completed', '2026-10-04', '2026-10-05 10:00:00');

INSERT INTO customers (full_name, email, phone, created_at) VALUES
('Ana Santos', 'ana.santos@example.com', '09171234567', '2026-10-05 09:00:00'),
('Mark Reyes', 'mark.reyes@example.com', '09181234567', '2026-10-05 09:05:00'),
('Lea Cruz', 'lea.cruz@example.com', '09191234567', '2026-10-05 09:10:00'),
('John Garcia', 'john.garcia@example.com', '09201234567', '2026-10-05 09:15:00'),
('Mia Flores', 'mia.flores@example.com', '09211234567', '2026-10-05 09:20:00');

INSERT INTO users (username, full_name, created_at) VALUES
('admin', 'Alex Admin', '2026-10-05 08:00:00'),
('staff01', 'Sam Rivera', '2026-10-05 08:05:00'),
('staff02', 'Kim Dela Cruz', '2026-10-05 08:10:00'),
('staff03', 'Pat Lim', '2026-10-05 08:15:00'),
('staff04', 'Jo Reyes', '2026-10-05 08:20:00');

-- Database setup for IBPFM (Intelligence Based Pollution Free Mission)
-- This script creates the database and the reports table used for the reporting workflow.

-- Create the database if it doesn't exist
CREATE DATABASE IF NOT EXISTS reports_db;
USE reports_db;

-- Table structure for the reports
-- id: Primary key for each report
-- name: Name of the person reporting
-- email: Contact email of the person reporting
-- address: Location address of the pollution/dump site
-- description: Details about the report
-- status: Workflow status (Pending, In Progress, Resolved)
-- created_at: Timestamp when the report was submitted

CREATE TABLE IF NOT EXISTS reports (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    address TEXT NOT NULL,
    description TEXT NOT NULL,
    status ENUM('Pending', 'In Progress', 'Resolved') DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Optional: Create an admin table for future workflow management
CREATE TABLE IF NOT EXISTS admins (
    admin_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

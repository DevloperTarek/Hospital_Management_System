CREATE DATABASE IF NOT EXISTS hospitals_db;
USE hospitals_db;

-- 1) Patients Table

CREATE TABLE IF NOT EXISTS patients(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    phone VARCHAR(15),
    problem TEXT
);

-- 2) Doctor Table

CREATE TABLE IF NOT EXISTS doctor(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    specialization VARCHAR(100)
);

-- 3) Appoinment Table

CREATE TABLE IF NOT EXISTS appointments(
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT,
    doctor_id INT,
    appoinment_date DATE
);

-- 4) Prescriptions Table

CREATE TABLE IF NOT EXISTS prescriptions(
    id INT AUTO_INCREMENT PRIMARY KEY,
    appoinment_id INT,
    description TEXT
)

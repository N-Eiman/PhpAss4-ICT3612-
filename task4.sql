CREATE DATABASE olympiad_booking;

USE olympiad_booking;

CREATE TABLE schools (
    school_id INT AUTO_INCREMENT PRIMARY KEY,
    school_name VARCHAR(255) NOT NULL,
    school_address VARCHAR(255) NOT NULL,
    school_contact VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE learners (
    learner_id INT AUTO_INCREMENT PRIMARY KEY,
    school_id INT,
    learner_name VARCHAR(255) NOT NULL,
    grade INT NOT NULL,
    subjects VARCHAR(255) NOT NULL,
    FOREIGN KEY (school_id) REFERENCES schools(school_id)
);

CREATE TABLE admins (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

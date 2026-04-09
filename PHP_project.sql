CREATE DATABASE game;
USE game;
CREATE TABLE Player(
id INT AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(30),
GamerTag VARCHAR(30),
Email VARCHAR(30),
GameName VARCHAR(30),
TeamName VARCHAR(30),
TeamCount INT,
SkillLevel VARCHAR(30),
EntryFee INT,
PaymentStatus VARCHAR(30),
RegistrationDate DATE  
)
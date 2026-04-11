# 🎮 Gaming Tournament Registration System
## 📌 Project Overview
- The Gaming Tournament Registration System is a mini web-based project developed using HTML, CSS, PHP, and MySQL.
- It allows players to register for tournaments, and also provides functionality to view, edit, update, and delete player records.
- This project demonstrates frontend design, backend logic, and database integration, along with modern UI techniques.
## 🚀 Features
### 🎨 UI & Design
- ✨ Modern UI with Glassmorphism + Gradient Effects
- 🎮 Gaming-style background design
- ⚡ Smooth hover animations and transitions
- 💎 Professional form and edit page design
### 🧩 Core Functionalities
- 📝 Player Registration Form
- 📊Display registered players in a table
- ✏️ Edit player details (pre-filled form)
- 🔄 Update player information
- ❌ Delete player records
- 💳 Entry fee and payment status tracking
- 📅 Registration date selection
### 🔗 Backend & Database
- 🔗 PHP for backend processing
- 🗄️ MySQL for data storage
- 🔄 Full CRUD Operations (Create, Read, Update, Delete)
## 🛠️ Technologies Used
- Frontend: HTML5, CSS3
- Backend: PHP
- Database: MySQL
- Tools: XAMPP / WAMP / Localhost Server
## 📋 Form Fields
The system collects the following details:
- Player Name
- Email
- Game Name
- Team Name (Optional)
- Skill Level (Beginner / Intermediate / Pro)
- Entry Fee
- Payment Status (Paid / Pending)
- Registration Date
## ⚙️ How to Run the Project
#### 1.Install XAMPP or any local server
#### 2.Start Apache and MySQL
#### 3.Place project folder inside:
   htdocs
#### 4.Create database in phpMyAdmin:
CREATE DATABASE game;
#### 5.Create table:
#####  CREATE TABLE Players(
    id INT AUTO_INCREMENT PRIMARY KEY,
    PlayerName VARCHAR(30),
    Email VARCHAR(30),
    GameName VARCHAR(30),
    TeamName VARCHAR(30),
    SkillLevel VARCHAR(30),
    EntryFee INT,
    PaymentStatus VARCHAR(30),
    RegistrationDate DATE
);
#### 6.Run project in browser:

##### http://localhost/index.php
## 📁 Project Structure

- Gaming-Tournament/
- │── index.php              # Frontend form UI
- │── process.php            # Handles form submission
- │── db.php                 # Database connection
- │── edit.php               # Edit player UI
- │── update.php             # Update logic
- │── delete.php             # Delete logic
- │── README.md              # Project documentation
## 🎯 Learning Outcomes
- Understanding of HTML forms and input handling
- Styling UI using CSS (modern design techniques)
- Handling form data with PHP
- Connecting PHP with MySQL database
- Performing basic CRUD operations
## 📁Screenshots
### 1. Players Registration Page(Create Operation)
 <img width="1883" height="912" alt="Screenshot (45)" src="https://github.com/user-attachments/assets/16e41e91-1f2f-4d95-b28f-68105f0134e5" />
 
### 2.Player Details Display (Retrieve Operation)
 
 <img width="1823" height="651" alt="Screenshot (46)" src="https://github.com/user-attachments/assets/f2750abe-d8ca-4755-9e7f-6782c78c8b20" />

### 3.Edit Player Details (Update Operation)
 
 <img width="1908" height="914" alt="Screenshot (47)" src="https://github.com/user-attachments/assets/34da4c76-d4d8-41e8-a168-45d10fab837c" />

 ### 4.Entered Details Are Stored In Database.
 
 <img width="1920" height="1080" alt="Screenshot (48)" src="https://github.com/user-attachments/assets/9e1330d0-de26-48e6-8c6e-26a7f9267247" />

## 🔮 Future Enhancements
- 📱 Fully responsive mobile design
- 💳 Payment gateway integration
- 📧 Email confirmation after registration
- 🔐 Admin Login System
 ## 👩‍💻 Author
- Santhoshi G
- 💻 Fresher passionate about Web Development
- 📊 Skilled in MySQL and PHP basics
## 📌 Conclusion
- This mini project is a great starting point for understanding full-stack web development basics and building real-world applications.

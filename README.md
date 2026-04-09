# 🎮 Gaming Tournament Registration System
## 📌 Project Overview
- The Gaming Tournament Registration System is a mini web-based project developed using HTML, CSS, PHP, and MySQL.
- It allows players to register for gaming tournaments by submitting their details through an interactive and user-friendly form.
- This project demonstrates basic frontend design, form handling, and database integration concepts.
## 🚀 Features
- 🎨 Modern UI with attractive design (Glassmorphism + Gradient Effects)
- 📝 Player registration form
- 🎮 Game and team details collection
- 💳 Entry fee and payment status tracking
- 📅 Registration date selection
- 🔗 Backend integration using PHP
- 🗄️ Data storage using MySQL database
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

 CREATE TABLE Players(
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
- │── README.md              # Project documentation
## 🎯 Learning Outcomes
- Understanding of HTML forms and input handling
- Styling UI using CSS (modern design techniques)
- Handling form data with PHP
- Connecting PHP with MySQL database
- Performing basic CRUD operations
## 🔮 Future Enhancements
- ✅ Admin dashboard to view registrations
- ✅ Edit/Delete player details
- ✅ Email confirmation after registration
- ✅ Payment gateway integration
- ✅ Responsive mobile design
## 👩‍💻 Author
- Santhoshi G
- Fresher passionate about web development
- Skilled in MySQL and basic PHP
## 📌 Conclusion
- This mini project is a great starting point for understanding full-stack web development basics and building real-world applications.

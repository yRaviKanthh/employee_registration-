# Employee Registration System

A simple web-based Employee Registration System developed using PHP and MySQL. This application allows users to register employee details through a clean web form and store the information securely in a database. The project is built for learning purposes and runs on a local XAMPP environment.

---

## Features
- Employee registration form
- Secure database insertion using prepared statements
- Server-side input validation
- MySQL database integration
- Simple and user-friendly interface

---

## Tech Stack
- Frontend: HTML, CSS
- Backend: PHP
- Database: MySQL
- Server: XAMPP

---

## Project Structure

employee-registration/
│
├── register.html
├── register.php
├── config.php
├── employee_db.sql
└── employee-management-scaled.jpg

---

## Setup Instructions

### 1. Clone the Repository
git clone https://github.com/yRaviKanthh/employee_registration-.git

### 2. Start XAMPP
- Start Apache and MySQL from the XAMPP Control Panel

### 3. Create Database
- Open phpMyAdmin
- Import the `employee_db.sql` file
- This will create the database and employees table

### 4. Configure Database
- Open `config.php`
- Update database credentials if required

### 5. Run the Project
- Move the project folder into `htdocs`
- Open your browser and navigate to:
http://localhost/employee-registration/register.html

---

## Security Notes
- Prepared statements are used to prevent SQL injection
- Basic server-side validation is implemented
- Intended for local development and learning purposes only

---

## Future Enhancements
- View registered employees
- Update and delete employee details
- User authentication and login
- Improved UI with modern frameworks

---

## Author
**Yedimala Ravikanth**  
- LinkedIn: https://linkedin.com/in/ravi-kanth7  
- GitHub: https://github.com/yRaviKanthh

# Employee Management System

A comprehensive web-based Employee Management System that allows administrators to manage employees, assign projects, track leaves, and view profiles. The system is designed to simplify HR management and streamline employee interactions.

## Features
- Employee registration and profile management  
- Leave application and approval system  
- Project assignment and tracking  
- Salary management for employees  
- Admin dashboard for managing all employees  

## Technologies Used
- HTML, CSS, JavaScript for the frontend  
- PHP for backend processing  
- MySQL for the database  
- Apache server for hosting  

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/deepikanellithirtha/Employee-Management-System.git
Navigate to the project directory:

bash

cd Employee-Management-System

Set up the database:

Open phpMyAdmin or any MySQL client.

Create a new database named ems.

Import the ems.sql file located in the root directory.

Configure the database connection:

Open process/dbh.php and update the following:

php

$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "ems";
Start the server:

Open XAMPP and start Apache and MySQL.

Access the project via: http://localhost/Employee-Management-System.

Usage
Admin Login:

Access the admin panel to manage employees, projects, and leave applications.

Employee Login:

Employees can log in to apply for leave, check assigned projects, and update their profiles.

Project Structure
arduino

Employee-Management-System/
├── assets/
├── css/
├── js/
├── process/
├── ems.sql
├── index.html
├── README.md
└── ...


License
This project is open-source and available for public use.



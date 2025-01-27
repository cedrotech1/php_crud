
# PHP Simple Project  

## Overview  
This is a PHP project developed to for simple crud.  

## Features  
- statistics. 
- Add product.  
- Responsive and user-friendly interface (if applicable).  
- select product in both table and card.  
- delete product.  

## Requirements  
Ensure the following software is installed on your system:  
- **XAMPP**: Version 7.4 or higher (includes PHP, MySQL, and Apache).  
- Web browser (Google Chrome, Mozilla Firefox, etc.).  

## Installation Steps  

1. **Download and Install XAMPP**  
   - Download XAMPP from [Apache Friends](https://www.apachefriends.org).  
   - Install XAMPP and start the **Apache** and **MySQL** modules in the XAMPP control panel.  

2. **Clone the Repository**  
   - Clone this repository to your local system:  
     ```bash
     git clone https://github.com/php_crud.git
     ```
   - Copy the project folder to the `htdocs` directory inside your XAMPP installation directory:  
     ```bash
     C:\xampp\htdocs\
     ```

3. **Set Up the Database**  
   - Open [phpMyAdmin](http://localhost/phpmyadmin) in your browser.  
   - Create a new database (e.g., `garage`).  
   - Import the `database.sql` file located in the `database/` folder of the project into the newly created database.  

4. **Configure the Database Connection**  
   - Open the `components/connection.php` file in the project directory.  
   - Update the database connection details:
     ```php
     $dbHost = 'localhost';
     $dbUser = 'root';
     $dbPass = '';
     $dbName = 'garage';
     ```

5. **Run the Project**  
   - Open your web browser and go to:  
     ```
     http://localhost/garage
     ```

## Folder Structure  
- `assets/`: Contains CSS, JS, and image files.  
- `components/`: Shared components like header, footer, and sidebar.  
- `database/`: Database-related files, including the SQL dump.  
- `components/connection.php`: Database connection configuration.  
- `index.php`: Main entry point of the application.  

## Usage  
1. Start the XAMPP control panel and run the **Apache** and **MySQL** modules.  
2. Access the application via `http://localhost/garage`.  
 
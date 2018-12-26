# Login_SignUp_System

> A login/signup sytem witten in php with mail verification and password reset functionalities.

# Requriements
> ## Server
> Use online hosting server to use it otherwise mail service will not work on local server.
> ## Database
> Mysql-sever [User Guide](https://dev.mysql.com/doc/).

# Create Database
> Create Database with name "loginsystem"
> ```
> CREATE DATABASE loginsystem;
> ```
> Select Database
> ```
> USE loginsystem
> ```
> Create Table
> ```
> open createDB.php using server link http://website-name/createDB.php file to create table automatically or 
> use create table Sql command wich is preasent in createDB.txt
> ```

# Update Mail Link
> open register.php file and update line 33.
> ```
> http://localhost/verify.php?email='.$email.'&hash='.$hash;
> replace localhost with your-website-name
> ```
> Open forgot.php file and update line 23.
> ```
>$msg = 'http://your-website-name/reset.php?email='.$email.'&dob='.$dob;
> ```
>

# Task Manager with PHP and MySQL
Simple Task Manager web app with PHP and MySQL.

[Complete TASK MANAGER Tutorial Playlist](https://www.youtube.com/watch?v=1rl36zxqZZw&list=PLBLPjjQlnVXXygeLVmd9mGNtgrHaBOFos)



## Support Developer
1. Subscribe & Share my YouTube Channel - https://bit.ly/vijay-thapa-online-courses
2. Add a Star 🌟  to this 👆 Repository

## Donate

**[PayPal](https://bit.ly/support-vijay-thapa)**

**[Buy me a Coffee  ☕️](https://www.buymeacoffee.com/vijaythapa)**

**Donate by wire transfer:** E-Mail at *donate@vijaythapa.com* for wire transfer details. 


## Technologies Used
1. Core PHP Programming Language (Procedural Programming)
2. MySQL Database
3. HTML
4. CSS

## How to Download and Run on your PC?

### Pre-Requisites:

1. Download and Install XAMPP

[Click Here to Download](https://www.apachefriends.org/index.html)

2. Install any Text Editor (Sublime Text or Visual Studio Code or Atom or Brackets)

### Installation

1. Download as as Zip or Clone this project
2. Move this project to Root Directory
```
Local Disc C: -> xampp -> htdocs -> 'this project'
```
*Local Disk C is the location where xampp was installed*

3. Open XAMPP Control Panel and Start 'Apache' and 'MySQL'

4. Import Database

a. Open 'phpmyadmin' in your browser
b. Create a Database
c. Import the SQL file provided with this project

5. Make Changes to settings

Go to 'config' folder and Open 'constants.php' file. Then make changes on following constants
```php
<?php 
//Start Session
session_start();

//Create Constants to save Database Credentials
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root'); //Your Database username instead of 'root'
define('DB_PASSWORD', ''); //Your Database Password instead of null/empty
define('DB_NAME', 'task_manager'); //Your Database Name if it's not 'task_manager'

define('SITEURL', 'http://localhost/task-manager/'); //Update the home URL of the project if you have changed port number or it's live on server

?>
```

6. Now, Open the project in your browser. It should run perfectly.

## For Sponsor or Projects Enquiry
1. Email - hi@vijaythapa.com

## Follow Me on
1. LinkedIn - [vijaythapa](https://www.linkedin.com/in/vijaythapa/ "Vijay Thapa on LinkedIn")
2. Instagram - [@vijaythapa.code](https://www.instagram/vijaythapa.code/ "Vijay Thapa on Instagram")
3. Facebook - [@thevijaythapa](https://www.facebook.com/thevijaythapa/ "Vijay Thapa on Facebook")
5. Twitter - [@thevijaythapa](https://www.twitter.com/thevijaythapa "Vijay Thapa on Twitter")

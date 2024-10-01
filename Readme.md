# PHP Project Deployment Guide

## Local Deployment

1. Clone the repository

   - To begin local deployment, first clone the repository from GitHub:

```
git clone https://github.com/your-username/your-repo.git
```

2. Configure Database Connection

   - Inside the `includes` folder, locate the `db.inc.php` file and update the following fields to match your SQL database credentials:

```php
$serverName = "localhost";
$dbUsername = "user";
$dbPassword = "password";
$dbName = "db";
$port = 8111;

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName, $port);

// If there is no port, use this:
$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
```

- Here’s the full example db.inc.php file:

```php
<?php

$serverName = "us-cluster-east-08.k21.cleardbs.net";
$dbUsername = "ascsca4c2c45321";
$dbPassword = "a5asf7sc";
$dbName = "heroku_fasdasdasdasdas";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "It's working!";
}
```

3. Import the SQL Database

   - Inside the `sql_data` folder, you’ll find a file called `db.sql`. Import this file into your database using phpMyAdmin or any other SQL client.

   - For example, in phpMyAdmin:

     - Navigate to your database
     - Click on the Import tab
     - Choose the db.sql file and click Go

4. Set Up Local Server (XAMPP)

   - Copy all the project files.
   - Go to your xampp/htdocs/{your-folder} directory.
   - Paste all files and folders inside that directory.

5. Access the Application
   - Open your browser and go to:
   ```
   http://localhost/{your-folder}/index.php
   ```
   - Your application should now be running locally.

## Cloud Deployment

1. Cloud Database Configuration

   - For cloud deployment, you need to update the database connection to point to your cloud SQL database.

   - An example setup using ClearDB MySQL (Heroku):

```php
$serverName = "us-cluster-east-08.k21.cleardbs.net";
$dbUsername = "ascsca4c2c45321";
$dbPassword = "a5asf7sc";
$dbName = "heroku_fasdasdasdasdas";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "It's working!";
}
```

2.  Deploying on a Cloud Provider (Heroku)

    - `Step 1 : Install the Heroku CLI`
      If you haven't installed the Heroku CLI, you can download it here.

    - `Step 2 : Log into Heroku`
      Login to Heroku by running the following command:

      ```
      heroku login
      ```

    - `Step 3: Create a Heroku App`
      Navigate to your project folder and create a new Heroku app:

      ```
      heroku create your-app-name
      ```

    - `Step 4: Add ClearDB MySQL (or another SQL service)`
      For MySQL, you can use the ClearDB add-on. Run the following command:

      ```
      heroku addons:create cleardb:ignite
      ```

    - `Step 5: Push to Heroku`
      Push your code to the Heroku server:
      ```
      git push heroku main
      ```
    - `Step 6: Access the Live Application`
      Once the deployment is complete, you can access your application at:

      ```
      https://your-app-name.herokuapp.com
      ```

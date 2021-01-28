<?php
       // Change this to your connection info.
       $DATABASE_HOST = 'localhost';
       $DATABASE_USER = 'root';
       $DATABASE_PASS = '';
       $DATABASE_NAME = 'phplogin';
       // Try and connect using the info above.
       $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
       if (mysqli_connect_errno()) {
	      // If there is an error with the connection, stop the script and display   the error.
	      exit('Failed to connect to MySQL: ' . mysqli_connect_error());
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $repassword = $_POST['re_password'];   
           
        if (!isset(username,$password, $phone, $email)) {
	       // Could not get the data that should have been sent.
        	exit('Please complete the registration form!');
        }
        // Make sure the submitted registration values are not      empty.
        if (empty($username) || empty($phone) ||  empty($password) || empty($email)) {
        	// One or more values are empty.
        	exit('Please complete the registration form');
        }
        // We need to check if the account with that username exists.
           if ($stmt = $con->prepare('SELECT id,email, phone, password FROM accounts WHERE email = ? or phone =? ')) {
	   // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	   $stmt->bind_param('ss', $email, $phone);
	   $stmt->execute();
	   $stmt->store_result();
	   // Store the result so we can check if the account exists in the database.
	   if ($password == $repassword){
           
       
            
               if ($stmt->num_rows > 0) {
           // Username already exists
           echo 'Email or Phone Number exists, please choose another!';
	   } else {
           // Username doesnt exists, insert new account
           if ($stmt = $con->prepare('INSERT INTO accounts (username, email, phone, password) VALUES (?, ?, ?, ?)')) {
	       // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	   $password = password_hash($password, PASSWORD_DEFAULT);
	   $stmt->bind_param('ssss', $username, $password, $phone, $email);
	   $stmt->execute();
	   echo 'You have successfully registered, you can now login!';
           } else {
	   // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	   echo 'Could not prepare statement!';
           }
	   }
       }
               else {
                   echo 'Password Mismatch!';
               }
                   
	   $stmt->close();
           } else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	   echo 'Could not prepare statement!';
           }
       $con->close();
           
?>
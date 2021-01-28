<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/style2.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.7.1/css/all.css">
    
</head>

<body class="loggedin">
    <nav class="navtop">
        <div>
            <img class="logo" src="img/b3.jpg" alt="logo">
            <h1>BoiBinimoy.com</h1>
            <a href="allbook.php"><i class="far fa-books"></i>All Books</a>
            <a href="notification.php"><i class="fas fa-bell"></i>Notification</a>
            <a href="profile.php"><i class="fas fa-id-card"></i>Profile</a>
            <a href="addpost.php"><i class="fal fa-plus-square"></i>Share or Sell</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>
    <div class="content">
        <h2>Share or Sell Your Books</h2>  
    </div>
    
    <div class="fill">
        <h1>Fill Data</h1>
        <form action="addpost_authentic.php" method="post">
            
            <input type="text" name="title" placeholder="Title" id="title" required>
            
            
            <input type="text" name="location" placeholder="Location" id="location" required>
             
             
            <input type="radio" name="gender" value="female">Share
            <input type="radio" name="gender" value="female">Sell
            
            
            <input type="text" name="type" placeholder="Type" id="type" required>
            
           
            
            
            <select class="select" id="type2" name="type2">
            <option selected disabled>Select the type of book</option>
            <option value="text">Text Book</option>
            <option value="novel">Novel</option>
            <option value="child">Children and Kids</option>
            <option value="islam">Islamic</option>
            <option value="story">Story</option>
            <option value="fairy">Fairy Tale</option>
            </select>
             
             
            
            <input type="text" name="price" placeholder="price" id="price" required>
            
            
            <input type="text" name="detail" placeholder="Detail" id="detail" required>
            
            
            <input name="postads" type="submit" value="Done">
        </form>
        
        <h3>Do you want to cancle?  
        <a href="home.php"><i></i>Cancle</a></h3>
    </div>
    
    
    
    
    
</body>

</html>
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
    <title>Notification Page</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.7.1/css/all.css">
    
</head>

<body class="loggedin">
    <nav class="navtop">
        <div>
            <img class="logo" src="img/b3.jpg" alt="logo">
            <h1>BoiBinimoy.com</h1>
           <a href="allbook.php"><i class="far fa-books"></i>All Books</a>
            <a href="weather.php"><i class="far fa-cloud-showers-heavy"></i>Weather</a>
            <a href="notification.php"><i class="fas fa-bell"></i>Notification</a>
            <a href="profile.php"><i class="fas fa-id-card"></i>Profile</a>
            <a href="addpost.php"><i class="fal fa-plus-square"></i>Share or Sell</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>
    <div class="content">
        <h2>Notification</h2>
        <p><?=$_SESSION['name']?>, There is no notification for you.</p>
    </div>
</body>

</html>
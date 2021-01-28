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
    <link href="/boi_binimoy/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.7.1/css/all.css">
    
</head>

<body class="loggedin">
    <nav class="na">
        <div>
            <img class="logo" src="/boi_binimoy/img/b3.jpg" alt="logo">
            <h1>BoiBinimoy.com</h1>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>
    <div class="content">
        <h2>Manage Ads</h2>
        
        
        
    </div>
</body>

</html>
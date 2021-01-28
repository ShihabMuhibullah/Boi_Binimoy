<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>
      
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
       }
        
        if(isset($_POST['postads'])){
            
            $title = $_POST['title'];
            $location = $_POST['location'];
            $type = $_POST['type'];
            $price = $_POST['price'];
            $detail = $_POST['detail']; 
            
            $po = $_SESSION['id'];
    
            
            $query = "select * from accounts where id='$po' ";
            $r = mysqli_query($con, $query);
            $num = mysqli_num_rows($r);
            
            if($num > 0){
                
                $q = "INSERT INTO post_ads (title, user_id, location, type, price, detail) values ('$title', '$po' , '$location', '$type', '$price', '$detail')";
                mysqli_query($con, $q);
                
                header('location: addpost.php');
                
            }else{
                echo "Oh oh";
                
            }
            
            
            
            mysqli_close($con);
            
        }
        
?>
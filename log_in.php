<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "details";
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if(!$conn) {
    die("Unable to connect");
}
if($_POST) {
    $email = $_POST["email"];
    $pass = $_POST["password"];
    // making sure that SQL injection doesnt work
    $email = mysqli_real_escape_string($conn, $email);
    $pass = mysqli_real_escape_string($conn, $pass);
    $sql = "SELECT * FROM student WHERE email = '$email' AND password = '$pass'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1) {
        echo "Welcome user!";
    } else {
        echo "Incorrect email/password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>College Website</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="container">
                <h1 class="logo"><a href="index.php">College website</a></h1>
                <ul>
                    
                    <li><a href="Sign_up.php">Sign Up</a></li>
                    <li><a class="current" href="log_in.php">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="contact-form" class="py-3">
        <div class="container">
         <h1 class="l-heading"><span class="text-primary">Log</span> In</h1>
         <p>Please Fill the Form To Sign Up.</p>
         <form action="students_section.php" method="POST" enctype="multipart/form-data">
             <div class="form-group">
             <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="email" name="email" id="email" placeholder="Enter your email">
             </div>
             <div class="form-group">
                <label for="password"><b>Password</b></label>
                <input type="text" name="password" id="password" placeholder="Enter your password">
             </div>
             
            
             <input type="submit" name= "login" value="Login"><br>
             <a href="forgot_password.php" style="color: blue;">Forgotten Password?</a>
             <p>Don't have an account? <a href="Sign_up.php" style="color: blue;">Register Now</a></p>
         </form>
        </div>
    </section> 
    
   
    

    
    <footer id="main-footer">
        <p>College Website &copy; 2019, All Rights Reserved </p>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
            </footer>
    <script src="index.js"></script>
</body>
</html>
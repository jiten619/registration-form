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
                    
                    <li><a class="current" href="Sign_up.php">Sign Up</a></li>
                    <li><a href="log_in.php">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="contact-form" class="py-3">
        <div class="container">
         <h1 class="l-heading"><span class="text-primary">Sign</span> Up</h1>
         <p>Please Fill the Form To Sign Up.</p>
         <form action="details.php" method="POST" enctype="multipart/form-data">
             <div class="form-group">
                <label for="name"><b>First Name</b></label>
                <input type="text" name="first_name" id="firstname" placeholder="Enter your first name">
             </div>
             <div class="form-group">
                <label for="name"><b>Last Name</b></label>
                <input type="text" name="last_name" id="lastname" placeholder="Enter your last name">
             </div>
             <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="email" name="email" id="email" placeholder="Enter your email">
             </div>
             <div class="form-group">
                <label for="mobilenumber"><b>Mobile Number</b></label>
                <input type="tel" name="mobile_number" id="mobilenumber" placeholder="Enter your mobile number">
             </div>
             <div class="form-group">
                <label for="password"><b>Password</b></label>
                <input type="password" name="password" id="password"  placeholder="Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
             </div>
             <div class="form-group">
                <label for="password"><b>Confirm Password</b></label>
                <input type="password" name="confirm_password" id="confirmpassword" placeholder="Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
             </div>

             <button type="submit" class="btn">Sign Up</button>
             <button type="remove" id="reset" class="btn"><a href="Sign_up.php" style="color: white;">Reset</a></button>
             <p>Already have an account? <a href="log_in.php" style="color: blue;">Login here</a>.</p>
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
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
                    
                    <input type="email" name="email" id="email" placeholder="Enter your email" style="height: 30px; width: 200px;">
                    <input type="text" name="password" id="password" placeholder="Enter your password" style="height: 30px; width: 200px;">
                    <button type="submit" class="btn"><a href="students_section.php">Login</a></button>
                </ul>
            </div>
        </nav>
    </header>

    <section id="contact-form" class="py-3">
        <div class="container">
         <h1 class="l-heading">Find Your Account</h1>
         <p>Please enter your email address or mobile number to search for your account.</p><br>
         <form action="send" method="POST" enctype="multipart/form-data">
             <div class="form-group">
               
                <input type="email" name="email" id="email" placeholder="Enter your email or mobile number" style="height: 35px; width: 500px;">
                <br>
             <button type="submit" class="btn" style="background: blue; color: white; margin-top: 20px;">Search</button>
             <button type="submit" class="btn" style="background: grey; color: black; margin-top: 20px;">Cancel</button>
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
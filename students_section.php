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
                    
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Academic</a></li>
                    <li><a href="#">Info Cell</a></li>
                    <li><a href="#">Notices</a></li>
                    <li><a href="#">Results</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="contact-form" class="py-3">
        <div class="container">
         <h1 class="l-heading"><span class="text-primary">Students</span> Section</h1>
         <p>Students please Fill all the info To the given area.</p>
         <form action="db.php" method="POST" enctype="multipart/form-data">
             <div class="form-group">
             <div class="form-group">
                <label for="name"><b>Name</b></label>
                <input type="text" name="name" id="name" placeholder="Enter your name" required>
             </div>
             <div class="form-group">
                <label for="class"><b>Class</b></label>
                <input type="text" name="class" id="class" placeholder="Enter your class" required>
             </div>
             <div class="form-group">
                <label for="section"><b>Section</b></label>
                <input type="text" name="section" id="section" placeholder="Enter your section" required>
             </div>
             <div class="form-group">
                <label for="aadhar"><b>Aadhar Number</b></label>
                <input type="text" name="aadhar" id="aadhar" placeholder="Enter your number" required>
             </div>
             
            
             <input type="submit" value="submit">
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
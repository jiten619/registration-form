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
    <div style="text-align:center; margin-top: 290px;">
        <h1 style="padding-bottom: 20px;">Thank you!</h1>
        <p><b>Your submission has been received.</b></p>
        <span id="timer"></span></div>
        <script type="text/javascript">
        var count = 5;
        var redirect = "http://localhost/registration/students_section.php";
        function countDown(){
        var timer = document.getElementById("timer");
        if(count > 0){
        count--;
        timer.innerHTML = "This page will redirect in "+count+" seconds.";
        setTimeout("countDown()", 1000);
        }else{
        window.location.href = redirect;
        }
        }
        countDown();
        </script>
    <script src="index.js"></script>
</body>
</html>
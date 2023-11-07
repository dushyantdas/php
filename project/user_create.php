
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking</title>
    <link rel="stylesheet" href="css/user_css.css">
</head>
<body>
    <h1>Find Your Parking Slot</h1>
    <div class="form">
        <div class="login-form">
            <h1>USER REGISTRATION</h1>
            <form action="user_registration.php" method="post">
                <label for="">Username:</label> 
                <input type="text" name="username" placeholder="Username" require> <br><br>
                <label for="">Password:</label>
                <input type="password" name="password" placeholder="Password" require> <br><br>
                <label for="">Confirm Password:</label>
                <input type="text" name="co-password" placeholder="Confirm Password" require> <br> <br>
               <button class="submit"><a href="user.php">login</a></button>
                <input type="submit" class="submit" value="register">
            </form>
            </div>
    </div>
    
</body>
</html>
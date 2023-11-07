
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
            <h1>USER LOGIN</h1>
            <form action="user_validate.php" method="post">
                <label for="">Username:</label>
                <input type="text" name="username" placaholder="username"> <br><br>
                <label for="">Password:</label>
                <input type="password" name="password" placaholder="Password"> <br><br>
                <input type="submit" class="submit" value="Login">
            </form>
            <h1>don't have account?<a href="user_create.php">Registeration</a>
            </h1>
        </div>
    </div>
    
</body>
</html>
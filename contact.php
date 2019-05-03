
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" type="image/png" href="image/titlelogo.png">
    <title>CONTACT</title>
</head>
<body>
<?php include('header.php') ?>
    <div class="contact">
        <form action="backend/login.php" method="POST">
            <div class="logo">
                <img src="image/slogo.png" alt="">
            </div>
            <label for="">Email</label><br>
            <input type="text" name="email"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br>
            <input type="submit" name="submit" value="submit">
            <a href="#">Forgot my password ?</a>
            <a href="signup.php">Sign Up</a>
            <a href="privacy.php">Privacy Policy</a>
        </form>
    </div>

    <?php include('footer.php') ?>
</body>
</html>

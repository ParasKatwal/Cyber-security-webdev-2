
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="image/titlelogo.png">
    <title>SIGN UP</title>
</head>
<body>
<?php include('header.php') ?>

<div class="signup">
        <form action="backend/register.php" method="POST" autocomplete="off" enctype="multipart/form-data">
            <div class="logo">
                <img src="/image/slogo.png" alt="">
            </div>
            <label for="">Full Name</label><br>
            <input type="text" name="fname" placeholder="First Name" required>
            <input type="text" name="lname" placeholder="Last Name" required><br>
            <label for="">Email</label><br>
            <input type="text" name="email" autocomplete="off" placeholder="Your Email" required><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="repassword" placeholder="Re-Enter-Password" required><br>

            <!-- <div class="avatar">
              <label for="" class="custom-file-upload" >Select your profile picture</label><br>
              <input type="file" name="avatar" accept="image/*" id="" required>
            </div> -->

            <p><input type="checkbox" name="checkbox" value="check" id="agree" required />I have read and agree to the <a href="terms.php">Terms and Conditions</a> and <a href="privacy.php">Privacy Policy</a></p>
            <input type="submit" name="submit" value="submit">
        </form>

</div>

<?php include('footer.php') ?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="image/titlelogo.png">
    <title>BOOKING</title>
</head>
<body>
<?php include('header.php') ?>
<div class="booking">
    <form action="">
        <label for="card">Select Your Card:</label>
        <select name="card">
            <option value="volvo">VISA</option>
            <option value="saab">PayPal</option>
            <option value="fiat">MasterCard</option>
        </select><br><br><br>
        <label for="title">Select Your Course:</label>
        <select name="title">
            <option value="volvo">Ethical hacking</option>
            <option value="saab">Cyber Security</option>
            <option value="fiat">Network Security</option>
        </select><br><br><br>
        <label for="cardnumber">Card Number</label><br>
        <input type="text"><br>
        <label for="owner">Card Owner</label><br>
        <input type="text"><br>
        <label for="name">Expires</label><br>
        <input type="text"><br>
        <label for="name">CVC</label><br>
        <input type="text"><br>
        <p><input type="checkbox" name="checkbox" value="check" id="agree" />I have read and agree to the <a href="terms.php">Terms and Conditions</a> and <a href="privacy.php">Privacy Policy</a></p>
        <button>Checkout</button> <br>

    </form>
</div>
<?php include('footer.php') ?>
</body>
</html>
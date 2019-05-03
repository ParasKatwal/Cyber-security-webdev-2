<?php
include('connect.php');
if (isset($_POST['submit'])) {
  $conn = mysqli_connect('localhost', 'desert', '12345', 'cyber_reg');
  if(!$conn){
    echo 'Connect error: ' . mysqli_connect_errno();
  }
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // $sql = "INSERT INTO register (fullname, lastname, email, password) VALUES('$fname', '$lname', '$email', '$password')";
  // mysqli_query($conn, $sql);
  if ($_POST['password'] == $_POST['repassword']) {
    if (!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)) {
      header("Location: signup.php?signup=invalid");
      exit();
    } else{
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: signup.php?signup=invalidemail");
        exit();
      } else {
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO register (fullname, lastname, email, password) VALUES('$fname', '$lname', '$email', '$password')";
        mysqli_query($conn, $sql);
        header("Location: ../welcome.php");
        exit();
      }
    }
  } else {
      header("Location: signup.php?passwordDoNotMatch");
      $_SESSION['message'] = "Password do not match";
  }
}
?>

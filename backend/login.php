<?php
session_start();

include('connect.php');
    if(isset($_POST['submit']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];

        $select=" select * from register where email='$email' AND password='$password'";
        $query=mysqli_query($conn,$select);
        if(mysqli_num_rows($query)===1)
        {
            header('location:../welcome.php');
        }
        else
        {
            header('location:../contact.php');
        }
    }
 ?>

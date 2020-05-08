<?php

    $con=mysqli_connect('localhost','root','','websiteuser');
    if($con)
    {
      echo "Connected Successfully";
    }
    else {
      echo "no connect";
    }

    mysqli_select_db($con,'websiteuser');

    $user = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comments = $_POST['comments'];

   $query = " insert into userinfodata (user, email, mobile, comment) values ('$user','$email','$mobile','$comments')";

    echo $query;

   mysqli_query($con,$query);

   header('location:indax.php');



 ?>

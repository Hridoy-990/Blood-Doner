<?php
    include 'config.php';
    if(isset($_POST['l_submit'])){
    $email= $_POST['l_email'];
    $pass=$_POST['l_pass'];
     
    $result = mysqli_query($conn,"SELECT * FROM `register` WHERE email='$email' And pass='$pass'");

    if(mysqli_num_rows($result)){
    session_start();
    $_SESSION['email']=$email;
      echo "<script>location.href='home.php'</script>";
    }else{
     echo"<script>alert('incorrect username or password!!')</script>";
     echo "<script>location.href='login.php'</script>";
    }

    }
?>
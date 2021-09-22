<?php 
   include 'config.php' ;
   if(isset($_POST['r_submit'])){
      $r_name = $_POST['r_name'] ;
      $r_email = $_POST['r_email'];
      $r_phone = $_POST['r_phone'];
      $r_pass = $_POST['r_pass'];
      $r_cpass = $_POST['r_cpass'] ;
      $r_age = $_POST['r_age'] ;
      $r_gender = $_POST['r_gender'] ;
      $r_bloodgroup = $_POST['r_bloodgroup'] ;
   }
   $insert_query = "INSERT INTO `register`( `name`, `email`, `pass`, `gender`, `bloodgroup`, `age`, `phone`) VALUES ('$r_name','$r_email','$r_pass','$r_gender','$r_bloodgroup','$r_age','$r_phone')" ;
   $d_email = mysqli_query($conn ,"SELECT * FROM `register` WHERE email = '$r_email'" ) ;
   $phnPatt = "/(\+88)?-?01[3-9]\d{8}$/";
   $namePattern = "/^[a-zA-Z ]+$/";
   $agePattern = "/^[1-9][0-9]*$/";
   $passPattern = "/^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])).{8,14}$/";


   if(strlen($r_name) < 3 || strlen($r_name) > 40){
      echo "<script> alert('length will be 3-40 character') </script>" ;
      echo "<script>location.href='donerRegistration.php'</script>";
   }
   else if(!preg_match($namePattern,$r_name))
   {
      echo "<script> alert(' Use only Alphabat and space') </script>" ;
      echo "<script>location.href='donerRegistration.php'</script>";
   }
   elseif(!preg_match($phnPatt,$r_phone))
   {
      echo "<script> alert('phone number not valid') </script>" ;
      echo "<script>location.href='donerRegistration.php'</script>";
   }
   else if(strlen($r_pass) < 8 || strlen($r_pass) > 14)
   {
      echo "<script> alert('Password length must be between (8 - 14) !') </script>" ;
      echo "<script>location.href='donerRegistration.php'</script>";
   }
   elseif(!preg_match($passPattern,$r_pass))
   {
      echo "<script> alert('Must be use (digit , alphabat (small , cpital) !') </script>" ;
      echo "<script>location.href='donerRegistration.php'</script>";
   }
   elseif($r_pass != $r_cpass)
   {
      echo "<script> alert('password doesn't match!') </script>" ;
      echo "<script>location.href='donerRegistration.php'</script>";
   }
   else if(strlen($r_age) > 3)
   {
      echo "<script> alert('length must be between (1 - 3) digit !') </script>" ;
      echo "<script>location.href='donerRegistration.php'</script>";
   }
   elseif(!preg_match($agePattern,$r_age))
   {
      echo "<script> alert('Only Digit !') </script>" ;
      echo "<script>location.href='donerRegistration.php'</script>";
   }
   elseif(mysqli_num_rows($d_email) > 0)
   {
      echo "<script> alert('Email allready taken!') </script>" ;
      echo "<script>location.href='donerRegistration.php'</script>";
   }
   else
   {
      if(!mysqli_query($conn , $insert_query))
      {
         die("not intersed!") ;
      }
      else
      {
         echo "<script> alert('Sucssesfully inserted!') </script>" ;
         echo "<script>location.href='login.php'</script>";
      }
   
   } 



?>
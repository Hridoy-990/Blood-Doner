<?php
   include 'config.php';
   if(isset($_POST['c_submit'])){
    $c_name = $_POST['c_name'] ;
    $c_email = $_POST['c_email'];
    $c_subject = $_POST['c_subject'] ;
    $c_message = $_POST['c_message'] ;
 }
 $namePattern = "/^[a-zA-Z ]+$/";
 $insert_query = "INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ('$c_name','$c_email','$c_subject','$c_message')";
 if(strlen($c_name) < 3 || strlen($c_name) > 40){
    echo "<script> alert('length will be 3-40 character') </script>" ;
    echo "<script>location.href='contactus.php'</script>";
 }
 else if(!preg_match($namePattern,$c_name))
 {
    echo "<script> alert(' Use only Alphabat and space') </script>" ;
    echo "<script>location.href='contactus.php'</script>";
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
        echo "<script>location.href='contactus.php'</script>";
     }
 }

?>
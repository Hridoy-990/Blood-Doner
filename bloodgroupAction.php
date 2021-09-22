<?php
   include 'config.php';
   if(isset($_POST['n_submit'])){
    $pname = $_POST['pname'] ;
    $bloodgroup = $_POST['bloodgroup'] ;
    $uBlood = $_POST['uBlood'] ;
    $age = $_POST['age'] ;
    $hname = $_POST['hname'] ;
    $reason = $_POST['reason'] ;
    $number = $_POST['number'] ;
 }
 
 $namePattern = "/^[a-zA-Z ]+$/";
 $agePattern = "/^[1-9][0-9]*$/";
 $phnPatt = "/(\+88)?-?01[3-9]\d{8}$/";
 $insert_query = "INSERT INTO `needblood`(`Pname`, `bloodgroup`, `unitOfBlood`, `age`, `hospitalName`, `reason`, `phone`) VALUES ('$pname','$bloodgroup','$uBlood','$age','$hname','$reason','$number')";
 if(strlen($pname) < 3 || strlen($pname) > 40){
    echo "<script> alert('length will be 3-40 character') </script>" ;
    echo "<script>location.href='bloodGroup.php'</script>";
 }
 else if(!preg_match($namePattern,$pname))
 {
    echo "<script> alert(' Use only Alphabat and space') </script>" ;
    echo "<script>location.href='bloodGroup.php'</script>";
 }
 else if(strlen($hname) < 3 || strlen($hname) > 40){
    echo "<script> alert('length will be 3-40 character') </script>" ;
    echo "<script>location.href='bloodGroup.php'</script>";
 }
 elseif(!preg_match($phnPatt,$number))
 {
    echo "<script> alert('phone number not valid') </script>" ;
    echo "<script>location.href='bloodGroup.php'</script>";
 }
 else if(strlen($age) > 3)
 {
    echo "<script> alert('length must be between (1 - 3) digit !') </script>" ;
    echo "<script>location.href='bloodGroup.php'</script>";
 }
 elseif(!preg_match($agePattern,$age))
 {
    echo "<script> alert('Only Digit !') </script>" ;
    echo "<script>location.href='bloodGroup.php'</script>";
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
        echo "<script>location.href='home.php'</script>";
     }
 }

?>
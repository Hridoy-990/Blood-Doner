<?php
include 'config.php';
if(isset($_POST['insert'])){
    $dname = $_POST['dname'];
    $d_bloodgroup = $_POST['d_bloodgroup'];
    $image = $_FILES['image'];
   // print_r($image) ;
    $imageTempLocation = $_FILES['image']['tmp_name'];
    $imageName = $_FILES['image']['name'];

    $imageLocalLocation = "image/.$imageName";
    move_uploaded_file($imageTempLocation, $imageLocalLocation);
    $insert_query = "INSERT INTO `gallery`( `DonerName`, `bloodGroup`, `image`) VALUES ('$dname','$d_bloodgroup','$imageLocalLocation')";
    if(!mysqli_query($conn , $insert_query))
    {
        //print_r($insert_query) ;
       die("not intersed!") ;
    }
    else
    {
       echo "<script> alert('Sucssesfully inserted!') </script>" ;
       echo "<script>location.href='gallery.php'</script>";
    }
     

}


?>
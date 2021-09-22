<?php
include 'config.php';
if(isset($_POST['Update'])){
    $val=$_POST['id'];
    $dname = $_POST['dname'];
    $u_bloodgroup= $_POST['d_bloodgroup'];
    $image = $_FILES['image'];


    $imageTempLocation = $_FILES['image']['tmp_name'];
    $imageName = $_FILES['image']['name'];


    $imageLocalLocation = "image/.$imageName";
    move_uploaded_file($imageTempLocation, $imageLocalLocation);
   
    $update_query = "UPDATE `gallery` SET `DonerName`='$dname',`bloodGroup`='$u_bloodgroup',`image`='$imageLocalLocation' WHERE id='$val'";
     
     
     
     if(mysqli_query($conn,$update_query)){
         echo "<script>alert('Updated!')</script>";
        echo "<script>location.href= 'gallery.php'</script>";
     }else{
        echo "<script>alert('NOT updated!')</script>";
     }
     

}


?>


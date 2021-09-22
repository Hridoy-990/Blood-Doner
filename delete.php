<?php

include 'config.php';
$id=$_GET['id'];

$delete_query= "DELETE FROM `gallery` WHERE id='$id'";

mysqli_query($conn,$delete_query);

echo "<script>location.href='gallery.php'</script>";

?>
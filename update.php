<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
         body {
             background-color: grey;
        }
    </style>


    <title>Update</title>
</head>

<body>


    <?php
    include 'config.php';   

    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $selectQuery = "SELECT * FROM `gallery` WHERE id='$id'";
    $record = mysqli_query($conn, $selectQuery);
    $data = mysqli_fetch_array($record);


?>
<div class="container-fluid">
                        <div class="row justify-content-center mt-5">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                        <form action="updateAction.php" method="post" enctype="multipart/form-data">
                        
                        <div class="mb-3">
                        Name: <input type="text" class="form-control" required name="dname" value = "<?php echo $data['DonerName'] ?>" >
                        </div> 
                        <select class="form-select" require aria-label="d_bloodgroup" name = "d_bloodgroup" value = "<?php echo $data['bloodGroup'] ?>" required>
                        <option selected>Blood Group Name</option>
                        <option value="O+" > O+ </option> 
                        <option  value="B+" > B+ </option> 
                        <option  value="AB+"> AB+ </option> 
                        <option value="A+" > A+ </option> 
                        <option value="O-" > O- </option> 
                        <option value="B-" > B- </option> 
                        <option value="AB-"> AB- </option> 
                        <option value="A-" > A- </option> 
                    </select>
                    <div class="mb-3">
                        Image: <input type="file" class="form-control" required name="image"  value="<?php echo $data['image']?>" >
                        </div>

                        <div class="mb-3">
                          <img src= "<?php echo $data['image']?>"  width="150px" alt="Image">
                        </div>
                        <input type="hidden" name="id" value="<?php echo $data['id']?>" >
                        <input type="submit" class="btn btn-primary col-12 " class="form-control" name="Update" value="Update">

                        </form>
                        </div>
                        </div>      
                </div>










    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>
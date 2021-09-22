<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DONER REGISTRATION PAGE</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

    </head>
    <style>
          body {
             background-color: grey;
        }
     </style>
<body>
    <div class="container-fluid" >
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="insert.php" method="post">
                <div class="mb-3"> 
                    <h3 class="text-center"> DONER REGISTER</h3>
                </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="r_name" placeholder="name" require>
                    </div>  
                    <div class="mb-3">
                        <input type="email" class="form-control" name="r_email" placeholder="email" require>
                    </div>  
                    <div class="mb-3">
                        <input type="password" class="form-control" name="r_pass" placeholder="password" require>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="r_cpass" placeholder="confirm password" require>
                    </div>
                     Gender<br>
                    <input type="radio" name="r_gender" value="Male" checked>Male <br>
                    <input type="radio" name="r_gender" value="Female" >Female <br>
                    <input type="radio" name="r_gender" value="Other" >Other <br>
                   <select class="form-select" aria-label="r_bloodgroup" name = "r_bloodgroup" require>
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
                            <input type="text" class="form-control" name="r_age" placeholder="Age" require>
                        </div>
                     
                        <div class="mb-3">
                            <input type="text" class="form-control" name="r_phone" placeholder="phone number" require>
                        </div>
                        <button type="submit" class="btn btn-primary col-12" name = "r_submit">Register</button>
                  
                </form>
            </div>
        </div>
    </div>
</body>
</html>
  
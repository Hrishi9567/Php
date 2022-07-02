<?php
 include ("connection.php");?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
    <form action="" method="POST">
  <div class="mb-3">
    <label  class="form-label">F-Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input name="email" type="email" class="form-control" id="exampleInputPassword1" required pattern="[^ @]*@[^ @]*">
  </div>
   
  <div class="mb-3">
    <label  class="form-label">Date Of Birth</label>
    <input name="dob" type="date" class="form-control" id="exampleInputPassword1" required>
  </div>
  <div class="mb-3">
    <label  class="form-label">Address</label>
    <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    
  </div>
   <input type="submit"  name="register" class="btn btn-primary"></input>
   <a href="display.php" class="btn btn-primary" role="button" aria-disabled="true">Display Data</a>
   
</form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>

<?php

 

    
    if(isset($_POST['register']))
    {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    
    
    $sql = "INSERT INTO `form_data`(`name`, `email`, `dob`, `address`)VALUES ('$name','$email','$dob','$address')";
    
    $inserted =mysqli_query($conn, $sql);
      if($inserted){
      echo "<h3>Form has been submitted successfuly !</h3>";

      
    } else{
      echo "ERROR: Hush! Sorry $sql";
    
     mysqli_close($conn);
     }
     }
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Information Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Email</th>
      <th scope="col">DOB</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    <?php
include ("connection.php");

$selectquery ="select * from form_data";
$query = mysqli_query($conn,$selectquery);
$nums = mysqli_num_rows($query);
while ($res =mysqli_fetch_array($query)) {
  ?>
   <tr>
      <th ><?php echo $res['name'];?></th>
      <td><?php echo $res['email'];?></td>
      <td><?php echo $res['dob'];?></td>
      <td><?php echo $res['address'];?></td>
    </tr>
    <?php
   
}
?>
   
   
  </tbody>

</table>
  
  </div>
   
   <a href="index.php" class="btn btn-primary" role="button" aria-disabled="true">Back to Registration</a>


</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>

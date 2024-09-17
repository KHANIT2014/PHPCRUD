<?php

include "db.php";
include "functions.php";
?>

<?php

$errorMessage="";
$successMessage ="";
updateRecords();

?>

<!-- https://www.youtube.com/watch?v=72U5Af8KUpA            crud youtube chanel -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
     crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" 
    crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
<form   method="post">
<!-- <input type="hidden" name="id" value="$id" > -->
 
<div class="mb-3">
    <label for="username" class="form-label">username</label>
    <input type="text" class="form-control" name="username" 
    id="exampleInputEmail1" aria-describedby="emailHelp"  required=""
     value="<?php echo $username;?>">
    
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="email" class="form-control" name="email" 
    id="exampleInputEmail1" aria-describedby="emailHelp" required="" 
   value="<?php echo $email;?>" >
  </div> 
  <div class="mb-3">
    <label for="text" class="form-label">mobile</label>
    <input type="text" class="form-control" name="mobile" 
    id="exampleInputEmail1" aria-describedby="emailHelp" required="" 
   value="<?php echo $mobile;?>" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password"
     id="exampleInputPassword1" required=""value="<?php echo $password;?>" >
  </div>

  <?php
  if(!empty($successMessage)){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Successfully done!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
  ?>
  <button type="submit" name="submit" value="submit" class="btn btn-primary">Update</button>
</form>
</div>
</body>
</html>
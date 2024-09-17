<?php

include "db.php";?>

<?php

// $sql= "SELECT * FROM crud2024 WHERE id='$id'";
// $updaterestule= mysqli_query($connection,$sql);
// $rowupdate= mysqli_fetch_assoc($updaterestule);
// $username= $rowupdate['username'];
// $email= $rowupdate['email'];
// $mobile= $rowupdate['mobile'];
// $password= $rowupdate['password'];
if(isset($_POST['submit'])){
    $id=$_GET['updateid'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $query = "update  crud2024  set id='$id', username='$username',
    email='$email',mobile='$mobile',password='$password' ";

    $result= mysqli_query($connection,$query);

    if($result){
        echo "Data Updated successfully";
    }else
    echo "failed to insert data into database";
    
}


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
<form  action="update.php" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">username</label>
    <input type="text" class="form-control" name="username" 
    id="exampleInputEmail1" aria-describedby="emailHelp"  required="" value=<?php echo $username; ?>>
    
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="email" class="form-control" name="email" 
    id="exampleInputEmail1" aria-describedby="emailHelp" required="" value=<?php echo $email; ?>>
  </div> 
  <div class="mb-3">
    <label for="text" class="form-label">mobile</label>
    <input type="text" class="form-control" name="mobile" 
    id="exampleInputEmail1" aria-describedby="emailHelp" required="" value=<?php echo $mobile; ?>>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password"
     id="exampleInputPassword1" required="" value=<?php echo $password; ?>>
  </div>
  <button type="submit" name="submit" value="submit" class="btn btn-primary">Update</button>
</form>
</div>
</body>
</html>
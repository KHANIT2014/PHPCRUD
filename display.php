<?php
session_start();
include "db.php";
include "functions.php";
// userPro();

// if(!empty($_SESSION["id"])){
//   $id= $_SESSION["id"];
//   $resuser= "SELECT * FROM crudnew WHERE id =$id ";
//   $result= mysqli_query($connection,$resuser);

//   $rowuser1= mysqli_fetch_assoc($resultUser);

// }else{
//   // header("location:login.php");
//   echo "
//   <script>Alert ('User Profile Not Found Please try again')</script>
//   ";
// }


?>


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

    <!-- <h1 style="text-align:center">Welcome Display Page <?php echo $rowuser1["$username"];  ?></h1> -->
    <h1 style="text-align:center">Welcome Display Page </h1>
        
        <!-- <button class="btn btn-primary">add</button> -->
        <!-- <a style="color: white;" href="login.php">login</a> -->
        <button  href="login.php" class="btn btn-primary">
          <a style="color: white;" href="registration.php">Add New User</a></button>
          <button  href="login.php" class="btn btn-primary">
          <a style="color: white;" href="logout.php">logout</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">serial no</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th scope="col">image</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
  displayAll();
  
  ?>

  
       

  

  

 
  


    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
    </div>
    <img src="uploads\<?php echo $row['image']; ?>" alt="">
</body>
</html>
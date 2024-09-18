<?php 
include "db.php";
?>
<?php
function registration(){
    global $connection;
    $errorMessage="";
    $successMessage ="";
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $filename=$_FILES['image']['name'];
    // $extn = pathinfo($filename,PATHINFO_EXTENSION);
    // $allowedTypes= array("jpeg","pdf","png","gif");
    $tempName =$_FILES['image']['tmp_name'];
    $targetPath= "uploads/".$filename;
    // echo $targetPath;
    move_uploaded_file($_FILES['image']["tmp_name"],$targetPath);






    // if(in_array($extn,$allowedTypes)){
    //     if(move_uploaded_file($tempName,$targetPath)){
    //         echo "file uploaded ";
    //     }else
    //     echo "something is wrong !";
    // }else
    // echo "file not uploaded";

    // $hashFormate= "$5%$&^$!()JKU$";
    // $sym= "qwertyujklopsg";
    // $javjpass = $hashFormate . $sym;
    // $password = crypt($password,salt: $javjpass);

    
    $query = "INSERT INTO  crudnew (username,email,mobile,password,photo)
    value('$username','$email','$mobile','$password','$targetPath')";
   

    $result= mysqli_query($connection,$query);

    if($result){
      // $successMessage="successfully connect";
      header('Location:display.php');
    }else
    $errorMessage ="failed to connect";
    // echo "failed to insert data into database";   
}
}



function loginUser(){
    global $connection;
    $errorMessage="";
$successMessage ="";
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM crudnew where username='$username'";
    $resl= mysqli_query($connection,$query);
    $rown= mysqli_fetch_assoc($resl);
    if(mysqli_num_rows($resl)>0){
        if($password==$rown["password"]){
            $_SESSION["login"]=true;
            $_SESSION["id"]=$rown["id"];
            header("location:display.php");
        }
        else{
            echo" 
           <script>alert ('wrong password')</script>
            ";
        }
        
    }
    else{
        echo" 
        <script>alert ('User Not Found! Please Register & Try again')</script>
         ";


}
   
    
}
}



function displayAll(){
    global $connection;
    $query = "SELECT * FROM  crudnew";
  $result = mysqli_query($connection,$query);
  if($result){
    while($row1= mysqli_fetch_assoc($result)){
        $id= $row1['id'];
      //   $username= $row['username'];
      //   $email= $row['email'];
      //   $mobile= $row['mobile'];
      //   $password= $row['password'];
      //   $image = $row['photo'];
      ?>
      <tr>
        <th scope="row">'<?php echo $row1['id']?></th>
          <td><?php echo $row1['username']?></td>
          <td><?php echo $row1['email']?></td>
          <td><?php echo $row1['mobile']?></td>
          <td><?php echo $row1['password']?></td>
          <td><img src="<?php echo $row1['photo'] ?>" height='100px' width='100px'/></td>

     <?php echo
      '<td>
      
    <button class="btn btn-primary"><a href="update.php?updateid='.$id.' " class="text-light">update</a></button></td><td>
    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
  </td>
    </tr>';
    } 
  }
}


function deleteAll(){
    global $connection;
    if(isset($_GET['deleteid'])){
        $id= $_GET['deleteid'];
    
    
        $delete = "delete from crudnew  WHERE id = '$id'";
        $result = mysqli_query($connection,$delete);
        if($result){
            header('Location:display.php');
        }else
        echo "please try again !";
    }
    
}


function logoutAll(){
    global $connection;
    $_SESSION=[];
session_unset();
session_destroy();
header('location:login.php');
}

function userPro(){
    global $connection;
    if(!empty($_SESSION["id"])){
  $id= $_SESSION["id"];
  $resuser= "SELECT * FROM crudnew WHERE id ='$id' ";
  $result= mysqli_query($connection,$resuser);

  $rowuser1= mysqli_fetch_assoc($result);

}else{
  // header("location:login.php");
  echo "
  <script>Alert ('User Profile Not Found Please try again')</script>
  ";
}


}


function updateRecords(){
    global $connection;
    $id=$_GET['updateid'];
    $query = "SELECT * FROM crudnew where id =$id ";
  $result = mysqli_query($connection,$query);
  if($result){
    while($rowupdate = mysqli_fetch_assoc($result)){
        $id= $rowupdate['id'];
        $username= $rowupdate['username'];
        $email= $rowupdate['email'];
        $mobile= $rowupdate['mobile'];
        $password= $rowupdate['password'];
        }
      }
// The Aboove mentioned code has been updated in update page directly do to some reasons !! you can remove this 
// code from $id to $password with curly brackets KHAN JAVID
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    // UPDATE `crud2024` SET `username` = 'saturdaynew' WHERE `crud2024`.`id` = 24;

    $query2 = "UPDATE   crudnew  SET id= $id, username='$username',
    email='$email',mobile='$mobile', password='$password' where id= $id ";

    $result= mysqli_query($connection,$query2);

    if($result){
        echo $successMessage="successfullly updated";
        header('location:display.php');
    }else
    echo "failed to insert data into database";
    
}

}




?>
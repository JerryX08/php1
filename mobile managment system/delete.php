  <?php
   include 'navbar.php';
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `crud1` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
      //  echo "Delete successfull";
      header('location:display.php');
    }else{
        die(mysqli_error($con));

    }
}


?>
<?php
include 'navbar.php';
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud1` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$salary=$row['salary'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $salary=$_POST['salary'];

    $sql="update `crud1` set id=$id,name='$name',email='$email',mobile='$mobile',salary='$salary'
    where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       echo "data update successfully";
        // header('location:display.php');
    }else{
        die(mysqli_error($con));
    }


}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>details of employes</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control"
                placeholder="Enter name"
                name="name" autocomplete="off">
            </div>   

             <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control"
                placeholder="Enter email"
                name="email" autocomplete="off">
            </div>
             <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control"
                placeholder="Enter mobile"
                name="mobile" autocomplete="off">
            </div>
             <div class="form-group">
                <label>salary</label>
                <input type="text" class="form-control"
                placeholder="Enter salary"
                name="salary" autocomplete="off">
            </div>   






            <button type="submit" class="btn btn-primary" name="submit">update</button>
        </form>

    </div>



</body>

</html>
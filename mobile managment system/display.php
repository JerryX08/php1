<?php
include 'navbar.php';
include 'connect.php';?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">


</head>
<body>
    

<div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a>
    
    </button><table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Salary</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>


    <?php

    $sql="select * from `crud1`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
           $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $salary=$row['salary'];
            echo ' <tr>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$salary.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'">Delete</a></button>   
           </td>
            </tr>';
        }
        
    }



    ?>


    
  </tbody>
</table>

</div>


</body>
</html>
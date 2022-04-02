<?php 

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Display</title>
</head>
<body>
    <div class="container">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nr.</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operazioni</th>
      <td>
      
      </td>
    </tr>
  </thead>
  <tbody>

  <?php

  $sql = "Select * from `users`";
  $result=mysqli_query($con, $sql);
  if($result){
     while($row=mysqli_fetch_assoc($result)){
         $id=$row['id'];
         $name=$row['name'];
         $email=$row['email'];
         $mobile=$row['mobile'];
         $password=$row['password'];

         echo '<>
         <th scope="row">'.$id.'</th>
         <td>'.$name.'</td>
         <td>'.$email.'</td>
         <td>'.$mobile.'</td>
         <td>'.$password.'</td>
         <td>
         <button class="btn btn-primary"><a href="update.php?update='.$id.'" class="text-light">Update</a></button>
       <button class="btn btn-danger"><a href ="delete.php?delete='.$id.'" class="text-light">Delete</a></button></td>
       </tr>';
     }
      

  }

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
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Aggiungi</a></button>

    </div>
</body>
</html>
<?php 

include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `users` (name,email,mobile, password)
    values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result) {
        echo "dati inseriti";
    } else {

        die(mysqli_error($con));



  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD - User</title>
</head>
<body>
    <div class="container"></div>
    <h1>TITOLO</h1>
    <form method="post">
  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" placeholder="inserisci il tuo nome" name="name" autocomplete="off" >
   
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="inserisci la tua email" name="email" autocomplete="off" >
   
  </div>

  <div class="mb-3">
    <label class="form-label">Mobile</label>
    <input type="text" class="form-control" placeholde="inserisci un tuo telefono" name="mobile" autocomplete="off" >
   
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" placeholde="inserisci una password" name="password" autocomplete="off" >
   
  </div>
  
  <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
<?php 

require 'connect.php';

   //funzione per sanitizzare dati prima di salvataggio su db
   function clear_data($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    $data = filter_var($data, FILTER_SANITIZE_STRING);
    return $data; 
   }

 //ricerca dati salvataggio esistente
$id = $_GET['update'];

    //mostro prima i dati presenti
    $sql = "SELECT * from `users` WHERE id=$id";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $password=$row['password'];


    if (isset($_POST['submit'])) {
         $id=$row['id'];
         $name=$row['name'];
         $email=$row['email'];
         $mobile=$row['mobile'];
         $password=$row['password'];
     }
    
  
    $name = clear_data($_POST['name']);
    $email = clear_data($_POST['email']);
    $mobile = clear_data($_POST['mobile']);
    $password = clear_data($_POST['password']);


    $sql = "update`users` set name='$name', email = '$email', mobile='$mobile', password= '$password' WHERE id=$id";
 
    $result=mysqli_query($con,$sql);
    if($result) {
      header('location:display.php');
        //echo "dati inseriti";
    } else {

        die(mysqli_error($con));

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
    <title>CRUD - UPDATE</title>
</head>
<body>
    <div class="container"></div>
    <h1>Aggiorna i dati dell'utente</h1><br />
    <form method="post" name="form" onsubmit="return validateForm()">
  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" placeholder="inserisci il tuo nome" name="name" autocomplete="off" value="<?php echo $nome; ?>">
   
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
<script src="funzioni.js"></script>
</body>
</html>
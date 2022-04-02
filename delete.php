<?php 

include 'connect.php';


if(isset($_GET['delete'])){
    $id=$_GET['delete'];
  echo $id; 

    $sql = "DELETE from users WHERE id=$id";
    $result=mysqli_query($con, $sql);
    if ($result) {
        echo "cancellazione con successo";
        ?>
          <script>
               
        // redirect to google after 5 seconds
       
        window.setTimeout(function() {
            window.location.href = 'display.php';
        }, 1000);
    

          </script>  
        <?php
    } else {
        die(mysqli_error($con));
    }
}


?>
<?php 


$con = new mysqli('localhost','root','root','cruddatabase');


if($con) {
    echo "connessione ok";

}else{

    die(mysqli_error($con));
}




?>
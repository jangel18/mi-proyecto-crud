<?php
function connection()  {
    $host="localhost";
    $user="root";
    $password="";
    
    $bd="users_crud_php";

    $connect= mysqli_connect($host,$user,$password);

    mysqli_select_db($connect,$bd);
    
    return $connect;
}

?>
<?php 

$conn = mysqli_connect('localhost','root','','rezervisi_bp');

if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>
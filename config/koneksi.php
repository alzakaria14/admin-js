<?php 

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'db_ruangkarya';
$koneksi = mysqli_connect($host,$user,$password,$database);

$salt = 'HeN!$Ta7zoB&v8A8t9WVjOWihb1*Xhd6*Ms8^0rLsvmRJGBxGU';

function base_url($path){
    $base_url = 'http://localhost/'.$path;
    return $base_url;
}

?>
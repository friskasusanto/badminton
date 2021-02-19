<?php

$server = "localhost";
$user = "cpluscod_reserve";
$password = ";$4F[5-1AqtA";
$nama_database = "cpluscod_badminton_reserve";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("cannot connect: " . mysqli_connect_error());
}

?>
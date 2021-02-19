<?php 

 // $server = "localhost";
 //  $user = "cpluscod_reserve";
 //  $password = ";$4F[5-1AqtA";
 //  $nama_database = "cpluscod_badminton_reserve";

  $server = "localhost";
  $user = "root";
  $password = "";
  $nama_database = "badminton";

  $db = mysqli_connect($server, $user, $password, $nama_database);

  if( !$db ){
      die("cannot connect: " . mysqli_connect_error());
  }


    $first = $_POST['first'];
    $last = $_POST['last'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $residential = $_POST['residential'];
    
      if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL = $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
       } else {
        $pageURL = $_SERVER["SERVER_NAME"];
       }



    $sql = "INSERT INTO reservation (firstname, lastname, date_reservation, email, residential)
     VALUE ('$first', '$last', '$date', '$email', '$residential')";
    $query = mysqli_query($db, $sql);
    
   
    if( $query ) {

        header('Location: http://'.$pageURL.'/reserve/index.blade.php?status=success');
    } else {

        header('Location: http://'.$pageURL.'/reserve/index.blade.php?status=gagal');
    }
?>
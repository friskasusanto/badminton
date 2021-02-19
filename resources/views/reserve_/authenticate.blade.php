<?php
session_start();

include "set.blade.php";

        if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL = $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
       } else {
        $pageURL = $_SERVER["SERVER_NAME"];
       }
       
        $email        = $_POST['email'];
        $password     = $_POST['password'];

        // clean data 
        $user_email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $pswd = mysqli_real_escape_string($db, $password);
        

        // Query if email exists in db
        $sql = "SELECT * From user WHERE email = '{$email}' ";
        $query = mysqli_query($db, $sql);
        $rowCount = mysqli_num_rows($query);
        $user  = mysqli_fetch_array($query);
        
        if($rowCount > 0){
            $hasil = password_verify($password , $user["password"]);
            if($hasil){
                $_SESSION['member_id']  = $user['id'];
                $_SESSION['username']   = $user['username'];
                header('Location: http://'.$pageURL.'/reserve/dashboard.blade.php');
            }
        } 
        

?>
<?php
 
session_start();
if ($_SERVER["SERVER_PORT"] != "80") {
    $pageURL = $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
} else {
    $pageURL = $_SERVER["SERVER_NAME"];
}

unset($_SESSION['member_id']);
unset($_SESSION['username']);

header('Location: http://'.$pageURL);
 
?>
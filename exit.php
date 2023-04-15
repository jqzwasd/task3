<?php
    session_start();
    if(isset($_POST["exit"])){
        session_destroy();
        session_unset();
    }

echo $_SERVER['REQUEST_URI'];
header("Location: "."auth.php");
?>
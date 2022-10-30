<h1> Dashboard Admin </h1>

<h2><a href="./logout.php"> Logout</a></h2>

<?php

session_start();



// if (isset($_GET["menu"])) {
//     $menu=$_GET["menu"];
//     if ($menu== "logout") {
//         session_destroy();
//     }
// }

if (!isset($_SESSION["email"])){
    header ("location:login.php");
    
    }

?>
<?php
session_start();
include('config/dbcon.php');

if(isset($_SESSION['auth'])){
    $_SESSION['message'] = "Login to access Dashboard";
    header("Locaton: ../login.php");
    exit(0);
}
// else{
//     if($_SESSSION['auth_role'] != "1"){
//         $_SESSION['message'] = "You Are Not Authorized";
//         header("Locaton: ../login.php");
//         exit(0);

//     }
// }





// else
// {
//     if($_SESSION['auth_role'] != "1")
//     {
//         
//         header
//     }
// }

?>
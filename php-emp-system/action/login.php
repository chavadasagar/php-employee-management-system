<?php

    include "connection.php";
    
    $uid = $_POST['uid'];
    $pas = $_POST['pas'];

    $q = mysqli_query($con,"select * from admin where username='$uid' and password='$pas'");

    while($r = mysqli_fetch_row($q))
    {
        
            header('location:../signup.php');
        
    }
    

?>
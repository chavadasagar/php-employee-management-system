<?php
    $id = $_GET['i'];
    include("connection.php");
    mysqli_query($con,"delete from info where id='$id'");
    header('location:../delemp.php');
?>
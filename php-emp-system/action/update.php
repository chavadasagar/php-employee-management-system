<?php
    include("connection.php");
    $id = $_POST['id'];
    $nm = $_POST['nm'];
    $uid = $_POST['uid'];
    $pas = $_POST['pas'];
    $em = $_POST['em'];
    $phno = $_POST['phno'];
    $ct = $_POST['ct'];
    mysqli_query($con,"update info set name='$nm',username='$uid',password='$pas',email='$em',phno='$phno',ct='$ct' where id='$id'");
    header('location:../update.php');
?>

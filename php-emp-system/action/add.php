<?php
    include("connection.php");
    $nm = $_POST['nm'];
    $uid = $_POST['uid'];
    $pas =$_POST['pas'];
    $em = $_POST['em'];
    $phno = $_POST['phno'];
    $ct = $_POST['ct'];
    mysqli_query($con,"insert into info(name,username,password,email,phno,ct) values('$nm','$uid','$pas','$em','$phno','$ct')");
    ?>
    <script>
        alert("data insert successfuly!!");
    </script>
    <?php
    header('location:../index.html');
?>

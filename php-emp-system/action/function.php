<?php
    function sagar($id)
    {
        include("connection.php");
        $q = mysqli_query($con,"select * from info where id='$id'");
        while($row = mysqli_fetch_array($q))
        {
            return $row['name'];
        }
    }
?>
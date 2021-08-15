<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body
        {
            display: grid;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <th colspan="4" align="center"><h1>Sagar Chavada</h1></th>
        </tr>
        <tr>
            <td align="center"><a href="signup.php">add employee</a></td>
            <td align="center"><a href="update.php">update employee</a></td>
            <td align="center"><a href="delemp.php">delete employee</a></td>
            <td align="center"><a href="fetch.php">show all employee</a></td>
        </tr>
        <tr>
            <td colspan="4" align="center">
                <h3>remove employee</h3>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <?php
                    include("action/connection.php");
                    $query = mysqli_query($con,"select * from info");
                    ?>
                    <table border="1" align="center">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>username</th>
                        <th>password</th>
                        <th>email</th>
                        <th>phone no</th>
                        <th>city</th>
                        <th>remove</th>
                    </tr>    
                    <?php
                    while($row = mysqli_fetch_array($query))
                    {
                        ?>
                        <tr>
                            <td><?php print $row['0']; ?></td>
                            <td><?php print $row['1']; ?></td>
                            <td><?php print $row['2']; ?></td>
                            <td><?php print $row['3']; ?></td>
                            <td><?php print $row['4']; ?></td>
                            <td><?php print $row['5']; ?></td>
                            <td><?php print $row['6']; ?></td>
                            <td><a href="action/del.php?i=<?php echo $row['0']; ?>">delete</a></td>
                        </tr>
                        <?php
                    }
                ?>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="4" align="center"><h2>@sagarchavada</h2></td>
        </tr>
    </table>
</body>
</html>
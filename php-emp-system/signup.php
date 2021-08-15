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
                <h3>add employee</h3>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <form action="action/add.php" method="post">
                    <center>
                        <table>
                            <tr>
                                <td>employee name</td>
                                <td><input type="text" name="nm"></td>
                            </tr>
                            <tr>
                                <td>username</td>
                                <td><input type="text" name="uid"></td>
                            </tr>
                            <tr>
                                <td>password</td>
                                <td><input type="password" name="pas"></td>
                            </tr>
                            <tr>
                                <td>employee email</td>
                                <td><input type="email" name="em"></td>
                            </tr>
                            <tr>
                                <td>employee phone no</td>
                                <td><input type="text" name="phno"></td>
                            </tr>
                            <tr>
                                <td>employee city</td>
                                <td><input type="text" name="ct"></td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2"><input type="submit" name="btn"></td>
                            </tr>
                        </table>
                    </center>
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="4" align="center"><h2>@sagarchavada</h2></td>
        </tr>
    </table>
</body>
</html>
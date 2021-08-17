<?php


    $id = $_POST["search"]; 
    $con = mysqli_connect("localhost","root","","employee");
    $q = mysqli_query($con,"select * from info where id='$id'");
    
    if($r = mysqli_fetch_row($q))
    {
        $name = $r['1'];
        $username = $r['2'];
        $password = $r['3'];
        $email = $r['4'];
        $phno = $r['5'];
        $ct = $r['6'];
        ?>
        <tr>
                                <td>employee name</td>
                                <td><input type="text" name="nm" id="nm" value="<?php echo $name;?>"></td>
                            </tr>
                            <tr>
                                <td>username</td>
                                <td><input type="text" name="uid" value="<?php echo $username?>"></td>
                            </tr>
                            <tr>
                                <td>password</td>
                                <td><input type="password" name="pas" value="<?php echo $password;?>"></td>
                            </tr>
                            <tr>
                                <td>employee email</td>
                                <td><input type="email" name="em" value="<?php echo $email;?>"></td>
                            </tr>
                            <tr>
                                <td>employee phone no</td>
                                <td><input type="text" name="phno" value="<?php echo $phno;?>"></td>
                            </tr>
                            <tr>
                                <td>employee city</td>
                                <td><input type="text" name="ct" value="<?php echo $ct; ?>"></td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2"><input type="submit" name="btn"></td>    
             </tr>
        <?php

        
    }
    mysqli_close($con);

?>
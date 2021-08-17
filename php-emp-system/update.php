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
            <th colspan="4" align="center"><h1>manage employee</h1></th>
        </tr>
        <tr>
            <td align="center"><a href="signup.php">add employee</a></td>
            <td align="center"><a href="update.php">update employee</a></td>
            <td align="center"><a href="delemp.php">delete employee</a></td>
            <td align="center"><a href="fetch.php">show all employee</a></td>
        </tr>
        <tr>
            <td colspan="4" align="center">
                <h3>update employee</h3>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <form action="action/update.php" method="post" name="updateform">
                    <center>
                        <table>
                            <tr>
                                <td>employee id</td>
                                <td><input type="text" name="id" id="no"></td>
                            </tr>
                            <div class="data">

                            </div>
                            
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

<div class=".table"></div>

<script src="js/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        
        $("#no").keyup(function(){
            var id = $("#no").val();
            $.ajax({
                url:"show.php",
                type:"POST",
                data:{search:id},
                success:function(data){
                    $(".data").html(data);
                }
            });
        });   
    });
</script>


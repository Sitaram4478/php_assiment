<?php
include("aconnect.php");
if(isset($_REQUEST['btnsubmit']))
{
    $q="insert into Appli_detail set
    appli_name='".$_REQUEST['appliname']."',
    appli_addr='".$_REQUEST['appliaddress']."',
    appli_num='".$_REQUEST['applinum']."'
    ";
    mysqli_query($con,$q);
    header("location:adis.php");
}
?>

<html>
    <head>
        <title>application form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <center>
            <form method="post">
                <table border="1">
                    <tr>
                        <td colspan="2" align="center">Registration Form</td>
                    </tr>
                    <tr>
                        <td>appli_name</td>
                        <td><input type="text" name="appliname" placeholder="enter your name" required></td>
                    </tr>

                    <tr>
                        <td>appli_addr</td>
                        <td><textarea name="appliaddress" placeholder="enter your address" required></textarea></td>
                    </tr>

                    <tr>
                        <td>appli_num</td>
                        <td><input type="number" name="applinum" placeholder="enter your number" required></td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center">
                            <button name="btnsubmit" class="btn btn-primary">submit</button>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>
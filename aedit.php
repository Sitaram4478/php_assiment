<?php
#include("aheader.php");
include("aconnect.php");
$q1="select * from Appli_detail where appli_id=".$_GET['appli_id'];
$res=mysqli_query($con,$q1);
$row=mysqli_fetch_object($res);
if(isset($_REQUEST['btnsubmit']))
{
   echo   $q="update Appli_detail set
    appli_name='".$_REQUEST['appliname']."',
    appli_addr='".$_REQUEST['appliaddress']."',
    appli_num='".$_REQUEST['applinum']."'
    where appli_id=".$_GET['appli_id'];
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
                        <td><input type="text" name="appliname" placeholder="enter your name" value="<?php echo $row->appli_name?>" required></td>
                    </tr>

                    <tr>
                        <td>appli_addr</td>
                        <td><textarea name="appliaddress" placeholder="enter your address" required><?php echo $row->appli_addr?></textarea></td>
                    </tr>

                    <tr>
                        <td>appli_num</td>
                        <td><input type="number" name="applinum" placeholder="enter your number" value="<?php echo $row->appli_num?>" required></td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center">
                            <button name="btnsubmit" type="submit" class="btn btn-primary">update</button>
                            <a href="adis.php" class="btn btn-primary">Back</a>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>
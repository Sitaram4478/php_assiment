<?php
#include("amenu.php");
#include("aheader.php");
include("aconnect.php");
$q="select * from Appli_detail";
$res=mysqli_query($con,$q);
?>


<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <table class="table table striped">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Number</th>
                <th>EDIT</th>
                <th>Delete</th>
            </tr>
            <?php
                while($row=mysqli_fetch_object($res))
                {
                ?>
                    <tr> 
                      <td><?php echo $row->appli_name?></td>
                      <td><?php echo $row->appli_addr?></td>
                      <td><?php echo $row->appli_num?></td>
                      <td> <a href="aedit.php?appli_id=<?php echo $row->appli_id;?>" class="btn btn-primary">EDIT</a></td>
                      <td> <a href="adel.php?appli_id=<?php echo $row->appli_id;?>" onclick="return confirm('are you sure want to delete')" class="btn btn-danger">Delete</a></td>
                     </tr>
                <?php
                }
                
            ?>
        </table>
    </body>
</html>
<?php include "condb.php" ?>
<?php include "bootstrap.php" ?>
<?php include "navbar.php" ?>

<!-- Query data from table 'soccer_field'-->
<?php
  $PID = $_GET["ID"];

  $queryProduct = "SELECT * FROM productlist WHERE productlist.PID = '$PID' ";
  $resultProduct = mysqli_query($con, $queryProduct) or die ("Error in query $queryProduct " . mysqli_error());
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel = "stylesheet" type = "text/css" href = "CSS.css" />
</head>
<body>
    <br>
    <div class="container" align="left">
        <div>
            <table border="0" class="table table-bordered">
                <thead>
                <?php while($row = mysqli_fetch_array($resultProduct)) { ?>
                    <tr>
                    <th width="100">Equipment ID</th>
                    <td><?=$row ["PID"]?></td>
                    </tr>
                    <tr>
                    <th width="100">Equipment name</th>
                    <td><?=$row ["PNAME"]?></td>
                    </tr>
                    <tr>
                    <th width="100"> Equipment type</th>
                    <td><?=$row ["PTYPE"]?></td>
                    </tr>
                    <tr>
                    <th width="100">Description</th>
                    <td><?=$row ["SPEC"]?></td>
                    </tr>
                    <tr>
                    <th width="100">Location or borrowing person</th>
                    <td><?=$row ["LOC"]?></td>
                    </tr>
                    <tr>
                    <th width="100">Equipment status</th>
                    <td><?=$row ["PSTATUS"]?></td>
                    </tr>
                
                    <tr>
                    <th width="100">Borrowing date</th>
                    <td><?=$row ["BDATE"]?></td>
                    </tr>
                    <tr>
                    <th width="100">Due date</th>
                    <td><?=$row ["RDATE"]?></td>
                    </tr>
                    <tr>
                    <th width="100">Person in charge</th>
                    <td><?=$row ["STAFF"]?></td>
                    </tr>
                <?php } ?>
                </thead>
            </table>
            <?php mysqli_close($con); ?>
            <div>
                <div class="box2">
                    <a class="btn btn-secondary" href='index.php' role="button">Back</a>
                <a class="btn btn-che" href='update_checkin.php?ID=<?php echo $PID;?>' role="button">Check in</a>
                </div>
                <br class="clear">
            </div>
        </div>
    </div>
    <br>
</body>
</html>
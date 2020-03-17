<?php include "condb.php" ?>
<?php include "bootstrap.php" ?>

<!-- Query data from table 'soccer_field'-->
<?php
    $query = "SELECT * FROM productlist WHERE PSTATUS = 'Borrowed' ORDER BY PID ASC" or die("Error:" . mysqli_error());
    $result = mysqli_query($con, $query);
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
    <table class="table table-bordered table-hover table-fa" width="1080">
        <thead class="thead-color">
            <tr>
                <th scope="col">Equipment ID</th>
                <th scope="col">Equipment Name</th>
                <th scope="col">Equipment Type</th>
                <th scope="col">Status</th>
                <th scope="col">Check in</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td width="150"><?=$row ["PID"]?></td>
                    <td width="150"><?=$row ["PNAME"]?></td>
                    <td width="200"><?=$row ["PTYPE"]?></td>
                    <td width="100"><?=$row ["PSTATUS"]?></td>
                    <td width="70"><a href='checkin_list.php?ID=<?php echo $row ["PID"]; ?>' class='btn btn-che' target ="_blank">Check in</a></td>
                </tr>
            <?php } ?>
        </tbody>
        <?php mysqli_close($con); ?>
    </table>
</body>
</html>
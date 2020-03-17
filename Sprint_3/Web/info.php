<?php include "condb.php" ?>
<?php include "bootstrap.php" ?>
<?php include "navbar.php" ?>

<!-- Query data from table 'soccer_field'-->
<?php
  $PID = $_GET["ID"];
  
  
  $queryProduct = "SELECT * FROM productlist WHERE productlist.PID = '$PID' ";
  $resultProduct = mysqli_query($con, $queryProduct) or die ("Error in query $queryProduct " . mysqli_error());

  // $queryBorrow = "SELECT BDATE, RDATE, STAFF FROM borrowing WHERE borrowing.PID = '$PID' " ;
  // $resultBorrow = mysqli_query($con, $queryBorrow) or die ("Error in query $queryBorrow " . mysqli_error());
  
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
        <div class="box1">
          <a class="btn btn-secondary" href='productlist.php' id="back" name="back" role="button" target="content">Back</a>
        </div>
        <div class="box2">
          <a href='editlistForm.php?ID=<?php echo $PID; ?>' id="edit" name="edit" class='btn btn-infoo'>Edit</a>
          
          <a href='delete.php?ID=<?php echo $PID; ?>' id="delete" name="delete" onclick="return confirm('Do you want to delete this record? !!!')" class='btn btn-del'>Delete</a>
        </div>
        <br class="clear">
      </div>
    </div>
  </div>

</body>
</html>
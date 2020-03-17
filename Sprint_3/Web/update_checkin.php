<?php include "condb.php" ?>
<?php include "bootstrap.php" ?>
<?php include "navbar.php" ?>

<!-- Query data from table 'soccer_field'-->
<?php
//   $PID = $_GET["ID"];

//   $queryProduct = "SELECT * FROM productlist WHERE productlist.PID = '$PID' ";
//   $resultProduct = mysqli_query($con, $queryProduct) or die ("Error in query $queryProduct " . mysqli_error());

//   $queryBorrow = "SELECT BDATE, RDATE, STAFF FROM borrowing WHERE borrowing.PID = '$PID' " ;
//   $resultBorrow = mysqli_query($con, $queryBorrow) or die ("Error in query $queryBorrow " . mysqli_error());
    $PID = $_GET["ID"];
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
    <div align="center">
        <form action="update_checkindata.php" method = "get" onsubmit = "return confirm('Do you want to  update PSTATUS? !!!')">
            <div class="wid-chec">
                <div>
                    <div class="form-group">
    
                    <input type = "hidden" name = "ID" value ="<?php echo $PID;?>">
                        <label for="exampleFormControlInput1"><b>Please enter return date</b></label>
                        <input type="text" class="input-no-spinner form-control" name="DATE" id="CheckField" placeholder="Ex. 29/02/2020" pattern="\d{1,2}/\d{1,2}/\d{4}" />
                    </div>
                    <br><br>
                    <div>
                        <div class="box2">
                            <input type="submit" value ="submit" class="btn btn-sub">
                            <a class="btn btn-secondary" href=javascript:history.back(1) role="button">Back</a>
                        </div>
                        <br class="clear">
                    </div>
                </div>
            </div>
        </form>
    </div>

    

</body>
</html>
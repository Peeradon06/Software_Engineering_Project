<?php include "condb.php" ?>

<?php
  $PID = $_POST['PID'];
  $PNAME = $_POST['PNAME'];
  $PTYPE = $_POST['PTYPE'];
  $SPEC = $_POST['SPEC'];
  $LOC = $_POST['LOC'];
  $PSTATUS = $_POST['PSTATUS'];
  $BDATE = $_POST['BDATE'];
  $RDATE = $_POST['RDATE'];
  $STAFF = $_POST['STAFF'];
  $ACTUALRDATE = $_POST['ACTUALRDATE'];

  $check = " SELECT PID FROM productlist WHERE PID = '$PID' ";
  $result = mysqli_query($con, $check) or die(mysqli_error());
  $num = mysqli_num_rows($result);

  if($num > 0) {
    echo "<script>";
    echo "alert('This Id is already exits. Please enter another Id');";
    echo "window.history.back();";
    echo "</script>";
  }

  $sql ="INSERT INTO productlist (PID, PNAME, PTYPE, SPEC, LOC, PSTATUS, BDATE, RDATE, STAFF, ACTUALRDATE) 
          VALUES ('$PID', '$PNAME', '$PTYPE', '$SPEC', '$LOC', '$PSTATUS', '$BDATE', '$RDATE', '$STAFF', 'ACTUALRDATE')";
  
  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  mysqli_close($con);
  
  if($result) {
    echo "<script>";
    echo "alert('Adding Successful');";
    echo "window.location ='index.php'; ";
    echo "</script>";
  } 
?>


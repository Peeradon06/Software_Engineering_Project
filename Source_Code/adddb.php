<?php
include('condb.php');

$PID = $_POST['PID'];
$PNAME = $_POST['PNAME'];
$PTYPE = $_POST['PTYPE'];
$PSTATUS = $_POST['PSTATUS'];
//$Repair_status = $_POST['Repair_status'];

  $check = "
  SELECT  PID
  FROM productlist  
  WHERE PID = '$PID' 
  ";
    $result1 = mysqli_query($con, $check) or die(mysqli_error());
    $num=mysqli_num_rows($result1);
 
    if($num > 0)
    {
    echo "<script>";
    echo "alert(' รหัสอุปกรณ์ซ้ำกรุณากรอกข้อมูลใหม่ !');";
    echo "window.history.back();";
    echo "</script>";
    }else{


$sql ="INSERT INTO productlist
    
    (PID,PNAME,PTYPE,PSTATUS) 

    VALUES 

    ('$PID', '$PNAME', '$PTYPE','$PSTATUS')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);

   }

    if($result){
      echo "<script>";
      echo "alert('Add Succesfuly');";
      echo "window.location ='admin.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='admin.php'; ";
      echo "</script>";
    }
?>
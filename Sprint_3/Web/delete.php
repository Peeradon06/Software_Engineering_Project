<meta charset="UTF-8">
<?php 
  include('condb.php');


  $PID = $_GET["ID"];

  $sql = "DELETE FROM productlist WHERE PID='$PID' ";
  $result = mysqli_query($con,  $sql) or die ("Error in query:  $sql " . mysqli_error());

  if($result){
    echo "<script type='text/javascript'>";
    echo "window.location = 'productlist.php'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to delete again');";
    echo "</script>";
  }
?>
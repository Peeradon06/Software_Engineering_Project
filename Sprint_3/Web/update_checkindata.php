<meta charset="UTF-8">
<script>
  function backtoinfo(){
    window.location.href = "index.php";
  }
</script>
<?php 
  include('condb.php');


  $PID = $_GET["ID"];
  $DATE = $_GET["DATE"]; 
  $sql = "UPDATE productlist SET PSTATUS = 'Available', ACTUALRDATE = '$DATE' , LOC = '' WHERE PID='$PID' ";
  $result = mysqli_query($con,  $sql) or die ("Error in query:  $sql " . mysqli_error());

  
  if($result){
      echo "<script type='text/javascript'>backtoinfo();";
      echo "</script>";
    } else{
      echo "<script type='text/javascript'>";
      echo "alert('Error back to checkin again');";
      echo "</script>";
  }
?>
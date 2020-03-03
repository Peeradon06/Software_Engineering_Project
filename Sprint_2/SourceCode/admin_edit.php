<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม

  $PID = $_REQUEST["PID"];
  $NPID = $_REQUEST["NPID"];
  $PNAME = $_REQUEST["PNAME"];
  $PTYPE = $_REQUEST["PTYPE"];
  $SPEC = $_REQUEST["SPEC"];
  $LOC = $_REQUEST["LOC"];
  $PSTATUS = $_REQUEST["PSTATUS"];
  $BDATE = $_REQUEST["BDATE"];
  $RDATE = $_REQUEST["RDATE"];
  $STAFF = $_REQUEST["STAFF"];
  
//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
  
  $sql = "UPDATE productlist SET 
      PID='$NPID' ,  
      PNAME='$PNAME' , 
      PTYPE='$PTYPE' ,
      SPEC='$SPEC' ,
      LOC='$LOC' ,
      PSTATUS='$PSTATUS' ,
      BDATE='$BDATE' ,
      RDATE='$RDATE' ,
      STAFF='$STAFF' 


      WHERE PID='$PID' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
    
    
  echo "<script type='text/javascript'>";
  echo "alert('Updated');";
  echo "window.location = 'admin.php'; ";
  echo "</script>";
  }
  
?>
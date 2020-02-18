<?php
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$PID = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM productlist WHERE PID='$PID' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<?php include('h.php');?>

<script type="text/javascript">
function fncSubmit()
{
    if(document.getElementById('PNAME').value == "")
    {
        alert('กรุณากรอกชื่ออุปกรณ์');
        return false;
    }
    if(document.getElementById('PTYPE').value == "")
    {
        alert('กรุณากรอกประเภทของอุปกรณ์');
        return false;
    }
    if(document.getElementById('PSTATUS').value == "")
    {
        alert('กรุณากรอกสถานะของอุปกรณ์');
        return false;
    }
}
</script>
<form  name="admin" action="admin_edit.php" method="POST" id="admin" class="form-horizontal" onSubmit="JavaScript:return fncSubmit();">

  <input type="hidden" name="PID" value="<?php echo $PID; ?>">

         <!--<div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
              <input  name="PID" type="text" required class="form-control" id="PID" value="<?=$PID;?>" placeholder="Product ID" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
          </div> -->
          
          <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
              <input  name="PNAME" type="text"  class="form-control" id="PNAME" value="<?=$PNAME;?>" placeholder="Product Name"  minlength="2" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
              <input  name="PTYPE" type="text"  class="form-control" id="PTYPE" value="<?=$PTYPE;?>" placeholder="Product Type" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
              <input  name="PSTATUS" type="text"  class="form-control" id="PSTATUS" value="<?=$PSTATUS;?>" placeholder="Status" />
            </div>
          </div>

          <!-- <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
              <input  name="Repair_status" type="text" required class="form-control" id="Repair_status" value="<?=$Repair_status;?>" placeholder="Repair Status" />
            </div>
          </div> -->


          <div class="form-group">
            <div class="col-sm-3"> </div>
            <div class="col-sm-6" align="right">
              <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-saved"></span>Submit</button>      
            </div> 
          </div>
        </form>
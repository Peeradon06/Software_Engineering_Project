<?php include('h.php');?>
<script type="text/javascript">
function fncSubmit()
{
    if(document.getElementById('PID').value == "")
    {
        alert('กรุณากรอกรหัสอุปกรณ์');
        return false;
    }
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
<form  name="admin" action="adddb.php" method="POST" id="admin" class="form-horizontal" onSubmit="JavaScript:return fncSubmit();">
          <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
              <input  name="PID" type="text"  class="form-control" id="PID" placeholder="Product ID" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
              <input  name="PNAME" type="text"  class="form-control" id="PNAME" placeholder="Product Name"  minlength="2" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
              <input  name="PTYPE" type="text"  class="form-control" id="PTYPE" placeholder="Product Type" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
              <input  name="PSTATUS" type="text"  class="form-control" id="PSTATUS" placeholder="Status" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-3"> </div>
            <div class="col-sm-6" align="right">
              <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-saved"></span>Submit</button>      
            </div> 
          </div>
        </form>
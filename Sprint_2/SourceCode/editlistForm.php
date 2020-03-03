<?php include "navbar.php" ?>
<?php include "h.php" ?>

<?php
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี


$PID = $_GET["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM productlist WHERE PID='$PID' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);

?>
<div class="container">
  <p></p>
    <div class="row">
      <div class="col-md-3">
        <?php include('menu_left.php');?> 
      </div>
 <script type="text/javascript">
function fncSubmit()
{
  if(document.getElementById('NPID').value == "" &
    document.getElementById('PNAME').value == "" &
    document.getElementById('SPEC').value == "" &
    document.getElementById('LOC').value == "" &
    document.getElementById('STAFF').value == "")
    {
        alert('Please enter product detail');
        return false;
    }

    if(document.getElementById('NPID').value == "")
    {
        alert('Please Enter product id ');
        return false;
    }
    if(document.getElementById('PNAME').value == "")
    {
        alert('Please enter product name');
        return false;
    }
    if(document.getElementById('PTYPE').value == "")
    {
        alert('Please select product type');
        return false;
    }
    
    if(document.getElementById('SPEC').value == "")
    {
        alert('Please enter product description');
        return false;
    }
   
    if(document.getElementById('LOC').value == "")
    {
        alert('Please enter location of the product');
        return false;
    }
    if(document.getElementById('PSTATUS').value == "")
    {
        alert('Please select product status');
        return false;
    }
    if(document.getElementById('STAFF').value == "")
    {
        alert('Please enter staff name ');
        return false;
    }   
    
    
}
</script> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>
   <div class="container" align="center">
    <form  name="admin" action="admin_edit.php" method="POST" id="admin" class="form-horizontal" onSubmit="JavaScript:return fncSubmit();">


        <input type="hidden" name="PID" value="<?php echo $PID; ?>">

        <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
            <label for="inputUsername">Product ID</label>
              <input  name="NPID" type="text"   class="form-control" id="NPID" value="<?=$PID;?>" placeholder="Product ID" pattern="^[a-zA-Z0-9/]+$"  minlength="2"  />
            </div>
          </div> 
          
          <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
            <label for="inputUsername">Product Name</label>
              <input  name="PNAME" type="text"  class="form-control" id="PNAME" value="<?=$PNAME;?>" placeholder="Product Name"  minlength="2" />
            </div> 
          </div>
          
          <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left"> 
            <label for="inputUsername">Product Type</label><br>
            <select  name="PTYPE" id="PTYPE" class="form-control"  >
              <option value='<?=$PTYPE;?>'><?=$PTYPE;?></option>
              <option value='อาคารถาวร'>อาคารถาวร</option>
              <option value='อาคารชั่วคราว/โรงเรือน'>อาคารชั่วคราว/โรงเรือน</option>
              <option value='สิ่งก่อสร้าง'>สิ่งก่อสร้าง</option>
              <option value='ครุภัณฑ์สำนักงาน'>ครุภัณฑ์สำนักงาน</option>
              <option value='ครุภัณฑ์ยานพาหนะและขนส่ง'>ครุภัณฑ์ยานพาหนะและขนส่ง</option>
              <option value='ครุภัณฑ์ไฟฟ้าและวิทยุ'>ครุภัณฑ์ไฟฟ้าและวิทยุ</option>
              <option value='ครุภัณฑ์โฆษณาและเผยแพร่'>ครุภัณฑ์โฆษณาและเผยแพร่</option>
              <option value='ครุภัณฑ์การเกษตร'>ครุภัณฑ์การเกษตร</option>
              <option value='ครุภัณฑ์โรงงาน'>ครุภัณฑ์โรงงาน</option>
              <option value='ครุภัณฑ์ก่อสร้าง'>ครุภัณฑ์ก่อสร้าง</option>
              <option value='ครุภัณฑ์สำรวจ'>ครุภัณฑ์สำรวจ</option>
              <option value='ครุภัณฑ์วิทยาศาสตร์การแพทย์'>ครุภัณฑ์วิทยาศาสตร์การแพทย์</option>
              <option value='ครุภัณฑ์คอมพิวเตอร์'>ครุภัณฑ์คอมพิวเตอร์</option>
              <option value='ครุภัณฑ์การศึกษา'>ครุภัณฑ์การศึกษา</option>
              <option value='ครุภัณฑ์งานบ้านงานครัว'>ครุภัณฑ์งานบ้านงานครัว</option>
              <option value='ครุภัณฑ์กีฬา'>ครุภัณฑ์กีฬา</option>
              <option value='ครุภัณฑ์ดนตรีและนาฏศิลป์'>ครุภัณฑ์ดนตรีและนาฏศิลป์</option>
              <option value='ครุภัณฑ์อาวุธ'>ครุภัณฑ์อาวุธ</option>
              <option value='ครุภัณฑ์สนาม'>ครุภัณฑ์สนาม</option>

              </select>
            </div> 
          </div>

          <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left"> 
            <label for="inputUsername">Detail</label>
              <input  name="SPEC" type="text"   class="form-control" id="SPEC" value="<?=$SPEC;?>" placeholder="EX. Dell Optiplex 7010 DT" />
             </div> 
          </div>
          
          <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left"> 
            <label for="inputUsername">Location or Borrowing Person</label>
              <input  name="LOC" type="text"  class="form-control" id="LOC" value="<?=$LOC;?>" placeholder="EX. SC6301 / Mrs. Nameentra" />
            </div> 
          </div>

          <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left"> 
            <label for="inputUsername">Product Status</label><br>
              <select  name="PSTATUS" id="PSTATUS" class="form-control" >
              <option value='<?=$PSTATUS;?>'><?=$PSTATUS;?></option>
              <option value='Available'>Available</option>
              <option value='Unavailable'>Unavailable</option>
              <option value='Borrowed'>Borrowed</option>
              <option value='Overdue'>Over due</option>
              <option value='Repairing'>Repairing</option>
              </select>
            
            </div> 
          </div>

          <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left"> 
            <label for="inputUsername">Borrowing Date</label>
              <input  name="BDATE" type="text"  class="form-control" id="BDATE" value="<?=$BDATE;?>" placeholder="Ex. 29/02/2020" pattern="\d{1,2}/\d{1,2}/\d{4}"  />
            </div> 
          </div> 

          <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left"> 
            <label for="inputUsername">Return Date</label>
              <input  name="RDATE" type="text"  class="form-control" id="RDATE" value="<?=$RDATE;?>" placeholder="Ex. 29/02/2020" pattern="\d{1,2}/\d{1,2}/\d{4}"  />
            </div> 
          </div> 

          <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left"> 
            <label for="inputUsername">Person in charge</label>
              <input  name="STAFF" type="text"   class="form-control" id="STAFF" value="<?=$STAFF;?>" placeholder="Ex. Thanapon" />
            </div> 
          </div> 


          <div class="form-group">
            <div class="col-sm-3"> </div>
            <div class="col-sm-6" align="right">
              <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-saved"></span>Submit</button>      
            </div> 
          </div>
        </form>
  </div>
</body>

</html>
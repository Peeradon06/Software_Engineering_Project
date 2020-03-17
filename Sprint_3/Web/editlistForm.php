<?php include "condb.php" ?>
<?php include "bootstrap.php" ?>
<?php include "navbar.php" ?>

<?php
  //include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  // ?edit_id มาจากหน้า info.php
  $PID = $_GET["ID"];
  //2. query ข้อมูลจากตาราง:
  $sql = "SELECT * FROM productlist WHERE PID='$PID' ";
  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- CSS -->
  <link rel = "stylesheet" type = "text/css" href = "CSS.css" />

  <!-- JQuery -->
  <!-- <script src="jquery.js"></script>
  <script src="jquery.validation.js"></script> -->
  <!-- <script>
  $("form").validate();
  </script> -->
  </head>

<body>
  <br>
  <div class="container" align="center">
    <form name="editListForm" action="admin_edit.php" method="POST" id="editListForm" class="form-horizontal" onsubmit="return fncaleartSubmit();">
      <input type="hidden" name="PID" value="<?php echo $PID; ?>">
      <table border="0">
        <tbody>
          <tr>
            <td width="330" class="top">
              <!-- Product ID -->
              <div class="form-group">
                <label for="PID">Product ID</label>
                <input type="text" class="form-control" name="NPID" id="NPID" placeholder="EX. 5602130000087" value="<?=$row["PID"]?>">
              </div>

              <!-- Product Name -->
              <div class="form-group">
                <label for="PNAME">Product Name</label>
                <input type="text" class="form-control" name="PNAME" id="PNAME" value="<?=$row["PNAME"]?>" placeholder="EX. ชุดคอมพิวเตอร์ประมวลผลระดับสูง">
              </div>

              <!-- Product Type -->
              <div class="form-group">
                <label for="PTYPE">Product Type</label><br>
                <select name="PTYPE" id="PTYPE" class="form-control">
                  <option value='<?=$row['PTYPE'];?>'><?=$row['PTYPE'];?></option>
                  <option value=''>Please Select</option>
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

              <!-- Detail -->
              <div class="form-group">
                <label for="SPEC">Detail</label>
                <textarea class="form-control" rows="5" name="SPEC" id="SPEC" placeholder="EX. Dell Optiplex 7010 DT"><?=$row['SPEC'];?></textarea>
              </div>
            </td>
            <td width="330" class="top">
              <!-- Location or Borrowing Person -->
              <div class="form-group">
                <label for="LOC">Location or Borrowing Person</label>
                <input type="text" class="form-control" name="LOC" id="LOC" placeholder="EX. SC6301 / Mrs. Nameentra" value="<?=$row['LOC'];?>">
              </div>

              <!-- Product Status -->
              <div class="form-group">
                <label for="PSTATUS">Product Status</label><br>
                <select class="form-control" name="PSTATUS" id="PSTATUS">
                <option value='<?=$row['PSTATUS'];?>'><?=$row['PSTATUS'];?></option>
                  <option value=''>Please Select</option>
                  <option value='Available'>Available</option>
                  <option value='Unavailable'>Unavailable</option>
                  <option value='Borrowed'>Borrowed</option>
                  <option value='Overdue'>Overdue</option>
                  <option value='Repairing'>Repairing</option>
                </select>
              </div>

              <!-- Borrowing Date -->
              <div class="form-group">
                <label for="BDATE">Borrowing Date</label>
                <input type="text" class="input-no-spinner form-control" name="BDATE" id="BDATE" placeholder="Ex. 29/02/2020" value="<?=$row['BDATE'];?>">
              </div>

              <!-- Return Date -->
              <div class="form-group">
                <label for="RDATE">Return Date</label>
                <input type="text" class="input-no-spinner form-control" name="RDATE" id="RDATE" placeholder="Ex. 29/02/2020" value="<?=$row['RDATE'];?>">
              </div>

              <!-- Person in charge -->
              <div class="form-group">
                <label for="STAFF">Person in charge</label>
                <input type="text" class="form-control" name="STAFF" id="STAFF" placeholder="Ex. Thanapon" value="<?=$row['STAFF'];?>">
              </div>
              <div>

              </div>
            </td>
          </tr>
          <!-- Button -->
          <tr>
            <td colspan="2" align="center">
              <br>
              <p id="errors" class="errortext"></p>
              <br>
              <button type="submit" class="btn btn-sub" id="btn"></span>Submit</button>
              <a class="btn btn-secondary" href=javascript:history.back(1) role="button">Back</a>
              <br>
              <p id="errors" style="color:red;"></p>
            </td>
          </tr>
        </tbody>
      </table>
    </form>   
  </div>
</body>

<!-- <?php
  // echo $row['PID'];
  // echo $row['PNAME'];
  // echo $row['SPEC'];
  // echo $row['LOC'];
  // echo $row['PSTATUS'];
  // echo $row['STAFF'];
  // echo $row['BDATE'];;
  // echo $row['RDATE'];;
?> -->

</html>

<script type="text/javascript">
  function fncaleartSubmit() {
    if(document.getElementById('NPID').value == "" &
      document.getElementById('PNAME').value == "" &
      document.getElementById('SPEC').value == "" &
      document.getElementById('LOC').value == "" &
      document.getElementById('STAFF').value == "") {
      alert('Please enter product detail');
      return false;
    }

    if(document.getElementById('NPID').value == "") {
        alert('Please enter product id');
        return false;
    }

    if(document.getElementById('PNAME').value == "") {
        alert('Please Enter product name ');
        return false;
    }

    if(document.getElementById('PTYPE').value == "") {
        alert('Please select product type');
        return false;
    }
    
    if(document.getElementById('SPEC').value == "") {
        alert('Please enter product description');
        return false;
    }
  
    if(document.getElementById('LOC').value == "") {
        alert('Please enter location of the product');
        return false;
    }

    if(document.getElementById('PSTATUS').value == "") {
        alert('Please select product status');
        return false;
    }

    if(document.getElementById('STAFF').value == "") {
        alert('Please enter staff name ');
        return false;
    }

    // เช็ค Pattern
      var NPID = document.editListForm.NPID.value;
      var BDATE = document.editListForm.BDATE.value;
      var RDATE = document.editListForm.RDATE.value;

      // เช็ค Product ID
      if (NPID) {
          var pattern_NPID = /^[0-9]{13}$/;
    if (NPID.match(pattern_NPID)) {

      } else {
      document.getElementById('errors').innerHTML="กรุณากรอก Product ID ให้ถูกต้อง";
      return false;
      }
      }

      // เช็ค BDATE
      if (BDATE) {
          var pattern_BDATE = /^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/;
    if (BDATE.match(pattern_BDATE)) {

      } else {
      document.getElementById('errors').innerHTML="กรุณากรอก Borrowing Date ให้ถูกต้อง";
      return false;
      }
      }

      // เช็ค RDATE
      if (RDATE) {
          var pattern_RDATE = /^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/;
    if (RDATE.match(pattern_RDATE)) {

      } else {
      document.getElementById('errors').innerHTML="กรุณากรอก Return Date ให้ถูกต้อง";
      return false;
      }
    }
  }
</script> 

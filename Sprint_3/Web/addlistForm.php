<?php include "condb.php" ?>
<?php include "bootstrap.php" ?>
<?php include "navbar.php" ?>

<script type="text/javascript">
    function fncSubmit() {
        if (document.getElementById('PID').value == "" &
            document.getElementById('PNAME').value == "" &
            document.getElementById('SPEC').value == "" &
            document.getElementById('LOC').value == "" &
            document.getElementById('STAFF').value == "") {
            alert('Please enter equipment detail');
            return false;
        }

        if (document.getElementById('PID').value == "") {
            alert('Please enter equipment id');
            return false;
        }

        if (document.getElementById('PNAME').value == "") {
            alert('Please enter equipment name');
            return false;
        }

        if (document.getElementById('PTYPE').value == "") {
            alert('Please select equipment type');
            return false;
        }

        if (document.getElementById('SPEC').value == "") {
            alert('Please enter equipment description');
            return false;
        }

        if (document.getElementById('LOC').value == "") {
            alert('Please enter location of the equipment');
            return false;
        }

        if (document.getElementById('PSTATUS').value == "") {
            alert('Please select equipment status');
            return false;
        }

        if (document.getElementById('STAFF').value == "") {
            alert('Please enter person in charge name');
            return false;
        }

        // เช็ค Pattern
        var PID = document.addListForm.PID.value;
        var BDATE = document.addListForm.BDATE.value;
        var RDATE = document.addListForm.RDATE.value;

        // เช็ค Product ID
        if (PID) {
            var pattern_PID = /^[0-9]{13}$/;
			if (PID.match(pattern_PID)) {

		    } else {
				document.getElementById('errors').innerHTML="Name should not contain special symbols";
				return false;
		    }
        }

        // เช็ค BDATE
        if (BDATE) {
            var pattern_BDATE = /^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/;
			if (BDATE.match(pattern_BDATE)) {

		    } else {
				document.getElementById('errors').innerHTML="Please enter a valid borrowing date ( ex. 02/02/2020 )";
				return false;
		    }
        }

        // เช็ค RDATE
        if (RDATE) {
            var pattern_RDATE = /^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/;
			if (RDATE.match(pattern_RDATE)) {

		    } else {
				document.getElementById('errors').innerHTML="Please enter a valid due date ( ex. 02/02/2020 )";
				return false;
		    }
        }
    }
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS -->
    <link rel = "stylesheet" type = "text/css" href = "CSS.css" />
</head>

<body>
    <div class="container" align="center">
        <form name="addListForm" action="adddb.php" method="POST" onsubmit="return fncSubmit();">
            <table border="0">
                <tbody>
                    <tr>
                        <td width="330" class="top">
                            <div class="form-group">
                                <label for="PID">Product ID</label>
                                <input type="text" class="form-control" name="PID" id="PID" placeholder="EX. 5602130000087">
                                <!-- กรอกเป็นภาษาอังกฤษตัวพิมพ์เล็กหรือตัวพิมพ์ใหญ่ ภาษาไทย หรือสัญลักษณ์ . - _ ( ) / โดยมึความยาวอักษรตั้งแต่ 12-50 ตัวอักษร -->
                            </div>

                            <div class="form-group">
                                <label for="PNAME">Product Name</label>
                                <input type="text" class="form-control" name="PNAME" id="PNAME" placeholder="EX. ชุดคอมพิวเตอร์ประมวลผลระดับสูง">
                            </div>

                            <div class="form-group">
                                <label for="PTYPE">Product Type</label><br>
                                <select name="PTYPE" id="PTYPE" class="form-control">
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

                            <div class="form-group">
                                <label for="SPEC">Detail</label>
                                <textarea class="form-control" rows="5" name="SPEC" id="SPEC" placeholder="EX. Dell Optiplex 7010 DT"></textarea>
                            </div>
                        </td>
                        <td width="330" class="top">
                            <div class="form-group">
                                <label for="LOC">Location or Borrowing Person</label>
                                <input type="text" class="form-control" name="LOC" id="LOC" placeholder="EX. SC6301 / Mrs. Nameentra">
                            </div>

                            <div class="form-group">
                                <label for="PSTATUS">Product Status</label><br>
                                <select class="form-control" name="PSTATUS" id="PSTATUS">
                                    <option value=''>Please Select</option>
                                    <option value='Available'>Available</option>
                                    <option value='Unavailable'>Unavailable</option>
                                    <option value='Borrowed'>Borrowed</option>
                                    <option value='Overdue'>Overdue</option>
                                    <option value='Repairing'>Repairing</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="BDATE">Borrowing Date</label>
                                <input type="text" class="input-no-spinner form-control" name="BDATE" id="BDATE" placeholder="Ex. 29/02/2020">
                            </div>

                            <div class="form-group">
                                <label for="RDATE">Return Date</label>
                                <input type="text" class="input-no-spinner form-control" name="RDATE" id="RDATE" placeholder="Ex. 29/02/2020">
                            </div>

                            <div class="form-group">
                                <label for="STAFF">Person in charge</label>
                                <input type="text" class="form-control" name="STAFF" id="STAFF" placeholder="Ex. Thanapon" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <br>
                            <p id="errors" style="color:red;"></p>
                            <br>
                            <button type="submit" class="btn btn-sub" id="btn" >Submit</button>
                            <a class="btn btn-secondary" href='productlist.php' role="button" target="content">Back</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>

</html>
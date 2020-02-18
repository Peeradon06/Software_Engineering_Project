
 <?php
      include('h.php');
                //1. เชื่อมต่อ database:
                include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                //2. query ข้อมูลจากตาราง tb_admin:
                $query = "SELECT * FROM productlist ORDER BY PID ASC" or die("Error:" . mysqli_error());
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
                echo ' <table class="table table-striped">';
                  //หัวข้อตาราง 
                    echo "
                      <tr>
                      <td>รหัสอุปกรณ์</td>
                      <td>ชื่ออุปกรณ์</td>
                      <td>ประเภท</td>
                      <td>สถานะ</td>
                      
                      <td>แก้ไข</td>
                      <td>ลบ</td>
                    </tr>";
                
                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                    echo "<td>" .$row["PID"] .  "</td> ";
                    echo "<td>" .$row["PNAME"] .  "</td> ";
                    echo "<td>" .$row["PTYPE"] .  "</td> ";
                    echo "<td>" .$row["PSTATUS"] .  "</td> ";
                   // echo "<td>" .$row["Repair_status"] .  "</td> ";
                    //แก้ไขข้อมูล
                    echo "<td><a href='admin.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
                    
                    //ลบข้อมูล
                    echo "<td><a href='delete.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
                  echo "</tr>";
                  }
                echo "</table>";
                //5. close connection
                mysqli_close($con);
                ?>
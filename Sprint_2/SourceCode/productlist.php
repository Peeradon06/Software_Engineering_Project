<?php include "h.php" ?>

 <?php
      
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
                      <td>Product ID</td>
                      <td>Product Name</td>
                      <td>Product Type</td>
                      <td>Detail</td>
                      <td>Location</td>
                      <td>Status</td>
                      <td>Borrowing Date</td>
                      <td>Return Date</td>
                      <td>Person in charge</td>
                      <td>Edit</td>
                      <td>Delete</td>
                      
                    </tr>";
                
                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                    echo "<td>" .$row["PID"] .  "</td> ";
                    echo "<td>" .$row["PNAME"] .  "</td> ";
                    echo "<td>" .$row["PTYPE"] .  "</td> ";
                    echo "<td>" .$row["SPEC"] .  "</td> ";
                    echo "<td>" .$row["LOC"] .  "</td> ";
                    echo "<td>" .$row["PSTATUS"] .  "</td> ";
                    echo "<td>" .$row["BDATE"] .  "</td> ";
                    echo "<td>" .$row["RDATE"] .  "</td> ";
                    echo "<td>" .$row["STAFF"] .  "</td> ";
                    
                    //แก้ไขข้อมูล
                    echo "<td><a href='editlistForm.php?ID=$row[0]' class='btn btn-warning btn-xs'>Edit</a></td> ";
                    
                    //ลบข้อมูล
                    echo "<td><a href='delete.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>Delete</a></td> ";
                  echo "</tr>";
                  }
                echo "</table>";
                
                //5. close connection
                mysqli_close($con);
                ?>
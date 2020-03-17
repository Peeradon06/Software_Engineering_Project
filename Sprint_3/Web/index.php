<?php include "condb.php" ?>
<?php include "bootstrap.php" ?>
<?php include "navbar.php" ?>

<!-- Query data from table 'soccer_field'-->
<?php
    $query = "SELECT * FROM productlist ORDER BY PID ASC" or die("Error:" . mysqli_error());
    $result1 = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- CSS -->
    <link rel = "stylesheet" type = "text/css" href = "CSS.css" />
</head>
<body>
    <br>
    <div align="center">
      <div>
        <div >
          <table border="0">
            <tbody>
              <tr>
                <td width="100" class="top">
                  <div>
                    <?php include 'menu_left.php' ?>
                  </div>
                </td>
                <td>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td class="td-top">
                  <div>
                    <iframe name="content" src="productlist.php" width="1080" height="800" frameborder="0"></iframe>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</body>
</html>
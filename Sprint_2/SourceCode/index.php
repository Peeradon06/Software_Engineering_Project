<?php include "navbar.php" ?>
<?php include "h.php" ?>

<!DOCTYPE html>
<html>
<head>
<head>
<body>
  <div class="container">
    <div>
      <br>
      <a type="button" href="admin.php?act=add"  class="btn-warning btn-sm">Add List</a>
      
      </br>
      <br>
      <?php
        $act = $_GET['act'];
        if($act == 'add'){
          include('addlistForm.php');
        } elseif ($act == 'edit') {
          include('editlistForm.php');
        } else {
          include('productlist.php');
        }
      ?>
    </div>
  </div>
</body>
</html>

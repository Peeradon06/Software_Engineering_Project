<!DOCTYPE html>
<html>
<head>
<?php include('h.php');
include('condb.php');
error_reporting( error_reporting() & ~E_NOTICE );?>
<head>
  <body>
    <div class="container">
  <?php include('navbar.php');?>
  <p></p>
    <div class="row">
      <div class="col-md-3">
        <?php include('menu_left.php');?> 
      </div>

      <div class = "col-md-6">
        <a href="admin.php?act=add" class="btn-info btn-sm">Add List</a>
        <p></p>
        <?php
          $act = $_GET['act'];
          if($act == 'add'){
          include('AddlistForm.php');
          }elseif ($act == 'edit') {
          include('editlistForm.php');
          }
          else {
          include('productlist.php');
          }
          ?>
      </div>

    </div>
  </div>
  </body>
</html>
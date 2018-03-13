<?php
require('config.php');
if(isset($_GET['id'])!="")
  {
  $id=$_REQUEST['id'];
  $delete=mysql_query("DELETE FROM user WHERE id='$id'");
  if($delete)
  {
      header("Location:Dashboard.php");
  }
  else
  {
      echo mysql_error();
  }
  }
?>

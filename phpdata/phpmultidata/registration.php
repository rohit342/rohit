<?php require('config.php'); ?>
<style>
.bor{width:500px; border:solid 1px; background-color:#CCFF66; font-family:Geneva, Arial, Helvetica, sans-serif; }
.view{width:100%; border:solid 1px; background:url(../hh.jpg);}
</style>
<div class="bor">
<form method="post" action="">
<table border="1" align="center">
<tr><td>first name</td>
<td>
<input type="text" name="fname" /></td></tr>
<tr><td>last name</td><td>
<input type="text" name="lname" /></td></tr>
<tr><td>user name</td><td>
<input type="text" name="email" /></td></tr>
<tr><td>password</td><td>
<input type="password" name="pws" /></td></tr>
<tr><td>class</td><td>
<input type="text" name="class" /></td></tr>
<tr><td>address</td><td>
<input type="text" name="address" /></td></tr>
<tr><td>contact</td><td>
<input type="text" name="contact" /></td></tr>
<tr><td></td><td>
<input type="submit" name="btn" /></td></tr>
</table>
</form>
</div>
<?php
if(isset($_REQUEST['btn']))
{

//echo"<pre>";

//print_r($_REQUEST);
  $name=$_REQUEST['fname'];
  $lnam=$_REQUEST['lname'];
  $ema=$_REQUEST['email'];
  $pwd=$_REQUEST['pws'];
  $cls=$_REQUEST['class'];
  $add=$_REQUEST['address'];
  $cont=$_REQUEST['contact'];
  
  $query=mysql_query("INSERT INTO `manoj`.`user` (`fname`, `lname`, `email`, `pws`, `class`, `address`, `contact`) values('$name','$lnam', '$ema', '".md5($pwd)."', '$cls', '$add', '$cont')");
  echo $query;
  
  }
  ?> 
  
 
  
</div>
  <form method="post" action="index.php">
  <input type="submit" name="login" value="Login" />
  </form>

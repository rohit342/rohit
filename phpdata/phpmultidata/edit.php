<?php
require('config.php');
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  if(isset($_POST['update']))
  {
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $pws=$_POST['pws'];
  $class=$_POST['class'];
  $address=$_POST['address'];
  $contact=$_POST['contact'];
 
  $query=mysql_query("UPDATE user SET fname='$fname', lname='$lname', email='$email', pws='".md5($pws)."', class='$class', address='$address', contact='$contact' WHERE id='$id'");
  if($query)
  {
  $msg="Successfully Updated!!";
  header('Location:dashboard.php');
  }
}
} 
?>

<?php 
if(isset($_GET['id'])!="")
{
$id=$_GET['id'];
$query="select * from user where id='$id'";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{
?>
<form method="post">
<input type="text" name="fname" value="<?php echo $row['fname'] ?>" />
<input type="text" name="lname" value="<?php echo $row['lname'] ?>"  />
<input type="text" name="email" value="<?php echo $row['email'] ?>" readonly="" />
<input type="text" name="pws" value="<?php echo $row['pws'] ?>" />
<input type="text" name="class" value="<?php echo $row['class'] ?>" />
<input type="text" name="address" value="<?php echo $row['address'] ?>" />
<input type="text" name="contact" value="<?php echo $row['contact'] ?>" />
<input type="submit" name="update" value="Edit" />
</form>
<?php } } ?>

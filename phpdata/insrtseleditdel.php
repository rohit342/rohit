<link rel="stylesheet" href="style.css"  type="text/css" />

<?php $con=mysqli_connect('localhost','root','','stud');?>
<?php
 if(isset($_REQUEST['btn']))
{
echo'<pre>';
print_r($_REQUEST);
$name=$_REQUEST['name'];
$clss=$_REQUEST['cls'];
$rollno=$_REQUEST['rollno'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['pws'];
$dob=$_REQUEST['DOB'];
$query=mysqli_query($con,"INSERT INTO `stud`.`user` (`name`, `class`, `roll`, `email`, `pws`, `dob`)VALUES('$name','$clss','$rollno','$email','$pass','$dob')");
 
 echo "<script> 
 alert('Success');
 
 </script>";
}
?>	
<div class="wrapper">
<div class="main">
<div class="form">
<form method="post">
<table align="center">
<tr>
<td>Name</td><td>
<input type="text" name="name" placeholder="Name" /></td></tr>
<tr>
<td>Class</td><td>
<input type="text" name="cls" placeholder="Class" /></td></tr>
<tr>
<td>Roll No</td><td>
<input type="text" name="rollno"placeholder="RollNo" /></td></tr>
<tr>
<td>Email</td><td>
<input type="text" name="email" placeholder="Email" /></td></tr>
<tr>
<td>Password</td><td>
<input type="text" name="pws" placeholder="password" /></td></tr>
<tr>
<td>Dob</td><td>
<input type="date" name="DOB" placeholder="date Of Birth"/></td></tr>
<tr>
<td>Submit</td><td>
<input type="submit" name="btn" value="Submit" /></td></tr>
</table>
</form>

</div>
<table border="1">
<th>ID</th>
<th>Name</th>
<th>Class</th>
<th>Rollno</th>
<th>Email</th>
<th>Password</th>
<th>Dob</th>
<th>Edit</th>
<th>Delete</th>
<?php 
$query="select* from user";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['class']; ?></td>
<td><?php echo $row['roll']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['pws']; ?></td>
<td><?php echo $row['dob']; ?></td>
<td><a href="edit.php?id=<?php echo $row['id']?>">Edit</a></td>
<td><a href="delete.php?id=<?php echo $row['id']?>" onClick="confirm('are you sure to delete this record');,">Delete</a></td>

</tr>
</td>


<?php } ?>
</table>
</div>
</div>


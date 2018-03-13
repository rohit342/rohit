<link rel="stylesheet" href="style1.css" type="text/css" />
<body>

<div class="formBox">
<table border="1">
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Password</th>
<th>Class</th>
<th>Address</th>
<th>Contact</th>
<th>Edit</th>
<th>Delete</th>
<?php
require('config.php');
include("session.php");
$query="select * from user";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['fname']; ?></td>
<td><?php echo $row['lname']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['pws']; ?></td>
<td><?php echo $row['class']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['contact']; ?></td>
<td><a href="edit.php?id=<?php echo $row['id']?>">Edit</a></td>
<td><a href="delete.php?id=<?php echo $row['id']?>" onClick="confirm('are you sure to delete this record');">Delete</a></td>
</tr>
<?php } ?>
</table>
<form method="post" action="logout.php">
<input type="submit" name="logout" vlaue="Logout">
</form>

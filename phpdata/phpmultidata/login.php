<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="style.css" type="text/css" />
<body>
<div class="title"><h1>Sign in form</h1></div>
<div class="formBox">
<?php require('config.php');
  
session_start();
if(isset($_POST['email'], $_POST['pws'])){
    $email =$_POST['email'];
    $pws = $_POST['pws'];

    if(!empty($email) && !empty($pws)){
        $pws = ($pws);
        $q = mysql_query("SELECT * FROM user WHERE email = '$email' AND pws = '".md5($pws)."'") or die(mysql_error());
       $row = mysql_num_rows($q);
        $data = mysql_fetch_array($q);
        if($row == 0){
            echo "Invalid pws or email combination";
        } else {
            $_SESSION['id'] = $data['id'];
            $_SESSION['email'] = $data['email'];
            header("location:dashboard.php");
        }
		


    } else {
        echo("Please All fields are required");
    }
}


?>  

<form method="post">
<p>User Name</p>
<input type="text"name="email" />
<p>Password</p>
<input type="password" name="pws"/>
<input type="submit" value="Login" name="Login"/>
<a href="">forget password</a>
</form></div>
</body>
</html>

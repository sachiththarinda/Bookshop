<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" type="text/css" href="signin.css">
<script src="signin.js"></script>



</head>
<body>

<?php include 'navbar.php'?>

<form ... onsubmit="return checkForm(this);" style="background-image: url(Harry-Potter-Book-List_BL_16-9.jpg.corpimagerendition.xxl.1400.788.png);,background-size: cover;">
    <h1 align="center">Customer Login</h1>
<table  class="login"  align="center" >
<tr><th colspan=2></th></tr>

<tr><td><h4>User Name</h4></td><td><input type="text" name="username" placeholder="Username"></td></tr><br>




<tr><td><h4>Password</h4></td><td><input type="password"  name="pwd1">
<br><br><a href="#" style="float: right;">Fogot Password ?</a>
</td>
</tr>


<tr><td><td>
<input type="submit" value="Submit">
</td></td></tr>



</table>
<br>


</form>	

<?php include 'footer.php'?>
 
</body>
</html>
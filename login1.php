<html>
<head>

<script>

function myfun()
{
var un = document.login.uname.value;
var ps = document.login.pwd.value;
if(un=="")
{
alert("please enter username");
document.login.uname.focus();
return false;
}
if(ps=="")
{
alert("please enter password");
document.login.pwd.focus();
return false;
}
return true;
}
</script>

</head>
<body>
<?php

include("links.html");

34

?>

<form name="login" method="post" onsubmit="return myfun()"

action="welcome.php">

Enter User Name: <input type="text" name="uname"/><br>
Enter Password: <input type="password" name="pwd"/><br>
<input type="submit"/><input type="reset"/>
</form>

</body>
</html>
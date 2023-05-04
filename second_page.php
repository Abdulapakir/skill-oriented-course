<?php
session_start(); // start the session
$username = $_SESSION["username"]; // get the session variable values
$userid = $_SESSION["userid"]; // get the session variable values
?>
<html>
<body>
<center>
<h1>
<?php
echo "User Name is: ".$username."<br/>";
echo "User Id is: ".$userid;
?>
</h1>
</center>
</body>
</html>
<?php
session_start(); // start the session
echo "Before Update User Name & User Id"."<br/>";
echo "User Name is: ".$_SESSION["username"]."<br/>";
echo "User Id is: ".$_SESSION["userid"]."<br/>";
$_SESSION["userid"] = "511"; // update the session variable values
?>
<html>
<body>
<?php
echo "After Update User Name & User Id"."<br/>";
echo "User Name is: ".$_SESSION["username"]."<br/>";
echo "User Id is: ".$_SESSION["userid"];
?>
</body>
</html>
<?php
session_start(); // start the session
$_SESSION["username"] = "cse"; // set the session variable
$_SESSION["userid"] = "501"; // set the session variable

?>
<html>
<body>
<?php
echo "Session variable is set.";
?>
<center>
<h1>
<a href="second_page.php">Go to Second Page</a>
</h1>
</center>
</body>
</html>
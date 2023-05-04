<?php

include("links.html");
$un = $_POST["uname"];
$ps = $_POST["pwd"];

if($un=="cse" && $ps=="cse05")
{
setcookie("mycookie", $un, time()+3600*24, "/");
echo "Welcome to ".$un;
}
else
{
?>
<script>
alert("Invalid credentials");
</script>
<?php
include("login1.php");
}
?>
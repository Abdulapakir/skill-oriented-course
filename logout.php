<?php
include("links.html");
setcookie("mycookie", "", time()-3600, "/");
echo "Logout successfully";
?>
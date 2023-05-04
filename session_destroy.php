<?php
session_start(); // start the session
?>
<html>
<body>
<?php
session_unset(); // clean the session variable
session_destroy();// destroy the session
echo "Session Destroy Successfuly";
?>
</body>
</html>
<?php

if(isset($_COOKIE['mycookie'])) {
include("links.html");
echo "this is your profile, your name is:".$_COOKIE['mycookie'];
}
else
{

?>
<script>
alert("please login first");
</script>
<?php
include("login.php");

}
?>
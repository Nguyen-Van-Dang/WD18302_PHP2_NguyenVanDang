<?php
setcookie("viewCount", '', time() + 1, "/");
setcookie("role", '', time() + 1, "/");
setcookie("userID", '', time() + 1, "/");
header("location: login.php");
?>
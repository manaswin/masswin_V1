<?php
session_start();
unset($_SESSION['status']);
unset($_SESSION['username']);
setcookie("user","",time()-3600);
 header("Location:index.php");
?>

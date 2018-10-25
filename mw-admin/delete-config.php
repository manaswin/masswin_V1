<?php
ob_start();
$submit=$_POST['Submit'];
if($submit=="Delete")
{
  unlink("library/mw-config.php");
  header("Location:install.php");
  exit;	 
}
	?>
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>delete Page</title>

<link href="css/style.css" rel="stylesheet" type="text/css">
</head>		
	<body class="tablecolor">
    <p class="pagesubheadeing" align="center">You can delete the config file from here</p>
    <table align="center">
<form action="delete-config.php" method="post">
<tr>
<td>
<input type="submit" value="Delete" name="Submit" style="width: 145; height: 30"/>
</td>
</tr>
</form>
</table>
</body>
</html>


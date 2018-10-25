<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Install Page</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<?php

if(file_exists("library/mw-config.php"))
{
  echo"<table align=center>";
  echo"<tr>";
  echo"<td class=pagesubheadeing> Config File already installed.If you want to install again please delete the existing mw-config.php file first.";
  echo"<a href=delete-config.php class=button>Delete Configuration File</a>";
  echo"</td>";
  echo"</tr>";
}
else
{
 
  echo"<table align=center>";
  echo"<tr>";
  echo"<td class=pagesubheadeing> We will create the config from here.Please fill all the information in the web interface for the config file creation.Incase any problem occured Kindly create the config file manually.";
  echo"</td>";
  echo"</tr>";
  echo"<tr>";
	echo"<td align=center class=button>";
    echo" <a href=setup-config.php>Create</a>";
    echo"</td>";
  echo"</tr>";


}
?>
<body>
</body>
</html>

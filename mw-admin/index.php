<?
ob_start();
session_start();
//setcookie("user", "view", time()+3600);
//setting cookie
setcookie("user", "view");
$_SESSION['status']=1;
include "library/connection.php";	
$_SESSION['username']=$var_tpg1;
   		$submit=$_POST['Submit'];
	  if($submit=='Login')
	  {
	  		//checking for existing user id
			$users = mysql_query("SELECT * FROM login where id='$var_tpg1'");
 	 		$user=mysql_fetch_array($users);
			 mysql_close();
						
			//if user id admin go to create login page 
		if($user[id]==$var_tpg1 && $user[password]==$var_tpg2 && $user[role_id]=='9')
		{
			 
			  header("Location:admin.php");
	 		  exit;	 
		}
		else if($user[id]==$var_tpg1 && $user[password]==$var_tpg2 && $user[role_id]=='1')
		{
			 
			  header("Location:pr-admin.php");
	 		  exit;	 
		}
		else if($user[id]==$var_tpg1 && $user[password]==$var_tpg2 && $user[role_id]=='2')
		{
			 
			  header("Location:adv-admin.php");
	 		  exit;	 
		}
		else if($user[id]==$var_tpg1 && $user[password]==$var_tpg2 && $user[role_id]=='3')
		{
			 
			  header("Location:cab-admin.php");
	 		  exit;	 
		}
		else if($user[id]==$var_tpg1 && $user[password]==$var_tpg2 && $user[role_id]=='4')
		{
			 
			  header("Location:news-admin.php");
	 		  exit;	 
		}
		else if($user[id]==$var_tpg1 && $user[password]==$var_tpg2 && $user[role_id]=='5')
		{
			 
			  header("Location:result-admin.php");
	 		  exit;	 
		}
		else
		{
		   ?>
                      <SCRIPT LANGUAGE="JavaScript">
				      alert("Wrong User ID or password");
			        </SCRIPT>
              <?php 
		}
	  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dash Board</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script src="js/check.js" type="text/javascript"></script>
</head>


<body>
<table width="780" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td colspan="2"><?php require_once('header.php') ?></td>
  </tr>
  <tr>
    <td width="180" align="left" valign="top" bgcolor="#7F7F7F"><?php require_once('../mw-content/theme/default/left-a.php') ?></td>
    <td width="600" valign="top">
   
    <table width="100%"  border="0" cellpadding="2" cellspacing="2">
    <tr><td colspan="2" align="left" valign="top" class="pageheadeing" bgcolor="#455884">Login </td></tr>
           <form name="login" action="index.php" method="post">
           <tr>
          <td width="42%" align="right"><div align="right" class="pagesubheadeing1">User Id:</div></td>
         <td width="58%" align="left"><input  name="tpg1" class="from" id="tpg1" tabindex="1" onBlur="Checktpg1()" size="25";/></td>
          </tr>
         <tr>
         <td align="right" class="form-text"><div align="right" class="pagesubheadeing1">Password:</div></td>
       <td align=left><input name="tpg2" type="password" class="from" id="tpg2" tabindex="1" onBlur="Checktpg2()" size="25"; /></td>
       </tr>
        <tr>
                <td colspan="2" class="AlmButton" ><div align="center">
                 <input type="submit" value="Login" name="Submit" style=width: 145; height: 30 tabindex="2"/> 
                  <a href="../mw-modules/user-management/register.php" class="pagesubheadeing">Not registered?Sign-Up!</strong></a>
             
              
             
                </div></td>
                </tr>
       </form>
		</table>
 </td>
  </tr>
  <tr>
    <td colspan="2"><?php require_once('../mw-content/theme/default/footer.php') ?></td>
  </tr>
</table>
</body>
</html>

<?php
session_start();
if(isset($_SESSION['status']))
{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator Page</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/check.js" type="text/javascript"></script>
</head>


<body>
<table width="780" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td colspan="2"><?php require_once('../mw-content/theme/default/header.php') ?></td>
  </tr>
  <tr>
    <td width="180" align="left" valign="top" bgcolor="#7F7F7F"><?php require_once('../mw-content/theme/default/left.php') ?></td>
    <td width="598" valign="top"><table width="100%">
      <tr>
        <td  align="left" valign="top" class="pageheadeing" bgcolor="#455884">Administrator Page </td>
      </tr>
      <tr>
        <td align="left"><table width="596" border="0" cellspacing="2" cellpadding="2">
          <tr>
            <td width="108" align="center" valign="middle" class="pagesubheadeing"><a href="admin.php"><img src="icons/admin.png" alt="admin" width="100" height="100" border="0" /></a></td>
            <td width="142" align="left" valign="middle" class="pageheadeing">Site Admin</td>
            <td width="113" align="center" valign="middle" class="pageheadeing"><a href="logout.php"><img src="icons/logout.png" alt="log out" width="100" height="100" border="0" /></a></td>
            <td width="100" align="center" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" valign="middle" class="pagesubheadeing">Site Admin</td>
          </tr>
          <tr>
            <td align="center" valign="middle"><a href="../mw-modules/user-management/user-info.php"><img src="icons/change_accounts.png" alt="user accounts" width="100" height="100" border="0" /></a></td>
            <td align="center" valign="middle"><a href="../mw-modules/user-management/changepwd.php"><img src="icons/change_password.png" alt="change password" width="100" height="100" border="0" /></a></td>
            <td align="center" valign="middle">&nbsp;</td>
              <td align="center" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="middle"><span class="pagesubheadeing1">User Accounts</span></td>
            <td align="center" valign="middle"><span class="pagesubheadeing1">Change Password</span></td>
            <td align="center" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" valign="middle" class="pagesubheadeing">Content Admin</td>
          </tr>
          <tr>
          <td align="center" valign="middle"><a href="../mw-modules/news/news-admin.php"><img src="icons/news.png" alt="news" width="100" height="100" border="0" /></a></td>
           <!--   <td align="center" valign="middle"><a href="../mw-modules/tender/tender-admin.php"><img src="icons/tender.png" alt="tender" width="100" height="100" border="0" /></a></td>
            <td align="center" valign="middle"><a href="../mw-modules/press-release/pr-admin.php"><img src="icons/press_release.png" alt="press release" width="100" height="100" border="0" /></a></td>
             <td align="center" valign="middle"><a href="../mw-modules/photo-gallery/gallery-admin.php"><img src="icons/gallery.png" alt="gallery" width="100" height="100" border="0" /></a></td>-->
             <td  align="center" valign="middle"><a href="../mw-modules/results/result-admin.php"><img src="icons/results.png" alt="result" width="100" height="100" border="0" /></a></td>
            </tr>
          <tr>
            <td align="center" valign="middle"><span class="pagesubheadeing1">News Admin</span></td>
           <!--   <td align="center" valign="middle"><span class="pagesubheadeing1">Tender Admin</span></td>
            <td align="center" valign="middle"><span class="pagesubheadeing1">Press Release Admin</span></td>
            <td align="center" valign="middle"><span class="pagesubheadeing1">Photo Gallery Admin</span></td>-->
             <td align="center" valign="middle"><span class="pagesubheadeing1">Results Admin</span></td>
          </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><?php require_once('../mw-content/theme/default/footer.php') ?></td>
  </tr>
</table>
</body>
</html>
<?php
}
else
		 {
			
			header("Location:index.php"); 
		 }
?>

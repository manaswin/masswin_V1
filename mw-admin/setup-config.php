<?php
ob_start();
session_start();
$submit=$_POST['submit'];
$dbname  = trim($_POST['dbname']);
$uname   = trim($_POST['uname']);
$passwrd = trim($_POST['pwd']);
$dbhost  = trim($_POST['dbhost']);

	define('DB_NAME', $dbname);
	define('DB_USER', $uname);
	define('DB_PASSWORD',$passwrd);
	define('DB_HOST', $dbhost);
if($submit=='Submit')
{
  if (!file_exists('library/mw-config-sample.php'))
  {
	echo('Sorry, I need a mw-config-sample.php file to work from. Please re-upload this file from   your Maswin installation.');
  }
  else
  {
     $configFile = file('library/mw-config-sample.php');
  }
		
	
	
	$handle = fopen('library/mw-config.php', 'w');

	foreach ($configFile as $line_num => $line) {
		switch (substr($line,0,16)) {
			case "define('DB_NAME'":
				fwrite($handle, str_replace("putyourdbnamehere", $dbname, $line));
				break;
			case "define('DB_USER'":
				fwrite($handle, str_replace("'usernamehere'", "'$uname'", $line));
				break;
			case "define('DB_PASSW":
				fwrite($handle, str_replace("'yourpasswordhere'", "'$passwrd'", $line));
				break;
			case "define('DB_HOST'":
				fwrite($handle, str_replace("localhost", $dbhost, $line));
				break;
			default:
				fwrite($handle, $line);
		}
	}
	fclose($handle);
	chmod('library/mw-config.php', 0666);
		   
   //checking for database connection
    $conn =mysql_connect($dbhost,$uname,$passwrd)
              or die("could not connect:".mysql_error());
       $db = mysql_select_db($dbname)or die(mysql_error());
	
/* tenders table structure
$osql ="CREATE TABLE tenders
(
 id int(7) primary key auto_increment,
 subject varchar(400),
 pub_date date,
 exp_date date,
 link varchar(80)
 )";
// Execute query
mysql_query($osql)or die(mysql_error());
// pr table-press release upload table structure
$psql ="CREATE TABLE pr
(
 id int(7) primary key auto_increment,
 date date,
 pr int(7),
 subject varchar(400),
 download varchar(50)
)";
// Execute query
mysql_query($psql)or die(mysql_error());
//image_details-image upload table structure
$sql ="CREATE TABLE image_details
(
 img_id int(5) primary key auto_increment,
 img_src varchar(80),
 gid varchar(100),
 img_desc varchar(100),
 inserted_on date,
 FOREIGN KEY (gid) REFERENCES gallery_details(id)
)";
// Execute query
mysql_query($sql)or die(mysql_error());

/*distance_details-Distance upload table structure
$dsql ="CREATE TABLE distance_details
(
  id int(5) primary key auto_increment, 
  dist_from varchar(50),
  dist_to varchar(50),
  kms int(6)
)";
// Execute query
mysql_query($dsql)or die(mysql_error());
//photo gallery table structure
$gsql = "CREATE TABLE gallery_details
(
 id int(4) primary key auto_increment,
 gallery_name varchar(60),
 gallery_parent varchar(60),
 gdesc varchar(150),
 created_on date
)";
// Execute query
mysql_query($gsql)or die(mysql_error());
//cabinet table structure
$csql = "CREATE TABLE cd
(
 id int(7) primary key auto_increment,
 subject varchar(400),
 date date,
 download varchar(50)
)";
// Execute query
mysql_query($csql)or die(mysql_error());
//site details table structure
$ssql = "CREATE TABLE site_details
(
 id int(7) primary key auto_increment,
 name varchar(200),
 date date
 
)";
// Execute query
mysql_query($ssql)or die(mysql_error());
*/
//Login table structure
$lsql = "CREATE TABLE login
(
 id varchar(20) primary key,
 password varchar(10),
 role_id varchar(15)
)";
// Execute query
mysql_query($lsql)or die(mysql_error());
//news table-news upload table structure
$nsql ="CREATE TABLE news
(
 id int(7) primary key auto_increment,
 date date,
 subject varchar(300),
 link varchar(150)
)";
// Execute query
mysql_query($nsql)or die(mysql_error());
//aieee table structure
$asql = "CREATE TABLE aiee
(
 id int(50) primary key auto_increment,
 roll varchar(50),
 rank varchar(10),
 attempts varchar(10),
 correct varchar(10),
 wrong varchar(10),
 physics_c varchar(10),
 physics_w varchar(10),
  chem_c varchar(10),
 chem_w varchar(10),
  math_c varchar(10),
 math_w varchar(10),
 net varchar(10),
percent varchar(10),
percentile varchar(10),
centre varchar(10),
date varchar(10),
exam varchar(50),
test varchar(50)
)";
// Execute query
mysql_query($asql)or die(mysql_error());
//cbse table structure
$cbsql = "CREATE TABLE cbse
(
 id int(50) primary key auto_increment,
 rank varchar(10),
  roll varchar(50),
physics_rank varchar(10),
 physics_marks varchar(10),
 physics_p varchar(10),
 chem_rank varchar(10),
 chem_marks varchar(10),
 chem_p varchar(10),
 bio_rank varchar(10),
  bio_marks varchar(10),
bio_p varchar(10),
 total_marks varchar(10),
percent varchar(10),
percentile varchar(10),
centre varchar(10),
date varchar(10),
exam varchar(50),
test varchar(50)
)";
// Execute query
mysql_query($cbsql)or die(mysql_error());
//bcece table structure
$bcsql = "CREATE TABLE bcece
(
 id int(50) primary key auto_increment,
 roll varchar(50),
 rank varchar(10),
 attempts varchar(10),
 correct varchar(10),
 wrong varchar(10),
 physics_c varchar(10),
 physics_w varchar(10),
  chem_c varchar(10),
 chem_w varchar(10),
  bio_c varchar(10),
 bio_w varchar(10),
 net varchar(10),
percent varchar(10),
percentile varchar(10),
centre varchar(10),
date varchar(10),
exam varchar(50),
test varchar(50)
)";
// Execute query
mysql_query($bcsql)or die(mysql_error());
//pt table structure
$ptsql = "CREATE TABLE pt
(
 id int(50) primary key auto_increment,
 rank varchar(10),
 roll varchar(50),
 
 attempts varchar(10),
 correct varchar(10),
 wrong varchar(10),
 physics_c varchar(10),
 physics_w varchar(10),
  chem_c varchar(10),
 chem_w varchar(10),
  bio_c varchar(10),
 bio_w varchar(10),
 net varchar(10),
percent varchar(10),
percentile varchar(10),
centre varchar(10),
date varchar(10),
exam varchar(50),
test varchar(50)
)";
// Execute query
mysql_query($ptsql)or die(mysql_error());
//pt table structure
$ttsql = "CREATE TABLE terminal
(
 id int(50) primary key auto_increment,
 test varchar(50),
 roll varchar(50),
 grp varchar(5),
 rank varchar(10),
 attempts varchar(10),
 correct varchar(10),
 wrong varchar(10),
 net varchar(10),
percent varchar(10),
percentile varchar(10),
centre varchar(10),
date varchar(10)

)";
// Execute query
mysql_query($ttsql)or die(mysql_error());
mysql_close();
header("Location:index.php");	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>set up config</title>


<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body class="tablecolor">

<form method="post" action="setup-config.php">
	<p class="pagesubheadeing">Below you should enter your database connection details. If you're not sure about these, contact your host. </p>
	<table align="center">
	  <tr>
			<th class="pagesubheadeing1"><label for="dbname">Database Name</label></th>
<td><input name="dbname" id="dbname" type="text" size="25" value="database name" /></td>
			<td class="body_text">The name of the database you want to run MW in. </td>
		</tr>
		<tr>
			<th class="pagesubheadeing1"><label for="uname">User Name</label></th>
      <td><input name="uname" id="uname" type="text" size="25" value="username" /></td>
			<td class="body_text">Your MySQL username</td>
		</tr>
		<tr>
			<th class="pagesubheadeing1"><label for="pwd">Password</label></th>
      <td><input name="pwd" id="pwd" type="text" size="25" value="password" /></td>
			<td class="body_text">...and MySQL password.</td>
		</tr>
		<tr>
			<th class="pagesubheadeing1"><label for="dbhost">Database Host</label></th>
      <td><input name="dbhost" id="dbhost" type="text" size="25" value="localhost" /></td>
			<td class="body_text">99% chance you won't need to change this value.</td>
		</tr>
		<tr>
        <td>&nbsp;
        </td>
        <td>
        <input name="submit" type="submit" value="Submit" />
         
        </td>
        </tr>
	</table>
	
</form>


</body>
</html>

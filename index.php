<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主页</title>
</head>
<body>
<table border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td align="center">全部的表：</td>
</tr>
<?php
header("content-type:text/html; charset=utf-8");
include ("conn.php");
$query = "show tables";
$res = mysql_query($query,$conn) or die(mysql_error());
$row = mysql_num_rows($res);
if($row){
		while($row--){
				$dbrow=mysql_fetch_array($res);
				$table = $dbrow['Tables_in_test'];
				echo "<tr><td align='center'>";
				echo "<a href='table.php?table=$table'><font color='red'>";
				echo $table;
				echo "</font></a></td></tr>";
			}
	}
?>

<tr><td align='center'>
<a href="test_date.php"><font color='red'>显示时间差</font></a>
</td></tr>
</table>

</body>
</html>
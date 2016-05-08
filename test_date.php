<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>时间显示</title>
</head>

<body>
<table width="70%" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td align="center">时间显示</td>
</tr>

<tr><td align="center">
<?php
header("content-type:text/html; charset=utf-8");
include ("conn.php");
$query = "select '2016-7-11'deadline,curdate()now,datediff('2016-7-11',curdate())distance"; 
$res = mysql_query($query, $conn) or die(mysql_error());
$row = mysql_num_rows($res); 
if($row)
{ 
$dbrow=mysql_fetch_array($res);
$now=$dbrow['now']; 
$deadline=$dbrow['deadline']; 
$distance=$dbrow['distance'];

echo "当前日期为：";  
echo $now;
echo " ";
echo "截止日期为:"; 
echo $deadline;
echo " ";
echo "距离截止日期还有：";
echo $distance; 
echo "天";
}

else
{
echo "无相关数据";
}
?>
</td><tr>
<tr><td align="center"><a href="index.php"><font color='red'>点击返回</font></a></td></tr>
</table>
</body>
</html>
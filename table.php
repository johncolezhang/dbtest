<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	header("content-type:text/html; charset=utf-8");
	include ("conn.php");
	$table=$_GET[table];
?>
<title><?php echo "$table";?>表</title>
</head>
<style type="text/css">
	.btn02 { background:#fff;
	 height:24px; width:70px; color:#297405; border:2px solid #90be4a;
	  font-size:12px; font-weight:bold; line-height:180%; cursor:pointer;}
	.text2 { border:2px solid #90be4a; width:550px; height:24px; font-size:16px;
	  font-weight:bold; line-height:1.6; overflow:auto; }
	.form { padding:0px; margin:0px;} 
	.area { border:2px solid #90be4a;  overflow:auto; 
	  width:550px; height:169px; font-size:16px;}
</style>

<body>
<table border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td align="center">全部的表：</td>
</tr>
<?php
	$query = "select * from $table";
	$res = mysql_query($query, $conn) or die(mysql_error());
	$row = mysql_num_rows($res);
	if($row)
	{
	while($row--) //这里用一个FOR 语句查询显示多条结果
	{ 
	$dbrow=mysql_fetch_array($res);
	$id=$dbrow['id']; 
	$title=$dbrow['title']; 
	$add_time=$dbrow['add_time'];
	$content=$dbrow['content'];
	echo "<tr><td align='center'><font size='20px'>";
	echo "id:$id 标题:$title";
	echo "</font></td></tr>";
	echo "<tr><td align='center'>";
	echo "添加时间:$add_time";
	echo "</td></tr>";//显示id，标题，时间
	echo "<tr><td align='center'>评论:</td></tr>";
	echo "<tr><td align='center'><textarea class='area'>";
	echo "$content";
	echo "</textarea></td></tr>";//显示评论
	echo "<tr><td align='center'>"; 
	echo "<a href='del_news.php?id=$id&table=$table'><font color='red'>删除</font></a>";
	echo " ";
	echo "<a href='edit_news.php?id=$id&table=$table'><font color='red'>修改</font></a>";
	echo "</td></tr>";//显示删除及修改
	}
	echo "<tr><td align='center'>";
	echo "<a href='add_news.php?id=$id&table=$table'><font color='red'>添加</font></a>";
	echo "</td></tr>";//显示添加
	echo "<tr><td align='center'>";
	echo "<a href='index.php'><font color='red'>返回首页</font></a>";
	echo "</td></tr>";//显示返回
	}
else
{
echo "无相关数据";
}
?>
</body>
</html>
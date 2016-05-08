<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1
-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改新闻</title>
<style>
form{
padding:0px;
margin:0px;
}
</style>
</head>
<body>
<?php
include ("conn.php");
$id=$_GET[id]; //先接收从news.php传过来的ID值以确定要修改的新闻
$table=$_GET[table];
//接着查出该新闻有关数据.
$query = "select * from news where id=$id"; 
$res = mysql_query($query, $conn) or die(mysql_error());
$row = mysql_num_rows($res); //如果查询成功这里返回真否则为假
$dbrow=mysql_fetch_array($res);
$id=$dbrow['id']; 
$title=$dbrow['title']; 
$content=$dbrow['content']; 
$add_time=$dbrow['add_time'];
?>
<table width="70%" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td align="center">请填写要修改新闻的信息</td>
</tr>
</table>
<form action="save_edit_news.php" method="post"> <!---把内容传到save_edit_news.php 保存-->
<table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td width="30%" align="right">新闻标题</td>
<td width="70%" align="left"><input type="text" name="title" size="30" value='<?php echo $title;?>'/></td>
</tr>
<tr>
<td align="right">新闻内容</td>
<td align="left"><textarea name="content" cols="30" rows="5"><?php echo $content; ?></textarea></td>
</tr>
</table>
<table width="70%" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td align="center"> <input type="hidden" name="id" value='<?php echo $id; ?>' /> 
<input type="hidden" name="table" value='<?php echo $table;?>' />
<!----这里很重要,以隐藏方式把ID值也传到save_edit_news.php文,以确定更新的具体是哪条新闻--->
<input type="submit" name="submit1" value="确定修改"/></td>
</tr>
</table>
</form>
</body>
</html>

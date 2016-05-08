<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"> <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加新闻输入页面</title>

<style type="text/css">
	.btn02 { background:#fff;
	 height:24px; width:55px; color:#297405; border:2px solid #90be4a;
	  font-size:12px; font-weight:bold; line-height:180%; cursor:pointer;}
	.text2 { border:2px solid #90be4a; width:200px; height:24px; font-size:16px;
	  font-weight:bold; line-height:1.6;}
	.form { padding:0px; margin:0px;} 
	.area { border:2px solid #90be4a;  overflow:auto; 
	  width:550px; height:169px;}
</style>

</head>
<body>
<table width="70%" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td align="center">请填写要添加新闻的信息</td>
</tr>
</table>
<form action="save_news.php" method="post">
<!--这里是一个表单,意思是以post方式把下面输入的数据传到save_news.php页面. ,表单以</form>结束-->
<table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td width="30%" align="right">新闻标题</td>
<td width="70%" align="left"><input type="text" name="title" size="30" class="text2"/></td>
</tr>
<tr>
<td align="right">新闻内容</td>
<td align="left"><textarea name="content" class="area"></textarea></td>
<?php 
$table=$_GET[table];
echo "<td><input name='table' type='hidden' value='$table'></input></td>";
?>
</tr>
</table>
<table width="70%" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td align="center"><input type="submit" name="submit1" value="确定添加" class="btn02"/></td>
</tr>
</table>
</form>
</body>
</html>

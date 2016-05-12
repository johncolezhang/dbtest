<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"> <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加信息</title>

<style type="text/css">
	.btn02 { background:#fff;
	 height:24px; width:70px; color:#297405; border:2px solid #90be4a;
	  font-size:12px; font-weight:bold; line-height:180%; cursor:pointer;}
	.text2 { border:2px solid #90be4a; width:550px; height:24px; font-size:16px;
	  font-weight:bold; line-height:1.6; overflow:auto; }
	.form { padding:0px; margin:0px;} 
	.area { border:2px solid #90be4a;  overflow:auto; 
	  width:550px; height:169px;}
</style>

</head>
<?php
$table=$_GET[table];
if($table == 'emp'){
?>
<body>
<table border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td align="center">请填写要添加EMP的信息</td>
</tr>
</table>
<form action="save_table.php" method="post">
<table border="1" align="center" cellpadding="0" cellspacing="0">
<tr>
<td width='80px'>EMPNO </td>
<td width='80px'>ENAME </td>
<td width='80px'>JOB </td>
<td width='80px'>MGR </td>
</tr>
<tr>
<td><input name='empno' type='text'></input></td>
<td><input name='ename' type='text'></input></td>
<td><input name='job' type='text'></input></td>
<td><input name='mgr' type='text'></input></td>
</tr>
<tr>
<td width='80px'>HIREDATE </td>
<td width='80px'>SAL </td>
<td width='80px'>COMM </td>
<td width='80px'>DEPTNO </td>
</tr>
<td><input name='hiredate' type='text'></input></td>
<td><input name='sal' type='text'></input></td>
<td><input name='comm' type='text' value='0'></input></td>
<td><input name='deptno' type='text'></input></td>
<?php 
echo "<td><input name='table' type='hidden' value='$table'></input></td>";
?>
</tr>
</table>
<table border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td align="center"><input type="submit" name="submit1" value="确定添加" class="btn02"/></td>
</tr>
</table>
</form>
</body>
<?php
}else if($table == 'dept'){
?>
<body>
<table border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td align="center">请填写要添加的DEPT信息</td>
</tr>
</table>
<form action="save_table.php" method="post">
<table border="1" align="center" cellpadding="0" cellspacing="0">

<tr>
<td width='80px'>DEPTNO </td>
<td width='80px'>DNAME </td>
<td width='80px'>LOC </td>
</tr>
<tr>
<td><input name='deptno' type='text'></input></td>
<td><input name='dname' type='text'></input></td>
<td><input name='loc' type='text'></input></td>
<?php 
echo "<td><input name='table' type='hidden' value='$table'></input></td>";
?>
</tr>
</table>
<table border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td align="center"><input type="submit" name="submit1" value="确定添加" class="btn02"/></td>
</tr>
</table>
</form>
</body>
<?php
}
?>
</html>
<?php
header("content-type:text/html; charset=utf-8");
include ("conn.php");
$table=$_POST[table];
if($table == 'emp'){
$empno=$_POST[empno];
$ename=$_POST[ename];
$job=$_POST[job];
$mgr=$_POST[mgr];
$hiredate=$_POST[hiredate];
$sal=$_POST[sal];
$comm=$_POST[comm];
$deptno=$_POST[deptno];
$sql = "UPDATE $table set ename='$ename',job='$job',mgr='$mgr',hiredate='$hiredate',sal='$sal',comm='$comm',deptno='$deptno' where empno=$empno";
$result = @mysql_query($sql,$conn) or die(mysql_error()); //如果添加成功,返回真给$result ,否则为false.
if($result)
{
?>
<script language=javascript>window.alert('修改成功');window.location.href="show_emp.php?table=<?php echo "$table";?>";</script> 
<?php
}
else
{
?>
<script language=javascript>window.alert('修改失败');window.location.href="show_emp.php?table=<?php echo "$table";?>";</script> 
<?php
}
}else if($table == 'dept'){
$deptno=$_POST[deptno];
$dname=$_POST[dname];
$loc=$_POST[loc];
$sql = "UPDATE $table set dname='$dname',loc='$loc' where deptno=$deptno";
$result = @mysql_query($sql,$conn) or die(mysql_error()); //如果添加成功,返回真给$result ,否则为false.
if($result){
?>
<script language=javascript>window.alert('修改成功');window.location.href="show_dept.php?table=<?php echo "$table";?>";</script> 
<?php
}
else
{
?>
<script language=javascript>window.alert('修改失败');window.location.href="show_dept.php?table=<?php echo "$table";?>";</script> 
<?php
}
}
?>
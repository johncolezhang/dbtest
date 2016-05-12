<?php
include ("conn.php");
$id=$_GET[id];
$table = $_GET[table];
if($table == 'emp'){
$sql = "delete from $table where empno=$id";
$result1 = @mysql_query($sql,$conn) or die(mysql_error());
if($result1){
?>
<script language=javascript>window.alert('成功删除');window.location.href="show_emp.php?table=<?php echo $table;?>";</script> 
<?php
}else{
?>
<script language=javascript>window.alert('删除失败');window.location.href="show_emp.php?table=<?php echo $table;?>";</script> 
<?php
}
}else if($table == 'dept'){
$sql = "delete from $table where deptno=$id";
$result2 = @mysql_query($sql,$conn) or die(mysql_error());
if($result2){
?>
<script language=javascript>window.alert('成功删除');window.location.href="show_dept.php?table=<?php echo $table;?>";</script> 
<?php
}else{
?>
<script language=javascript>window.alert('删除失败');window.location.href="show_dept.php?table=<?php echo $table;?>";</script> 
<?php
}
}
?>
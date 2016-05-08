<?php
include ("conn.php");
$id=$_GET[id];
$table = $_GET[table];
$sql = "delete from $table where id=$id";
$result1 = @mysql_query($sql,$conn) or die(mysql_error());
if($result1)
{
?>
<script language=javascript>window.alert('成功删除');window.location.href="table.php?table=<?php echo $table;?>";</script> 
<?php
} //result1==true
?>

<?php
include ("conn.php");
$id=$_POST[id];
$title=$_POST[title];
$content=$_POST[content];
$table=$_POST[table];
$query = "Update $table set title='$title',content='$content' where id=$id"; 
$res = mysql_query($query, $conn) or die(mysql_error());
//echo "修改成功";
if($res)
{
?>
<script language=javascript>window.alert('修改成功');window.location.href="table.php?table=<?php echo "$table";?>";</script> 
<?php
}
else
{
?>
<script language=javascript>window.alert('修改失败');window.location.href="table.php?table=<?php echo "$table";?>";</script>
<?php
}
?>

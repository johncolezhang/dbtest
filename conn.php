<?php 
$hostname = "localhost"; //������,������IP����
$database = "test"; //���ݿ���
$username = "root"; //���ݿ��û���
$password = ""; //���ݿ�����
$conn = mysql_connect($hostname, $username, $password) or trigger_error(mysql_error() , E_USER_ERROR); 
mysql_select_db($database, $conn); 
$db = @mysql_select_db($database, $conn) or die(mysql_error());
?> 

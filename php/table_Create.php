<?php
require_once("./db_con.php");
$result_exist_member = mysql_query('damem',"SHOW TABLES LIKE 'member'");

$table_name_week = "member";

$sql = "SHOW TABLES LIKE `{$table_name_week}`";
$result_exist = mysql_query($sql); 
$row_exist = mysql_fetch_array($result_exist); 

$a=0; 
while($row_exist != true){ 
    'create table member(No int auto_increment primary key, ID varchar(50) not null, PW varchar(100) not null, phone varchar(50) not null, Mail varchar(50) not null);';
}

?>

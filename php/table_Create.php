<?php
require_once("./db_con.php");
$result_exist_member = mysql_query('damem',"SHOW TABLES LIKE 'member'");

$row_exist_member = mysql_fetch_array($result_exist_member); 

if($row_exist_member == true){			
    echo "";
} 

else { 
    $sql1 = "create table member(No int auto_increment primary key, ID varchar(50) not null, PW varchar(100) not null, phone varchar(50) not null, Mail varchar(50) not null)";
    $result = mysql_query($sql1);
}

$result_exist_board = mysql_query('damem'"SHOW TABLES LIKE 'board'");

$row_exist_board = mysql_fetch_array($result_exist_board); 

if($row_exist_board == true){
    echo "";
} 

else { 
    $sql2 = "create table board(No int auto_increment primary key, 
    Title varchar(50) not null, 
    Content varchar(500) not null, 
    Userid varchar(50) not null, 
    Date varchar(50) not null)";
    $result2 = mysql_query($sql2);
}
?>
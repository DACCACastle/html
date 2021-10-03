<?php
    include_once './db_con.php'; // DB 연결

    $sql ="create table member(No int auto_increment primary key, ID varchar(50) not null, PW varchar(100) not null, phone varchar(50) not null, Mail varchar(50) not null);";

    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);
?>

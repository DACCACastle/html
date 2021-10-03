<?php
    // mysqli
    $db_host = "dbaddress";
    $db_user = "asdASD123";
    $db_pass = "asdASD123";
    $db_name = "damem";
    $conn = mysqli_connect('dbaddress','asdASD123','asdASD123','damem');
    $sql ="create table member(No int auto_increment primary key, ID varchar(50) not null, PW varchar(100) not null, phone varchar(50) not null, Mail varchar(50) not null);";

    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);
?> 

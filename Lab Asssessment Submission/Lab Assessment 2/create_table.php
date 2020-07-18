<?php
$link = mysqli_connect('localhost', 'root', '','istiak');

if($link == false){
    die("Error : Could not connect. " .mysql_connect_error());
}
$sql = "CREATE TABLE test_table(
    id INT(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP)";
if(mysqli_query($link,$sql)){
    echo "table created";
}
else{
    echo 'problem:'.mysqli_error($link);
}
mysqli_close($link);
?>
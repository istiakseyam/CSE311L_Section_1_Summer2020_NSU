<?php
$link = mysqli_connect('localhost', 'root', '');

if($link == false){
    echo ' error'.mysqli_error($link);
}
$sql = "CREATE DATABASE istiak";
if(mysqli_query($link,$sql)){
    echo 'created';
}
else{
    echo 'problem:'.mysqli_error($link);
}
mysqli_close($link);
?>
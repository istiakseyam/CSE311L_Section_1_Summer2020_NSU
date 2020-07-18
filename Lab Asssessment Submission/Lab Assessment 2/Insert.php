<?php
$link = mysqli_connect('localhost', 'root', '','istiak');

if($link == false){
    die("Error : Could not connect. " .mysql_connect_error());
}
$sql = "INSERT INTO test_table(id,username,password) VALUES('1','DEMO','DEMO')";
    if(mysqli_query($link,$sql))
    {
        echo "VALUES INSERTED." ;
    }
    else 
    {
        echo "Error : Could not able to Insert Values ." .mysqli_error($link);
    }
    mysqli_close($link);
?>
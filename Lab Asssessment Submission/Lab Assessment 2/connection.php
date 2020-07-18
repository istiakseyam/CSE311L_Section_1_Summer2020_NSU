<?php
$MySQLi_connection = new mysqli('localhost', 'root', '', 'HomeworkA');

if ($MySQLi_connection->connect_error) {
    echo 'error: ' ;
}
else {
    echo 'connect';
}

?>

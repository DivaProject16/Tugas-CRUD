<?php
    define('DB_NAME', 'db_crudunbin');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');

    $kon =mysqli_connect("localhost", "root", "", "db_crudunbin") or die(mysqli_error());
?>
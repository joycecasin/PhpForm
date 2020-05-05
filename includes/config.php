<?php
define('DB_USER', 'root');
define('DB_PASSWORD','');
define('DB_HOST', 'localhost:3308');
define('DB_NAME', 'dbphptabel');


$dbc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR die('Could not connect to MySQL' . mysqli_connect_error());
?>
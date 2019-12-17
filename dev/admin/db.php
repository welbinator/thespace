<?php

$db['db_name'] = 'escape_the_cube_not_wordpress';
$db['db_user'] = 'escape_the_cube_user';
$db['db_pass'] = 'L9U3d+xv$3hQ';
$db['db_host'] = 'localhost';

foreach($db as $key => $value) {
  
  define(strtoupper($key), $value);
  
  
  
}


$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);


?>
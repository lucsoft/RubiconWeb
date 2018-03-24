<?php
$database = array(
   'name' => '',
   'username' => '',
   'password' => '',
   'host' => '',
   'name' => '',
);

$path = array(
   'MainCSS' => '',
   'nav' => '',
 );
$config = array(
   'pathto' => $path,
   'database' => $database,
   'language' => include './config/language.php'
);

return $config;
 ?>

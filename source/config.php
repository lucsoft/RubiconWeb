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
 $nav = array(
    'AdvancedMonitoring' => 'https://rubicon.lucsoft.de/source/pages/AdvancedMonitoring.php',
    'RubiconWeb' => 'https://rubicon.lucsoft.de/source/',
 );
$config = array(
   'pathto' => $path,
   'nav' => $nav,
   'database' => $database,
   'language' => include '/www/htdocs/w01372d4/rubicon.lucsoft.de/source/config/language.php'
);

return $config;
 ?>

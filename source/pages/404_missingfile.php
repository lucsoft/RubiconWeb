<?php
$config = include '/www/htdocs/w01372d4/rubicon.lucsoft.de/source/config.php';
$lang = $config["language"]["setDefaultLang"]("");

   if ($_GET['url'] == "/source/imprint") {
      header('Location: https://rubicon.lucsoft.de/source/pages/imprint');
   }
?>

<meta charset="utf-8">
<h1><?php print $lang['404_title'] ?></h1>
<h3><?php print $lang['404_description']; print $_GET['url'] ?></h3>

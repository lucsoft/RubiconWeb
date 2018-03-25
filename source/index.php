<?php
$config = include 'config.php';
$lang = $config["language"]["setDefaultLang"]("");
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>RubiconWeb - Coming Soon</title>
 <link href="https://fonts.googleapis.com/css?family=Roboto:200,300,100|Quicksand:300,400,500,700" rel="stylesheet">
 <link rel="stylesheet" href="https://rubicon.lucsoft.de/source/css/main.css">
 <link rel="stylesheet" href="https://rubicon.lucsoft.de/source/css/index.css">
 </head>
 <body class="grey">
    <nav>
       <ul>
          <li>RubiconWeb</li>
          <li>Q&A</li>
          <li>Support</li>
          <li>Documentation</li>
       </ul>
    </nav>
    <span class="title"><?php print $lang['index_title']; ?></span>
    <span class="legalnote"><span class="more">IMPRINT & PRIVACY POLICY</span><?php print $lang['main_copyright'] ?></span>
 </body>
</html>

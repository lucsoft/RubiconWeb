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
      <?php include 'https://rubicon.lucsoft.de/source/content/module_header.php?page=' . urlencode("RubiconWeb: Home"); ?>
   </head>
   <body class="gray">
       <noscript>
          <?php print $lang['nojs']; ?>
       </noscript>
       <nav>
          <ul>
             <li onclick="window.location.href = '<?php print $config['nav']['RubiconWeb'];         ?>'">RubiconWeb</li>
             <li onclick="window.location.href = '<?php print $config['nav']['AdvancedMonitoring']; ?>'">Advanced Monitoring</li>
             <li>Support</li>
             <li><?php print $lang['nav_docs']; ?></li>
          </ul>
       </nav>
       <span class="title"><?php print $lang['index_title']; ?></span>
       <span class="legalnote"><span class="more">IMPRINT & PRIVACY POLICY</span><?php print $lang['main_copyright'] ?></span>
    </body>
</html>

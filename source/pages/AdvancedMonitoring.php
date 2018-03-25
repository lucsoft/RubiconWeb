<?php
   $config = include '../config.php';
   $lang = $config["language"]["setDefaultLang"]("");
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
       <title>RubiconWeb - Coming Soon</title>
       <link href="https://fonts.googleapis.com/css?family=Roboto:200,300,100|Quicksand:300,400,500,700" rel="stylesheet">
       <link rel="stylesheet" href="https://rubicon.lucsoft.de/source/css/main.css">
       <link rel="stylesheet" href="https://rubicon.lucsoft.de/source/css/AdvancedMonitoring.css">
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

       <div class="popup login">
          <span class="popup-title">Advanced Monitoring</span>
          <span class="popup-subtitle">Adminstator Login</span>
          <input type="text" name="" value="" placeholder="unsername">
          <input type="text" name="" value="" placeholder="password">
          <input type="button" name="" value="Login">
          <span class="popup-subtitle">User Login</span>
          <input class="discord" type="button" name="" value="Login with Discord">
       </div>


       <span class="legalnote"><span class="more">IMPRINT & PRIVACY POLICY</span><?php print $lang['main_copyright'] ?></span>
    </body>
</html>

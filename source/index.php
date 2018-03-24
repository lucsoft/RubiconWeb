<?php
$config = include 'config.php';
 $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>RubiconBot - Comming Soon</title>
 <link href="https://fonts.googleapis.com/css?family=Roboto:300,500|Quicksand:300,400,500,700" rel="stylesheet">
 <style media="screen">
    html {
      font-family: 'Roboto';
      color: white;
      background: rgb(17, 17, 17);
   }
   h1, footer {
      position: fixed;
      top: 25%;
      left: 0%;
      text-align: center;

      right: 0%;
   }
   h1 {
      width: 100%;
      font-weight: 300;
      font-size: 3rem;
   }
   footer {
      font-weight: 500;
      margin-top: 6rem;
   }
 </style>
 </head>
 <body>
    <?php
    print "Browser-Supported-Language: " . $lang;
    if ($config["language"][$lang]["activ"] == true) {
      print "<h1>" . $config["language"][$lang]['index_CommingSoon']. "</h1>";
    } ?>
   <footer>
    Copyright (c) 2018 lucsoft All Rights Reserved.
   </footer>

 </body>
</html>

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
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
             rel="stylesheet">
             <script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
              <script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
              <script type="text/javascript" src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <?php include 'https://rubicon.lucsoft.de/source/content/module_header.php?page=' . urlencode("RubiconWeb: Home"); ?>
    </head>
    <body class="gray">
      <span id="note_disabled" class="note-disabled hide"><?php print $lang['sorry_disabeld']; ?></span>
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
       <?php
       if (isset($_COOKIE["RubiconWebLoginToken"])) {
          $pdo = new PDO('mysql:host=' . $config['database']['host'].';dbname=' . $config['database']['dbname'], $config['database']['username'], $config['database']['password']);
          $sql = "SELECT * FROM `Users`";
          $data = $_COOKIE["RubiconWebLoginToken"];
          $datacuts = explode("#", $data);

          foreach ($pdo->query($sql) as $item) {
             if ($item['email'] == $datacuts[0]) {
                if (md5($item['Password']) == $datacuts[1]) {
                } else {
                   print '<meta http-equiv="refresh" content="0; URL=https://rubicon.lucsoft.de/source/content/login.php?type=logout">';
               }
             }
          }

       } else {
       include '../content/popups/AdvancedMonitoringLogin.php';
       exit();
       }
       if (!isset($_GET["server"])) {
          print '        <div class="popup menu">
                     <span class="popup-title">Advanced Monitoring - Menu</span>
                     <ul class="popup-list">
                       <li onclick="window.location.href = \'?server=285879950827847680\'">
                          <img src="https://cdn.discordapp.com/icons/285879950827847680/3f4e04ff8500bc110f7886769981933a.jpg" alt="Missing Img 😭">
                          <span class="list-title tag">TWB 2 [GER|DE] <br><span class="tag">OWNER</span></span>
                          <span class="list-button right"><i class="material-icons">chevron_right</i></span>
                       </li>
                       <li onclick="window.location.href = \'?server=381419503164325900\'">
                          <img src="https://cdn.discordapp.com/icons/381419503164325900/183503c22752b989361186dd9428ce9a.jpg" alt="Missing Img 😭">
                          <span class="list-title">Rubicon - Community</span>
                          <span class="list-button right"><i class="material-icons">chevron_right</i></span>
                       </li>
                       <li onclick="window.location.href = \'?server=380713705073147915\'">
                          <img src="https://cdn.discordapp.com/icons/381419503164325900/183503c22752b989361186dd9428ce9a.jpg" alt="Missing Img 😭">
                          <span class="list-title tag">Rubicon <br><span class="tag">BOT</span></span>
                          <span class="list-button right"><i class="material-icons">chevron_right</i></span>
                       </li>
                       <li class="settings" onclick="window.location.href = \'?server=380713705073147915\'">
                          <span class="list-title">Nutzereinstellungen & News</span>
                          <span class="list-button right"><i class="material-icons">chevron_right</i></span>
                       </li>


                     </ul>
                  </div>
                  <span class="legalnote fixed"><span class="more">IMPRINT & PRIVACY POLICY</span>' . $lang['main_copyright'] . '</span>
              </body>
          </html>';

exit();
       }
        ?>
        <div class="popup panel">
           <span class="popup-title"><a href="?menu"><i class="material-icons">chevron_left</i></a>Advanced Monitoring - <?php print htmlspecialchars("TWB 2 [GER|DE]"); ?></span>
           <div class="popup-split">
             <div class="leftpanel">
                <button type="button" onclick="load('subpages/overview.php');" name="button">Übersicht</button>
                <button type="button" onclick="load('subpages/eventsandgiveaway.php');" name="button">Events & Giveaway</button>
                <button type="button" onclick="load('subpages/tickets.php');" name="button">Tickets</button>
                <button type="button" onclick="load('subpages/subscription.php');" name="button">Abonnement</button>
                <button type="button" onclick="load('subpages/news.php');" name="button">News</button>
                <button type="button" onclick="load('subpages/settings.php');" name="button">Einstellungen</button>
             </div>
             <div class="rightpanel" id="pageloader">
            </div>
            <script type="text/javascript">
            load('subpages/overview.php');
            function load(url) {
               $('#pageloader').load("https://rubicon.lucsoft.de/source/" + url);
            }
            </script>
           </div>
        </div>

       <span class="legalnote"><span class="more">IMPRINT & PRIVACY POLICY</span><?php print $lang['main_copyright'] ?></span>
    </body>
</html>

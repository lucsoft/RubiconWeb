<div class="popup login">
   <span class="popup-title">Advanced Monitoring - Login</span>
   <span class="popup-subtitle">Login</span>

   <?php
     print '
     <input type="text" name="" value="" placeholder="unsername">
     <input type="text" name="" value="" placeholder="password">
     <input onclick="document.getElementById(\'note_disabled\').classList.remove(\'hide\')" type="button" name="" value="' . $lang["button_login"] . '">

     <span class="popup-subtitle">Register</span>
     <input onclick="window.location.href = \'https://rubicon.lucsoft.de/source/content/login.php?type=discord\'" style="margin-bottom: 0;" class="discord" type="button" name="" value="'. $lang["button_loginDiscord"] . '">
     ';


   ?>
</div>

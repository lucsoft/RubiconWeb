<?php

$lang_en = array(
   'active' => true,
   'name' => "English",
   'id' => "en",

   'button_logout' => 'Logout',
   'button_login' => 'Login',
   'button_loginDiscord' => 'Login with Discord',
   'sorry_disabeld' => 'Sorry! But this function is disabeld!',
   'index_nojs' => 'Please activate javascript in your browser! <a href="https://www.enable-javascript.com/" target="_blank">Enable Now!</a>',
   'nav_docs' => 'Documentation',
   'index_title' => 'RubiconWeb Coming Soon',
   'main_copyright' => 'Copyright (c) 2018 lucsoft All Rights Reserved.',
   '404_title' => 'Unknown file: Error 404',
   '404_description' => 'The Monkeys couldn\'t help with your request: '
);
$lang_de = array(
   'active' => true,
   'name' => "Deutsch",
   'id' => "de",
   'error_nopermission' => "Entschuldigung! In unsere Datenbank haben Sie nicht das Recht sich beim Advanced Monitoring anzumelden! <a href=\"%LINK%\" target=\"_blank\">Hier gehts zum Support!</a>",
   'button_logout' => 'Abmelden',
   'button_login' => 'Anmelden',
   'button_loginDiscord' => 'mit Discord Anmelden',
   'sorry_disabeld' => 'Entschuldigung! Diese funktion ist leider deaktivert!',
   'nojs' => 'Bitte aktivieren sie Javascript in ihrem Browser! <a href="https://www.enable-javascript.com/" target="_blank">Jetzt Aktiviren</a>',
   'nav_docs' => 'Dokumentation',
   'main_HelloWorld' => 'Hallo Welt, I bims',
   'index_title' => 'RubiconWeb wird demnächst erscheinen',
   'main_copyright' => 'Copyright (c) 2018 lucsoft Alle Rechte vorbehalten.',
   '404_title' => 'Unbekannte Datei: Error 404',
   '404_description' => 'Unsere Affen können nichts mit diesem Reqeust anfangen: ',

);

$lang = array(
   'de' => $lang_de,
   'en' => $lang_en,
   'defaultLang' => "de",
   'setDefaultLang' => function($langlist)
      {
         $langlist = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
         $config = include '/www/htdocs/w01372d4/rubicon.lucsoft.de/source/config.php';
         $lang = "";
         for ($langitem=0; $langitem < count($langlist); $langitem++) {
            if ($config["language"][$langlist[$langitem]]["active"]) {
               $lang = $config["language"][$langlist[$langitem]]["id"];
               return $config["language"][$lang];
            }
         }
         return $config["language"][$config['language']["defaultLang"]];
      }
);
return $lang;
 ?>

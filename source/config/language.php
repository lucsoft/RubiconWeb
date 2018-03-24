<?php

$lang_en = array(
   'activ' => true,
   'name' => "English",
   'id' => "en",
   'index_CommingSoon' => 'RubiconWeb Comming Soon',
   'main_copyright' => 'Copyright (c) 2018 lucsoft All Rights Reserved.',
);
$lang_de = array(
   'activ' => true,
   'name' => "Deutsch",
   'id' => "de",

   'main_HelloWorld' => 'Hallo Welt, I bims',
   'index_CommingSoon' => 'RubiconWeb wird demnächst erscheinen',
   'main_copyright' => 'Copyright (c) 2018 lucsoft Alle Rechte vorbehalten.',
   '404_unknown' => 'Unbekannte Detei!',
   '404_monkeys' => 'Unsere Affen könnten ihren antrag nicht finden: ',
   '404_lang' => 'Sprache vom Browser: '
);

$lang = array(
   'de' => $lang_de,
   'en' => $lang_en,
   'defaultLang' => "de",
   'setDefaultLang' => function($langlist)
   {
       $langlist = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
      $config = include 'config.php';
       $lang = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
       $supportedlang = false;

       for ($langitem=0; $langitem < count($lang); $langitem++) {
          if ($config["language"][$lang[$langitem]]["activ"]) {
            $supportedlang = true;
            $lang = $config["language"][$lang[$langitem]]["id"];
            break;
          }
       }
      if (!$supportedlang) {
         $supportedlang = "de";
         $supportedlang = true;
      }
      return $config["language"][$lang];

   }
);
return $lang;
 ?>

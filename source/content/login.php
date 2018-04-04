<?php
$config = include '../config.php';
$lang = $config["language"]["setDefaultLang"]("");
if ($_GET['type'] == "logout") {

    session_start();
    session_destroy();
    setcookie('RubiconWebLoginToken', null, 1, '/', "rubicon.lucsoft.de");
    unset($_COOKIE['RubiconWebLoginToken']);
    header("Location: https://rubicon.lucsoft.de/source/pages/AdvancedMonitoring.php");
    exit();
} else if ($_GET['type'] == "discord") {
   session_start();
   include 'vendor/autoload.php';

   $provider = new \Wohali\OAuth2\Client\Provider\Discord([
      'clientId' => $config["database"]["discordID"],
      'clientSecret' => $config["database"]["discordSecret"],
      'redirectUri' =>  $config["database"]["discordredirectUri"]
   ]);

   if(!isset($_SESSION['discord_user'])) {
      if (!isset($_GET['code'])) {
         $authUrl = $provider->getAuthorizationUrl();
         $_SESSION['oauth2state'] = $provider->getState();
         header('Location: ' . $authUrl);
      } elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
         unset($_SESSION['oauth2state']);
         exit('Invalid state');
      } else {
         $token = $provider->getAccessToken('authorization_code', [
            'code' => $_GET['code']
         ]);
         try {
            $user = $provider->getResourceOwner($token);

            setcookie('discord_user', serialize($user->toArray()), time() + 3600);
            $_SESSION['discord_user'] = $user->toArray();
            print '<meta http-equiv="refresh" content="0; URL=https://rubicon.lucsoft.de/source/content/login.php?type=discord">';

         } catch (Exception $e) {
            echo "An error occurred!";
         }
      }
   } else {
      $user = $_SESSION['discord_user'];
      $pdo = new PDO('mysql:host=' . $config['database']['host'].';dbname=' . $config['database']['dbname'], $config['database']['username'], $config['database']['password']);
      $sql = "SELECT * FROM `Users`";
      $accontCreated = false;
      if (!isset($user['email'])) {
         print "Missing Email!";
         exit();
      }
      foreach ($pdo->query($sql) as $item) {

         if ($item['Id'] == $user['id']) {
            if (!$item['isAllowed']) {
               header("Location: https://rubicon.lucsoft.de/source/pages/AdvancedMonitoring.php?error=nopermission&user". $user['id']);
               exit();
            }
            function String2Hex($string){
               $hex='';
               for ($i=0; $i < strlen($string); $i++){
                  $hex .= dechex(ord($string[$i]));
               }
               return $hex;
            }
            if ($item['email'] == $user['email']) {

               $statement = $pdo->prepare("SELECT * FROM `Users` WHERE Id = ?");
               $statement->execute(array($item["Id"]));
               while($row = $statement->fetch()) {
                  if (setcookie("RubiconWebLoginToken", $row['email'] . "#" . md5($row['Password']), (time() + 3600) * 24, "/", "rubicon.lucsoft.de")) {
                     header("Location: https://rubicon.lucsoft.de/source/pages/AdvancedMonitoring.php");
                  } else {
                     print "Bitte aktivieren sie Cookies im Browser!";
                     exit();
                  }
               }
               exit();
            } else {
               $genpassword = bin2hex(mcrypt_create_iv(25, MCRYPT_DEV_URANDOM));
               $statement = $pdo->prepare("UPDATE `Users` SET email = ? WHERE Id = ?");
               $statement->execute(array($user['email'], $item['Id']));
               $statement = $pdo->prepare("UPDATE `Users` SET password = ? WHERE Id = ?");
               $statement->execute(array(md5($genpassword), $item['Id']));
               file_get_contents("https://lucsoft.de/api/discord_webhook?content=" . urlencode("**Neue Registrierung: Beim RubiconWeb!**\n\nBetroffener Nutzer: <@" . $user['id'] . ">\n\nNotiz:\n`+ eMail-Adresse gesetzt\n+ Neues Passwort gesetzt`\n**\n**") ."&username=" .$config["webhook"]["username"] ."&webhook_id=" . $config["webhook"]["id"] ."&webhook_token=" . $config["webhook"]["token"]);
               if (setcookie("RubiconWebLoginToken", bin2hex($user['email'] . "#" . $genpassword), time()+3600 * 24 * 30 * 5)) {
                  print "Du bist nun registriert!";
                     exit();
               } else {
                  print "Bitte aktivieren Cookies!";
                  exit();
               }
            }
         }
      }
      header("Location: https://rubicon.lucsoft.de/source/pages/AdvancedMonitoring.php?error=cantfind&user". $user['id']);
      exit();
   }

}

?>

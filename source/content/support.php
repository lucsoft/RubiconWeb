<?php
$config = include '../config.php';
if ($_GET['type'] == "LoginNotAllowed") {
   file_get_contents("https://lucsoft.de/api/discord_webhook?content=" . urlencode("**Fehler: Keine Rechte!**\nDurch: <@" . $_GET['user'] . "> (wird eingeladen in <#386832784179855361>)\nAufgabe für: <@&428474112122552320>\n**\n**") ."&username=" .$config["webhook"]["username"] ."&webhook_id=" . $config["webhook"]["id"] ."&webhook_token=" . $config["webhook"]["token"]);
   header("Location: " . $config['nav']['support']);
} elseif ($_GET['type'] == "LoginCantFind") {

      file_get_contents("https://lucsoft.de/api/discord_webhook?content=" . urlencode("**Fehler: Nutzer nicht in Datenbank gefunden!**\nDurch: <@" . $_GET['user'] . "> (wird eingeladen in <#386832784179855361>)\nAufgabe für: <@&428474112122552320>\n**\n**") ."&username=" .$config["webhook"]["username"] ."&webhook_id=" . $config["webhook"]["id"] ."&webhook_token=" . $config["webhook"]["token"]);
      header("Location: " . $config['nav']['support']);
} ?>

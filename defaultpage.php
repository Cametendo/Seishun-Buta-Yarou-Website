<?php
$domain = strtr($_SERVER["HTTP_HOST"], array("www." => ""));
$sprache = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Unterstützte Sprachen überprüfen
if (!in_array($sprache, ["de", "fr", "it", "en"])) {
    $sprache = "de"; // Standard auf Deutsch setzen
}

// Weiterleitung zur gewünschten Standardseite
header("Location: /www/akazatez.myhostpoint.ch/index.html");
exit();
?>

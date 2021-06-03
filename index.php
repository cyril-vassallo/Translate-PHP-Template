<?php

$local = 'fr_FR';

if (defined('LC_MESSAGES')) {
    setlocale(LC_MESSAGES, $local); // Linux
    bindtextdomain("messages", "./local");
} else {
    putenv("LC_ALL={$local}"); // windows
    bindtextdomain("messages", ".\local");
}


textdomain("messages");


echo _('Hello');
echo '<br/>';
echo _('Goodby');

?>
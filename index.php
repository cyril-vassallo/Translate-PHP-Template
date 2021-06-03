<?php

$locale = 'fr_FR';

if (defined('LC_MESSAGES')) {
    setlocale(LC_MESSAGES, $locale); // Linux
    bindtextdomain("messages", "./local");
} else {
    putenv("LC_ALL={$locale}"); // windows
    bindtextdomain("messages", ".\local");
}


textdomain("messages");


echo _('Hello');
echo '<br/>';
echo _('Goodby');

?>
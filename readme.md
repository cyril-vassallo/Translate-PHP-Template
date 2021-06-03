# Make Translation of a php template

```php
echo _('Hello'); // syntax to be available for translation
echo '<br/>'; // this line will be ignore
echo _('Goodby'); // This one is available too
```

## Generate the .po file

```bash
$ xgettext -n index.php
```

You should get **message.po** file directly generated from your php file

## Edit and replace your .po file header with the followings

```code
"Language: fr\n"
"Content-Type: text/plain; charset=UTF-8\n"
```

## Translate fields in the .po file

- msgid is the initial id 
- msgstr is the translation, if empty the id is not translated and keep the original value msgid 


```code
#: index.php:17
msgid "Hello" 
msgstr "Bonjour" 

#: index.php:19
msgid "Goodby"
msgstr "Byebye"
```


## Generate the binary file from your .po file

```bash
$ msgfmt message.po
```

You should get **message.mo** binary file directly generated from your .po file


## Create local folder and mouve your .po and .mo file into it

```bash
$ mkdir local/fr_FR/LC_MESSAGES
```

## Add some php code at the top head of your translated .php template

```php
$local = 'fr_FR';

if (defined('LC_MESSAGES')) {
    setlocale(LC_MESSAGES, $local); // Linux
    bindtextdomain("messages", "./local");
} else {
    putenv("LC_ALL={$local}"); // windows
    bindtextdomain("messages", ".\local");
}


textdomain("messages");
```

## Now refresh the template 

congrats you can see displayed:

```code
Bonjour
Byebye
```

## source

### php.net

Source exemple of this repository
- https://www.php.net/manual/fr/book.gettext.php

### poedit.net 

client to translate .po file and generate to .mo binary
- https://poedit.net/

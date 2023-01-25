<?php
setcookie('login', $_POST['login'], time() + 3600, '/', 'localhost', true, true);
setcookie('mots', $_POST['mots'], time() + 3600, '/', 'localhost', true, true);

//exercice4
echo $_COOKIE['login'] . '<br>';
echo $_COOKIE['mots'];

//exercice5
$_COOKIE['login'] = "monLogin";
$_COOKIE['mots'] = "monMotsDePasse";

echo $_COOKIE['login'] . '<br>';
echo $_COOKIE['mots'];
#!/usr/bin/env php
<?php
// bmicroshell.php for  in /home/paolin_t/MicroShell
// 
// Made by PAOLINI Tom
// Login   <paolin_t@etna-alternance.net>
// 
// Started on  Fri Oct 17 10:48:50 2014 PAOLINI Tom
// Last update Fri Oct 17 14:49:21 2014 PAOLINI Tom
//
// $b = ce que l'on ecrit dans le prog

require_once('./include/my_pwd.php');
require_once('./include/my_echo.php');
require_once('./include/aff_prompt.php');
require_once('./include/my_ls.php');
require_once('./include/my_cat.php');
require_once('./include/my_cd.php');

$file = fopen("php://stdin", "r"); //entrée standar, wait to enter command
echo "\e[32m$> \e[0m"; // affiche mon prompt au lancement du prog
while (($b = fgets($file)) !== false && rtrim($b) != "exit") // rtrim suprimme le \n a la fin de "exit"
  {
    $a = preg_split('/\s+/', rtrim($b));
    if (rtrim($b) == "pwd")
      my_pwd($b);
    else if ($a[0] == "echo")
        my_echo($a);
     else if ($a[0] == "cd")
        my_cd($a);
    else if ($a[0] == "ls")
      my_ls($b);
    else if ($a[0] == "cat")
      my_cat($b);
    else
      echo "my_microshell: $a[0]: command not found\n";
    aff_prompt(); // fin de while
  }
fclose($file);
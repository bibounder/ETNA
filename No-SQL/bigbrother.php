#!/usr/bin/env php
<?php
// mydb.php for  in /Users/paolin_t/Documents/NoSQL
// 
// Made by MOULINETTE Edouard
// Login   <moulin_e@etna-alternance.net>
// 
// Started on  Tue Jan  6 09:25:58 2015 PAOLINI Tom
// Last update Fri Jan  9 16:17:31 2015 PAOLINI Tom
//

require_once('./include/add_student.php');
require_once('./include/add_comment.php');
require_once('./include/bienvenue.php');
require_once('./include/del_student.php');
require_once('./include/update_student.php');
require_once('./include/show_student.php');
require_once('./include/show_all.php');
require_once('./include/delete_all.php');

function	launcher()
{
  system('clear');
  global $collection;
  bienvenue();
  while (($b = fgets(STDIN)) !== false && rtrim($b) != "quit")
    {
      if (!($a = preg_split('/\s+/', rtrim($b))))
        $a = array("", "");
      if ($a[0] == "add_student" && (!empty($a[1])))
        add_student($a[1]);
      else if ($a[0] == "del_student" && (!empty($a[1])))
    	del_student($a[1]);
      else if ($a[0] == "delete_all")
	delete_all();
      else if ($a[0] == "update_student" && (!empty($a[1])))
    	update_student($a[1]);
      else if ($a[0] == "show_student")
    	show_student($a[1]);
      else if ($a[0] == "show_all")
	show_all();
      else if ($a[0] == "add_comment" && (!empty($a[1])))
    	add_comment($a[1]);
      else
	{
	  system('clear');
    	  echo "\n\e[31mLa commande ou le paramètre saisie est érronée ou manquant\e[0m\n\n";
	}
      echo "> add_student login_de_l'étudiant\n";
      echo "> del_student login_de_l'étudiant\n";
      echo "> update_student login_de_l'étudiant\n";
      echo "> show_student (login facultatif)\n";
      echo "> show_all \n";
      echo "> delete_all (supprime tous les utilisateurs de la base)\n";
      echo "> add_comment login_de_l'étudiant\n";
      echo "> quit pour quitter le programme \n\n";
      echo "Veuillez saisir une commande : ";

    }
}
$c = new MongoClient();
  $db = $c->mydb;
  $collection = $db->createCollection('student');
if ($argc >= 3 && function_exists($argv[1]))
  $argv[1]($argv[2]);
else if ($argc == 2)
    echo "\e[31mIl manque le login de l'etudiant\e[0m\n";
else
  launcher();
?>
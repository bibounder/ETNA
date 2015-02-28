<?php
// delete_all.php for  in /Users/paolin_t/Documents/NoSQL/include
// 
// Made by PAOLINI Tom
// Login   <paolin_t@etna-alternance.net>
// 
// Started on  Fri Jan  9 16:14:35 2015 PAOLINI Tom
// Last update Fri Jan  9 16:14:45 2015 PAOLINI Tom
//

function delete_all()
{
  system('clear');
  global $collection;
  echo "Etes vous certain de vouloir supprimer la base de donnée ? (oui/non) \n > ";
  $a = rtrim(fgets(STDIN));
  if ($a == "oui")
    {
      $collection->drop('mydb');
      echo "\e[32mTous les utilisateurs ont bien été supprimé !\e[0m";
    }
  else if ($a == "non")
    echo "\e[32mLa base de donnée n'a pas été supprimé !\e[0m\n";
  else
    {
      echo "\e[31mVous devez répondre par oui ou non. \e[0m\n";
      delete_all();
    }
  launcher();
}
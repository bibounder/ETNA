<?php
// del_student.php for  in /Users/paolin_t/Documents/NoSQL/include
// 
// Made by PAOLINI Tom
// Login   <paolin_t@etna-alternance.net>
// 
// Started on  Tue Jan  6 09:26:11 2015 PAOLINI Tom
// Last update Fri Jan  9 16:10:25 2015 PAOLINI Tom
//

function	del_student($login)
{
  system('clear');
  global $collection;
  echo "Etes vous certain de vouloir supprimer l'utilisateur $login ? (oui/non) \n > ";
  $a = rtrim(fgets(STDIN));
  if ($a == "oui")
    {
      if ($collection->remove(array( 'Login' => $login), array("w" => true))['n']==1)
	echo "\e[32mL'utilisateur $login à bien été supprimé, félicitation ! \e[0m\n";
      else
        echo "\e[31mL'utilisateur $login n'existe pas ! \e[0m\n";
    }
  else if ($a == "non")
    echo "\e[32mL'utilisateur $login n'a pas été supprimé ! \e[0m\n";
  else
    {
      echo "\e[31mVous devez répondre par oui ou non. \e[0m\n";
      del_student($login);
    }
  launcher();
}
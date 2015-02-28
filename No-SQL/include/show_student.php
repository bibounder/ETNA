<?php
// show_student.php for  in /Users/paolin_t/Documents/NoSQL/include
// 
// Made by PAOLINI Tom
// Login   <paolin_t@etna-alternance.net>
// 
// Started on  Tue Jan  6 09:24:43 2015 PAOLINI Tom
// Last update Fri Jan  9 16:15:48 2015 PAOLINI Tom
//

function show_student($login = NULL)
{
  if (is_null($login))
    {
      echo "Saisir le login de l'etudiant \n > ";
      $login = rtrim(fgets(STDIN));
    }
  global $collection;
  $cursor = $collection->find(array("Login" => $login));
  foreach ($cursor as $document) 
    {
      foreach ($document as $a => $element) 
      	echo $a.': '.$element."\n";
    }
  if (!(isset($document)))
    {
      echo "\e[31mCe login n'existe pas ! \e[0m\n";
      show_student();
    }
  echo "\nVoulez-vous voir un autre étudiant (oui/non) ? \n > ";
  $b = rtrim(fgets(STDIN));
  if ($b == "oui")
    show_student();
  else if ($b == "non")
    return (0);
  else 
    {
      while ($b != "oui" && $b != "non")
    	{
	  echo "\e[31mVeuillez répondre par oui ou non \e[0m\n > ";
	  $b = rtrim(fgets(STDIN));
	  if ($b == "oui")
	    show_student();
	  else if ($b == "non")
	    {
	      return (0);
	      echo "\f";
	    }
    	}
    }
  system('clear');
}

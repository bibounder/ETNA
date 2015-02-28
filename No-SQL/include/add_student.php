<?php
// add_student.php for  in /Users/paolin_t/Documents/NoSQL/include
// 
// Made by PAOLINI Tom
// Login   <paolin_t@etna-alternance.net>
// 
// Started on  Tue Jan  6 09:25:40 2015 PAOLINI Tom
// Last update Fri Jan  9 16:09:57 2015 PAOLINI Tom
//

function	add_student($login)
{	
  system('clear');
  global $collection;
  $cursor = $collection->findOne(array("Login" => $login));
  if (isset($cursor))
    {
      echo "\e[31mCe login est déjà pris !\e[0m\n";
      
    }
  else
    {
      echo "Veuillez renseigner un nom et un prénom pour l'étudiant: ";
      $a = rtrim(fgets(STDIN));
      echo "Veuillez renseigner la promo de l'étudiant: ";
      $b = rtrim(fgets(STDIN));
      echo "Veuillez renseigner l'email de l'étudiant: ";
      $c = rtrim(fgets(STDIN));
      while (!(preg_match("/[-0-9a-zçéèàáüA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,15}/", $c)))
	{
	  echo "\e[31mL'adresse mail entrée n'est pas valide ! \e[0m\n > ";
	  $c = rtrim(fgets(STDIN));}
      if (preg_match("/[-0-9a-zçéèàáüA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,15}/", $c))
	{
	  echo "Veuillez renseigner le numéro de téléphone de l'étudiant: ";
	  $d = rtrim(fgets(STDIN));
	  while (!(preg_match("/^0[0-9]([ .-]?[0-9]{2}){4}$/", $d)))
	    {
	      echo "\e[31mLe numéro de téléphone n'est pas valide, il doit contenir 10 chiffres et commencer par 0 ! \e[0m\n > ";
	      $d = rtrim(fgets(STDIN));
	    }
	  if (preg_match("/^0[0-9]([ .-]?[0-9]{2}){4}$/", $d))
	    {
	      $doc = array(
			   "Login" => "$login",
			   "Nom" => "$a",
			   "Promo" => "$b",
			   "Email" => "$c",
			   "Telephone" => "$d"
			   );
	      $collection->insert($doc);
	      echo "\n\e[32mL'utilisateur $login à bien été enregistré, félicitation ! \e[0m\n";
	      show_student($login);
	    }
	}
    }
}
